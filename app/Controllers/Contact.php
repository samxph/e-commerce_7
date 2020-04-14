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

    public function send()
    {
        $model = new ContactModel();

        $data = ['title' => 'Contact us'];
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        if (!$this->validate([
            'name' => 'required|min_length[5]|max_length[100]',
            'email' => 'required|min_length[5]|max_length[100]',
            'subject' => 'required|min_length[1]|max_length[50]',
            'message' => 'required|min_length[1]|max_length[500]'
        ])) {
            echo view('templates/header', $data);
            echo view('contact/contactsent_view');
            echo view('templates/footer');
        } else {
            $model->save([
                'email' => $this->request->getVar('email'),
                'name' => $this->request->getVar('name'),
                'subject' => $this->request->getVar('subject'),
                'message' => $this->request->getVar('message')
            ]);
            // if validation passed, redirect
            return redirect('Contactsent');
        }
    }
}
