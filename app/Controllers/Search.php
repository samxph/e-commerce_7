<?php

namespace App\Controllers;

use CodeIgniter\Controller;

// 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;
use App\Models\SelectPlatformModel;


class Search extends BaseController {

    public function __construct() {
        $session = \Config\Services::session();
        $session->start();
        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->HeaderGenreModel = new HeaderGenreModel();
        $this->SelectPlatformModel = new SelectPlatformModel();

    }

    public function search() {

        $search = $this->filter_input(INPUT_GET, 'searchbar', FILTER_SANITIZE_STRING);

        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        $data['products'] = $this->SelectPlatformModel->searchPlatform($search);

        echo view('templates/header', $data);
        echo view('Frontpage/frontpage_view',$data);
        echo view('templates/footer');
    }
}