<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\TuoteryhmaAdminModel;
use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;
use App\Models\ShoppingcartAdminModel;

class Tuoteryhma extends BaseController
{

    public function __construct()
    {
        $session = \Config\Services::session();
        $session->start();

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        $this->ShoppingcartAdminModel = new ShoppingcartAdminModel();
        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->HeaderGenreModel = new HeaderGenreModel();
    }

    public function index()
    {
        $tuoteryhma_model = new TuoteryhmaAdminModel;

        $data = [
            'title' => 'Tuoteryhmät',
            'tuotteet' => $tuoteryhma_model->haeKaikki()
        ];

        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        echo view('templates/header', $data);
        echo view('tuoteryhma_view', $data);
        echo view('templates/footer');
    }

    public function lisaa()
    {

        $tuoteryhmanNimi = $this->request->getVar('tuoteryhma');

        print $tuoteryhmanNimi;

        $tuoteryhma_model = new TuoteryhmaAdminModel;

        $tuoteryhma_model->lisaaTuoteryhma($tuoteryhmanNimi);

        // ohjataan takaisin index-sivulle
        return redirect('tuoteryhma');
    }

    public function update($id, $nimi)
    {
        $data['id'] = $id;
        $data['nimi'] = $nimi;

        echo view('edit_tuoteryhma_view.php', $data);
    }

    public function delete($id)
    {

        $tuoteryhma_model = new TuoteryhmaAdminModel;

        $tuoteryhma_model->remove($id);

        // ohjtaan index.sivulle takaisin
        return redirect('tuoteryhma');
    }

    public function edit()
    {
        $id = $this->request->getVar('id');
        $tuoteryhmanNimi = $this->request->getVar('tuoteryhma');

        $tuoteryhma_model = new TuoteryhmaAdminModel;

        $tuoteryhma_model->updateTuoteryhma($id, $tuoteryhmanNimi);

        return redirect('tuoteryhma');
    }
}
