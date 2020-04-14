<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\FrontpageAdminModel;
// 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;
use App\Models\SelectPlatformModel;
use App\Models\GenreModel;
use App\Models\DeviceModel;

class Frontpage extends BaseController
{

    public function __construct() {
        $session = \Config\Services::session();
        $session->start();
        $this->FrontpageAdminModel = new FrontpageAdminModel();
        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->HeaderGenreModel = new HeaderGenreModel();
        $this->SelectPlatformModel = new SelectPlatformModel();
        $this->GenreModel = new GenreModel();
        $this->DeviceModel = new DeviceModel();

    }

public function index($platform_id=null, $genre_id=null) {
    
    $data = [
        'title' => 'Quarantine games',
    ];

    // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
    $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
    $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

    // gets genre's and platform's id     
    $data['platform_name'] = $platform_id;
    $platform_name = str_replace('%20', ' ', $platform_id);
    $data['genre_name'] = $genre_id;    
    $genre_name = str_replace('%20', ' ', $genre_id);


    if ($genre_id !== null) {   
        if ($platform_name = "Devices and Accessories") {
            $data['products'] = $this->DeviceModel->DeviceModel($genre_name);
            $data['productsTitle'] = "$genre_name";
        } else {
            $data['products'] = $this->GenreModel->getGenres($platform_name, $genre_name);
            $data['productsTitle'] = "$genre_name Games";
        }       
    } 
    else if ($platform_id !== null) {
        $data['products'] = $this->SelectPlatformModel->selectPlatform($platform_name);     
        $data['productsTitle'] = "$platform_name Games";
        } 
    else {
        $data['products'] = $this->FrontpageAdminModel->getProducts();
        $data['productsTitle'] = 'New Released Games';
    }

    echo view('templates/header', $data);
    echo view('Frontpage/frontpage_view',$data);
    echo view('templates/footer');
}

}
