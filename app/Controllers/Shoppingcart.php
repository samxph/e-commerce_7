<?php

namespace App\Controllers;

use App\Models\ShoppingcartAdminModel;
// 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;

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
        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $data1['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data1['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        echo view('templates/header', $data1);
        echo view('shoppingcart_view', $data2);
        echo view('templates/footer');
    }

    public function add($product_id)
    {
        array_push($_SESSION['cart'], $product_id);

        $platform_id = $_SESSION['platform'];
        $genre_id = $_SESSION['genre'];

        return redirect("Frontpage/$platform_id/$genre_id");
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
    public function checkout()

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
    }
    public function emptycode()
    {
        $_SESSION['codes'] = null;

        return redirect('checkout');
    }
}
