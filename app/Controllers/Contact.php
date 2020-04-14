<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;
use App\Models\ContactModel;

class Contact extends BaseController
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
        $data = ['title' => 'Contact us'];
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();


        echo view('templates/header', $data);
        echo view('contact/contact_view');
        echo view('templates/footer');
    }

    public function send() {

        $model = new ContactModel();
        $data = ['title' => 'Contact us'];
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();
        
        if (!$this->validate([
            'email' => 'required|min_length[5]|max_length[30]',
            'subject' => 'required|min_length[1]|max_length[30]',
            'message' => 'required|min_length[1]|max_length[400]'
        ])) {
            echo view('templates/header', $data);
            echo view('contact/contactsent_view');
            echo view('templates/footer');
        } 
            else { // if validation not passed, redirect to contact page
                return redirect('contact');
            }
        }
}
