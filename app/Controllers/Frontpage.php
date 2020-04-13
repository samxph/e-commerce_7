<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\FrontpageAdminModel;
use App\Models\HeaderPlatformModel;
use App\Models\SelectPlatformModel;
use App\Models\GenreModel;
use App\Models\AllGenresModel;

class Frontpage extends BaseController
{

    public function __construct() {
        $session = \Config\Services::session();
        $session->start();
        $this->FrontpageAdminModel = new FrontpageAdminModel();
        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->SelectPlatformModel = new SelectPlatformModel();
        $this->GenreModel = new GenreModel();
        $this->GetAllGenres = new AllGenresModel();

    }

public function index($platform_id=null, $genre_id=null) {

    //session_start();

    //if (!isset($_SESSION['ostoskori']))
    //    $_SESSION['ostoskori'] = []; 

    //$model = new FrontpageAdminModel();
    $data = [
        'title' => 'Quarantine games',
    ];

    
    
    // get frontpage view if null

    /*
    if ($platform_id === null) {
        $data['products'] = $this->FrontpageAdminModel->getProducts();
    }
    */

    // get products based on platform from the header view and takes it to model
    //$data['products'] = $this->SelectPlatformModel->selectPlatform($platform_id);
    
    // gets all genres and platforms from database
    $data['allGenres'] = $this->GetAllGenres->getAllGenres();
    $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();
    // gets genre's and platform's id 
    
    $data['platform_id'] = $platform_id;
    $data['genre_id'] = $genre_id;
    //$data['products'] = $this->GenreModel->getGenres($platform_id, $genre_name);

    if ($genre_id !== null) {           
        $data['products'] = $this->GenreModel->getGenres($platform_id, $genre_id);
    } 
    else if ($platform_id !== null) {
        $data['products'] = $this->SelectPlatformModel->selectPlatform($platform_id);            
    } 
    else {
        $data['products'] = $this->FrontpageAdminModel->getProducts();
    }

    echo view('templates/header', $data);
    echo view('Frontpage/frontpage_view',$data);
    echo view('templates/footer');
}

}
