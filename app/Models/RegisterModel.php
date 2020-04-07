<?php namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model {
    protected $table = 'user';

    protected $allowedFields = ['username','password','firstname', 'lastname','address', 'postcode', 'postOffice', 'email','phone'];

}

?>