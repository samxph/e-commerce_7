<?php namespace App\Models;

use CodeIgniter\Model;

class DeveloperModel extends Model
{
    protected $table = 'tuote, developer';

    protected $allowedFields = ['id', 'title', 'price', 'description', 'picture'];
    
    public function searchGameDeveloper($search) {
        $this->table('tuote, developer');
        $this->select('tuote.id, title, price, description, picture');
        $this->where("tuote.developer_id = developer.id
        AND developer.name LIKE '%$search%'");

        $query = $this->get();

        return $query->getResultArray();
    }

    public function getDevelopers() {
        $this->table('developer');
        $this->select('developer.id, name');

        $query = $this->get();

        return $query->getResultArray();
    }
}