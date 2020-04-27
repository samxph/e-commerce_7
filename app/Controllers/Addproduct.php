<?php

namespace App\Controllers;

use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;



class Addproduct extends BaseController
{
    public function __construct()
    {
        $session = \Config\Services::session();
        $session->start();

        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->HeaderGenreModel = new HeaderGenreModel();
    }

    public function index()
    {
        $data = ['title' => 'Add product'];
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        echo view('templates/header', $data);
        echo view('addproduct_view');
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
