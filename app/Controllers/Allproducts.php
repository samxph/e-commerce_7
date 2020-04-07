<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\AllproductsAdminModel;

class Allproducts extends BaseController
{


public function index() {

    $model = new AllproductsAdminModel();
    $data = [
        'title' => 'Quarantine games',
    ];
    $data['products'] = $model->getProducts();

    echo view('templates/header', $data);
    echo view('Allproducts/allproducts_view',$data);
    echo view('templates/footer');
}
}
