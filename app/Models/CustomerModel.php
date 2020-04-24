<?php namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model{
    protected $table = 'asiakas';

    protected $allowedFields = ['firstname', 'lastname',  'email', 'address', 'postcode', 'postoffice', 'phone'];

}

