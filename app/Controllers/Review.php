<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;
use App\Models\ReviewModel;

const ADDREVIEW_TITLE = 'Add new review';
const REVIEW_TITLE = 'Read reviews';

class Review extends BaseController{

    public function __construct()
    {
        $session = \Config\Services::session();
        $session->start();

        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->HeaderGenreModel = new HeaderGenreModel();
    }

    public function index()
    {
        $data['title'] = REVIEW_TITLE;
        $reviewModel = new ReviewModel();
        $data['reviews'] = $reviewModel->findAll();
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();


        echo view('templates/header', $data);
        echo view('review/readreview_view', $data);
        echo view('templates/footer');
    }

    public function sendreview() {
        
        $data['title'] = ADDREVIEW_TITLE;
        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        echo view('templates/header',$data);
        echo view('review/addreview_view', $data);
        echo view('templates/footer', $data);


    }

    public function addreview() {

        $data = [
            'subject' => $this->request->getVar('subject'),
            'name' => $this->request->getVar('name'),
            'message' => $this->request->getVar('message')
        ];
        $reviewModel = new ReviewModel();
        $reviewModel->insert($data);
        return redirect('review');
    }

}