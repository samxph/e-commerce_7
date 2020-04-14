<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\ShoppingcartAdminModel;
use App\Models\HeaderPlatformModel;
use App\Models\AllGenresModel;

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
        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->GetAllGenres = new AllGenresModel();
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
        // gets all genres and platforms from database
        $data1['allGenres'] = $this->GetAllGenres->getAllGenres();
        $data1['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();
        
        echo view('templates/header', $data1);
        echo view('shoppingcart_view', $data2);
        echo view('templates/footer');
    }

    public function add($product_id)
    {
        array_push($_SESSION['cart'], $product_id);

        return redirect('/');
    }

    public function remove()
    {
        

        return redirect('shoppingcart');
    }

    public function empty()
    {
        $_SESSION['cart'] = null;

        return redirect('shoppingcart');
    }

}
