<?php namespace App\model;

use CodeIgniter\Model;

class SaveorderRowModel extends Model{
    protected $table = 'tilaus';

    protected $allowedFields = [
        'id', 'user_id', 'amount'
    ];
}
