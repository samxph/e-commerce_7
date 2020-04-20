<?php namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model{
    protected $table = 'user';

    protected $allowedFields = ['firstname', 'lastname',  'email',
    'address', 'postcode', 'postOffice'
    ];

}

