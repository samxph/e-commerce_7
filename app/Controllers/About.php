<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;


class About extends BaseController
{
    public function __construct() {
        $session = \Config\Services::session();
        $session->start();

        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->HeaderGenreModel = new HeaderGenreModel();
      }

    public function index() {
        $data['title'] = 'About us';
        // gets all genres and platforms from database
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();
        echo view('templates/header', $data); //set view and pass data.
        echo view('info/about', $data);
        echo view('templates/footer', $data);
    }

}
