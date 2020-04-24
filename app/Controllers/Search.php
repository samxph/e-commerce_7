<?php

namespace App\Controllers;

use CodeIgniter\Controller;

// 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;
use App\Models\FrontpageAdminModel;


class Search extends BaseController {

    public function __construct() {
        $session = \Config\Services::session();
        $session->start();
        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->HeaderGenreModel = new HeaderGenreModel();
        $this->FrontpageAdminModel = new FrontpageAdminModel();
    }

    public function index() {
        
        $data = [
            'title' => 'Quarantine games',
        ];

        $search = $this->filter_input(INPUT_POST, "search", FILTER_SANITIZE_STRING);

        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        $data['productsTitle'] = "Search results for $search";
        $data['products'] = $this->FrontpageAdminModel->searchGames('witcher');

        echo view('templates/header', $data);
        echo view('games_view',$data);
        echo view('templates/footer');
    }
}