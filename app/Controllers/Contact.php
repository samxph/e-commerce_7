<?php namespace App\Controllers;

use App\Models\AllproductsAdminModel;

class Contact extends BaseController
{
	public function index()
	{
        $model = new AllproductsAdminModel();

        $data = [
            'title' => 'Contact us',
        ];

        echo view('templates/header', $data);
        echo view('contact_view');
        echo view('templates/footer');
	}
}
