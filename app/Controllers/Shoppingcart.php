<?php namespace App\Controllers;

use App\Models\ShoppingcartAdminModel;

class Shoppingcart extends BaseController
{

    public function __construct()
    {
        $session = \Config\Services::session();
        $session->start();

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $this->ShoppingcartAdminModel = new ShoppingcartAdminModel();

    }

	public function index()
	{

        $model = new ShoppingcartAdminModel();

		if (count($_SESSION['cart']) > 0) {
            $products = $this->ShoppingcartAminModel->getProducts($_SESSION['cart']);
        } else {
            $products = [];
        }

        $data['prodcuts'] = $products;
        $data = ['title' => 'Shopping cart'];


        echo view('templates/header', $data);
        echo view('shoppingcart_view', $data);
        echo view('templates/footer');
    }
    
    public function add($id) {
        array_push($_SESSION['cart'], $id);
        
        return redirect('/');
    }

    public function remove() {
        $_SESSION['cart'] = null;
        
        return redirect('/');
    }

}
