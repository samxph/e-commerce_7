<?php namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;

class Contact extends BaseController
{

    public function __construct() {
        $session = \Config\Services::session();
        $session->start();

        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->HeaderGenreModel = new HeaderGenreModel();

    }

	public function index()
	{
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();
        $data = ['title' => 'Contact us'];

        echo view('templates/header', $data);
        echo view('contact_view');
        echo view('templates/footer');
    }
    
    public function send()
	{

	}
}
