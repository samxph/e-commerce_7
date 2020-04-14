<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\HeaderPlatformModel;
use App\Models\AllGenresModel;


class Faq extends BaseController
{
    public function __construct() {
        $session = \Config\Services::session();
        $session->start();

        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->GetAllGenres = new AllGenresModel();
      }

    public function index() {
        $data['title'] = 'Quarantine games - FAQ';
        // gets all genres and platforms from database
        $data['allGenres'] = $this->GetAllGenres->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();
        echo view('templates/header', $data); //set view and pass data.
        echo view('info/faq', $data);
        echo view('templates/footer', $data);
    }

}
