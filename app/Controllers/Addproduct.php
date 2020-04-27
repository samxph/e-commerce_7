<?php

namespace App\Controllers;

use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;
use App\Models\AddproductModel;
use App\Models\DeveloperModel;
use App\Models\PublisherModel;

class Addproduct extends BaseController
{
    public function __construct()
    {
        $session = \Config\Services::session();
        $session->start();

        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->HeaderGenreModel = new HeaderGenreModel();

        $this->PublisherModel = new PublisherModel();
        $this->DeveloperModel = new DeveloperModel();
    }

    public function index()
    {
        $data = ['title' => 'Add product'];
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        $data2['developers'] = $this->DeveloperModel->getDevelopers();
        $data2['publishers'] = $this->PublisherModel->getPublishers();

        echo view('templates/header', $data);
        echo view('addproduct_view', $data2);
        echo view('templates/footer');
    }

    public function add()
    {
        $product = [
            'title' => $this->request->getPost('title'),
            'releasedate' => $this->request->getPost('releasedate'),
            'price' => $this->request->getPost('price'),
            'picture' => $this->request->getPost('picture'),
            'description' => $this->request->getPost('description'),
            'developer' => $this->request->getPost('developer'),
            'publisher' => $this->request->getPost('publisher')
        ];

    }
}
