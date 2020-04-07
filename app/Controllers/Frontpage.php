<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\FrontpageAdminModel;
use App\Models\HeaderPlatformModel;
use App\Models\SelectPlatformModel;

class Frontpage extends BaseController
{

    public function __construct() {
        $session = \Config\Services::session();
        $session->start();
        $this->FrontpageAdminModel = new FrontpageAdminModel();
        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->SelectPlatformModel = new SelectPlatformModel();

    }

public function index($platform_id=null) {

    // $model = new FrontpageAdminModel();
    $data = [
        'title' => 'Quarantine games',
    ];

    $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();
    // get frontpage view if null
    if ($platform_id === null) {
        //$data['products'] = $this->FrontpageAdminModel->getProducts();
    }

    $data['platform_id'] = $platform_id;
    

    // get products based on tuoteryhma
    $data['products'] = $this->SelectPlatformModel->selectPlatform($platform_id);
    
    echo view('templates/header', $data);
    echo view('Frontpage/frontpage_view',$data);
    echo view('templates/footer');
}
}
