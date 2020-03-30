<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\FrontpageAdminModel;

class Frontpage extends BaseController
{
public function index() {
    echo view('templates/header');
    echo view('frontpage_view');
    echo view('templates/footer');
}
}
