<?php namespace App\Models;

use CodeIgniter\Model;

class FrontpageAdminModel extends Model
{
    protected $table = 'tuote';

    protected $allowedFields = ['title', 'price', 'description', 'picture'];
    
    public function getProducts() {
        $this->table('tuote');
        $this->select('title, price, description,picture');
        $query = $this->get();

        return $query->getResultArray();
    }
}