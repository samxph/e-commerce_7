<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\RegisterModel;
// 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
use App\Models\HeaderPlatformModel;
use App\Models\HeaderGenreModel;

const REGISTER_TITLE = 'Register';
const LOGIN_TITLE = 'Login';

class Login extends BaseController
{

    public function __construct()
    {
        $session = \Config\Services::session();
        $session->start();

        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $this->HeaderPlatformModel = new HeaderPlatformModel();
        $this->HeaderGenreModel = new HeaderGenreModel();
    }

    public function index()
    {
        $data['title'] = 'Login';
        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();
        echo view('templates/header', $data); //set view and pass data.
        echo view('login/login', $data);
        echo view('templates/footer', $data);
    }

    public function register()
    {
        $data['title'] = REGISTER_TITLE;
        // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
        $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
        $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();

        echo view('templates/header', $data);
        echo view('login/register', $data);
        echo view('templates/footer', $data);
    }

    public function registration()
    {
        $model = new RegisterModel();

        if (!$this->validate([
            'user' => 'required|min_length[4]|max_length[20]',
            'password' => 'required|min_length[8]|max_length[30]',
            'confirmpassword' => 'required|min_length[8]|max_length[30]|matches[password]',
        ])) {
            // 2 riviä alhaalla kopioidaan uusiin controllereihin jotta header toimii
            $data = ['title' => REGISTER_TITLE];
            $data['allGenres'] = $this->HeaderGenreModel->getAllGenres();
            $data['allPlatforms'] = $this->HeaderPlatformModel->getPlatforms();
            echo view('templates/header', $data); // PASS title here
            echo view('login/register', $data);
            echo view('templates/footer');
        } else {
            $model->save([
                'username' => $this->request->getVar('user'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'firstname' => $this->request->getVar('fname'),
                'lastname' => $this->request->getVar('lname'),
                'email' => $this->request->getVar('usermail'),
                'address' => $this->request->getVar('useraddress'),
                'postcode' => $this->request->getVar('userpostcode'),
                'postOffice' => $this->request->getVar('userpostoffice'),
                'phone' => $this->request->getVar('userphone')
            ]);
            return redirect('login');
        }
    }



    public function check()
    {
        $model = new LoginModel();

        if (!$this->validate([
            'user' => 'required|min_length[8]|max_length[30]',
            'password' => 'required|min_length[1]|max_length[30]',
        ])) {
            echo view('templates/header', ['title' => LOGIN_TITLE]);
            echo view('login/login');
            echo view('templates/footer');
        } else {
            $user = $model->check( // user model to check if user exists
                $this->request->getVar('user'),
                $this->request->getVar('password')
            );
            if ($user) { // if there is a user, store into session and redirect
                $_SESSION['user'] = $user;
                return redirect('frontpage');
            } else { // user is null, redirect to login page
                return redirect('login');
            }
        }
    }

    public function logout() {
        unset($_SESSION['user']);

        return redirect('frontpage');
    }
}
