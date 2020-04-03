<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\FrontpageAdminModel;

class Frontpage extends BaseController
{


public function index() {

    $model = new FrontpageAdminModel();
    $data = [
        'title' => 'Quarantine games',
    ];
    $data['products'] = $model->getProducts();

    echo view('templates/header', $data);
    echo view('Frontpage/frontpage_view',$data);
    echo view('templates/footer');
}
}
