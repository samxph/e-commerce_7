<?php

namespace App\Controllers;

use App\Models\OrderModel;
// 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;

use App\Models\ShoppingcartAdminModel;

class Order extends BaseController
{

    public function __construct()
    {
        $session = \Config\Services::session();
        $session->start();

        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->HeaderGenreModel = new HeaderGenreModel();
        $this->ShoppingcartAdminModel = new ShoppingcartAdminModel();
    }

    public function index()
    {

        if (count($_SESSION['cart']) > 0) {
            $products = $this->ShoppingcartAdminModel->getProducts($_SESSION['cart']);
        } else {
            $products = array();
        }

        $data = ['title' => 'Checkout'];
        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        echo view('templates/header', $data);
        echo view('checkout_view');
        echo view('templates/footer');
    }

    public function makeorder()
    {
        $OrderModel = new OrderModel();

        $customer = [
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'address' => $this->request->getPost('address'),
            'postcode' => $this->request->getPost('postcode'),
            'postoffice' => $this->request->getPost('postoffice'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone')
        ];

        $OrderModel->saveInfo($customer, $_SESSION['cart']);
        //unset($_SESSION['cart']);
        $_SESSION['cart'] = array();

        $data = ['title' => 'Thank you'];
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        echo view('templates/header', $data);
        echo view('ordercompleted_view');
        echo view('templates/footer');
    }
}
