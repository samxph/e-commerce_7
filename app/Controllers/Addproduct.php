<?php

namespace App\Controllers;

use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;
use App\Models\AddproductModel;
use App\Models\GetDeveloperModel;
use App\Models\GetPublisherModel;

class Addproduct extends BaseController
{
    public function __construct()
    {
        $config['max_size'] = '5000';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';



        $session = \Config\Services::session();
        $session->start();

        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->HeaderGenreModel = new HeaderGenreModel();

        $this->PublisherModel = new GetPublisherModel();
        $this->DeveloperModel = new GetDeveloperModel();
    }

    public function index()
    {
        if (!isset($_SESSION['user'])) {
            return redirect('login');
        }
        //$model = new AddproductModel();

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
        $model = new AddproductModel();

        $data = ['title' => 'Product added'];
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        if (!$this->validate([
            'title' => 'required|max_length[50]',
            'releasedate' => 'required|max_length[50]',
            'price' => 'required|max_length[5]',
            'picture' => 'uploaded[picture]|max_size[picture,300]',
            'description' => 'required|max_length[500]',
            'developer' => 'required|max_length[50]',
            'publisher' => 'required|max_length[50]',
        ])) {
        } else {
            $picture = $this->request->getFile('picture');
            $picturename = $picture->getName();

            
            $path = 'public/images';
            //print_r(base_url('public/images'));
            $picture->move($path);

            $model->save([
                'title' => $this->request->getPost('title'),
                'releasedate' => $this->request->getPost('releasedate'),
                'price' => $this->request->getPost('price'),
                'picture' => $picturename,
                'description' => $this->request->getPost('description'),
                'developer_id' => $this->request->getPost('developer'),
                'publisher_id' => $this->request->getPost('publisher')
            ]);

            echo view('templates/header', $data);
            echo view('productadded_view');
            echo view('templates/footer');
        }
    }

    public function remove($id)
    {
        if (!is_numeric($id)) {
            throw new \Exception('Provided id is not a number.');
        }

        if (!isset($_SESSION['user'])) {
            return redirect('/');
        }
        $model = new AddproductModel();

        $model->remove($id);
        return redirect('/');
    }
}
