<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\FrontpageAdminModel;
// 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;
use App\Models\SelectPlatformModel;
use App\Models\GenreModel;

use App\Models\PublisherModel;
use App\Models\DeveloperModel;

class Frontpage extends BaseController
{

    public function __construct() {
        $session = \Config\Services::session();
        $session->start();

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        
        $this->FrontpageAdminModel = new FrontpageAdminModel();
        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->HeaderGenreModel = new HeaderGenreModel();
        $this->SelectPlatformModel = new SelectPlatformModel();
        $this->GenreModel = new GenreModel();

        $this->PublisherModel = new PublisherModel();
        $this->DeveloperModel = new DeveloperModel();
    }

    public function index() {
        
        $data = [
            'title' => 'Quarantine games',
        ];

        $_SESSION['genre'] = null;
        $_SESSION['platform'] = null;
        $_SESSION['search'] = null;
        $_SESSION['searchby'] = null;

        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        $data['products'] = $this->FrontpageAdminModel->getProducts();
        $data['productsTitle'] = 'New Released Games';

        echo view('templates/header', $data);
        echo view('Frontpage/frontpage_view',$data);
        echo view('templates/footer');
    }

    public function searchplatform($platform_id) {

        $data = [
            'title' => 'Quarantine games',
        ];

        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        $platform_name = str_replace('%20', ' ', $platform_id);

        $data['products'] = $this->SelectPlatformModel->selectPlatform($platform_name);     
        $data['productsTitle'] = "$platform_name Games";

        $_SESSION['search'] = null;
        $_SESSION['searchfor'] = null;
        $_SESSION['genre'] = null;
        $_SESSION['platform'] = $platform_id;

        echo view('templates/header', $data);
        echo view('games_view',$data);
        echo view('templates/footer');
    }

    public function searchgenre($platform_id, $genre_id) {

        $data = [
            'title' => 'Quarantine games',
        ];

        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        $platform_name = str_replace('%20', ' ', $platform_id);
        $genre_name = str_replace('%20', ' ', $genre_id);

        $data['products'] = $this->GenreModel->getGenres($platform_name, $genre_name);

        if ($platform_name === "Devices and Accessories") {
            $data['productsTitle'] = "$genre_name";
        } else {
            $data['productsTitle'] = "$platform_name $genre_name Games"; 
        }

        $_SESSION['search'] = null;
        $_SESSION['searchfor'] = null;
        $_SESSION['platform'] = $platform_id;
        $_SESSION['genre'] = $genre_id;

        echo view('templates/header', $data);
        echo view('games_view',$data);
        echo view('templates/footer');
    }

    public function searchtitle() {
        $data = [
            'title' => 'Quarantine games',
        ];

        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        $request = \Config\Services::request();

        $search = $request->getGet('searchtitle');
        $searchby = $request->getGet('searchby');
                
        $_SESSION['search'] = $search;
        $_SESSION['searchby'] = $searchby;

        if ($searchby === '1') {
            $data['products'] = $this->FrontpageAdminModel->searchGameTitle($search);
            $searchtype = 'Game Title';
        } else if ($searchby === '2') {
            $data['products'] = $this->PublisherModel->searchGamePublisher($search);
            $searchtype = 'Game Publisher';
        } else if ($searchby === '3') {
            $data['products'] = $this->DeveloperModel->searchGameDeveloper($search);
            $searchtype = 'Game Developer';
        } else if ($searchby === '4') {
            $data['products'] = $this->FrontpageAdminModel->searchDeviceTitle($search);
            $searchtype = 'Device Name';
        }

        $data['productsTitle'] = "Searching by $searchtype, results for '$search' ";
        echo view('templates/header', $data);
        echo view('games_view',$data);
        echo view('templates/footer');
    }

}
