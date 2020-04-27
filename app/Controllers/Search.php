<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\FrontpageAdminModel;
// 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;
use App\Models\SearchPublisherModel;
use App\Models\SearchDeveloperModel;


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
        $this->SearchPublisherModel = new SearchPublisherModel();
        $this->SearchDeveloperModel = new SearchDeveloperModel();

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
                
        if ($searchby === 1) {
            $data['products'] = $this->FrontpageAdminModel->searchGameTitle($search);
        } else if ($searchby === 2) {
            $data['products'] = $this->SearchPublisherModel->searchGamePublisher($search);
        } else if ($searchby === 3) {
            $data['products'] = $this->SearchDeveloperModel->searchGameDeveloper($search);
        } else if ($searchby === 4) {

        }
        $data['productsTitle'] = "Searching by $searchby, results for '$search' ";

        echo view('templates/header', $data);
        echo view('games_view',$data);
        echo view('templates/footer');
    }
}