<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\FrontpageAdminModel;

class Frontpage extends BaseController
{


public function index() {

    $data = [
        'title' => 'Quarantine games'
    ];

    echo view('templates/header', $data);
    echo view('Frontpage/frontpage_view');
    echo view('templates/footer');
}
}
