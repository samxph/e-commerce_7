<?php namespace App\Models;

use CodeIgniter\Model;

class FrontpageAdminModel extends Model
{
    protected $table = 'tuote';

    protected $allowedFields = ['id', 'title', 'price', 'description', 'picture'];
    
    public function getProducts() {
        $this->table('tuote');
        $this->select('id, title, price, description, picture');
        $this->where("year(releaseDate) > 2018");
        $query = $this->get();

        return $query->getResultArray();
    }

    public function getAll() {
        $this->table('tuote');
        $this->select('id, title, price, description, picture');
        $query = $this->get();

        return $query->getResultArray();
    }

    public function searchGameTitle($search) {
        $this->table('tuote');
        $this->select('id, title, price, description, picture');
        $this->where("title LIKE '%$search%'");
        $query = $this->get();

        return $query->getResultArray();
    }
}

