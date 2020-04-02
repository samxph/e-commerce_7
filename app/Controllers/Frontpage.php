<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\FrontpageAdminModel;

class Frontpage extends BaseController
{
public function index() {
    echo view('templates/header', ['title' => 'Quarantine Games']);
    echo view('Frontpage/frontpage_view');
    echo view('templates/footer');
}
}
