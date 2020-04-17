<?php

namespace App\Controllers;
// 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;
class order extends BaseController{



public function order(){
        $customer = [
            'firstname' => $this->request->getPost('fname'),
            'lastname' => $this->request->getPost('lname'),
            'email' => $this->request->getPost('usermail'),
            'address' => $this->request->getPost('useraddress'),
            'postcode' => $this->request->getPost('userpostcode'),
            'postOffice' => $this->request->getPost('userpostoffice')
        ];
        $orderModel = new orderModel();

        $order = $orderModel->save($customer, $_SESSION['cart']);

        if ($order == true){
            unset($_SESSION['cart']);

            return redirect("/");
        }
        else
            return redirect ("/");
        
    }
}