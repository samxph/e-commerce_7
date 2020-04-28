<?php

namespace App\Models;

use CodeIgniter\Model;

class GetDeveloperModel extends Model
{
    protected $table = 'developer';
    protected $allowedFields = ['id', 'name'];

    public function getDevelopers()
    {
        $this->table('developer');
        $this->select('developer.id, name');

        $query = $this->get();

        return $query->getResultArray();
    }
}
