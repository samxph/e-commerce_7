<?php namespace App\model;

use CodeIgniter\Model;

class SaveorderRowModel extends Model{
    protected $table = 'tilaus';

    protected $allowedFields = [
        'tilaus_id', 'tuote_id', 'maara'
    ];
}
