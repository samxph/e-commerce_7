<?php

namespace App\Controllers;

use App\Models\ShoppingcartAdminModel;
// 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;
use App\Models\OrderModel;

class Shoppingcart extends BaseController
{

    public function __construct()
    {
        $session = \Config\Services::session();
        $session->start();

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        $this->ShoppingcartAdminModel = new ShoppingcartAdminModel();
        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->HeaderGenreModel = new HeaderGenreModel();
    }
    public function ordersuccess()

    {
        $model = new ShoppingcartAdminModel();

        if (count($_SESSION['cart']) > 0) {
            $products = $this->ShoppingcartAdminModel->getProducts($_SESSION['cart']);
        } else {
            $products = array();
        }

        $data2['products'] = $products;
        $data1 = ['title' => 'Shopping cart'];
        $data1['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();
        $data1['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data1['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        echo view('templates/header', $data1);
        echo view('order_view', $data2);
        echo view('templates/footer');

        return redirect('checkout');
    }
    
    public function order(){
        $model = new OrderModel();
        $model = new ShoppingcartAdminModel();
        $customer = [
                'username' => $this->request->getVar('user'),
                'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
                'firstname' => $this->request->getVar('fname'),
                'lastname' => $this->request->getVar('lname'),
                'email' => $this->request->getVar('usermail'),
                'address' => $this->request->getVar('useraddress'),
                'postcode' => $this->request->getVar('userpostcode'),
                'postOffice' => $this->request->getVar('userpostoffice'),
                'phone' => $this->request->getVar('userphone')
        ];
        

        $order = $model->save($customer, $_SESSION['cart']);

        if ($order == true){
            unset($_SESSION['cart']);

            return redirect("/");
        }
        else
            return redirect ("/");
        
    }
    public function index()

    {
        $model = new ShoppingcartAdminModel();

        if (count($_SESSION['cart']) > 0) {
            $products = $this->ShoppingcartAdminModel->getProducts($_SESSION['cart']);
        } else {
            $products = array();
        }

        $data2['products'] = $products;
        $data1 = ['title' => 'Shopping cart'];
        $data1['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();
        $data1['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data1['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        echo view('templates/header', $data1);
        echo view('checkout_view', $data2);
        echo view('templates/footer');
        
    }
}

