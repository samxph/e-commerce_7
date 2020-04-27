<?php namespace App\Models;

use CodeIgniter\Model;

class PublisherModel extends Model
{
    protected $table = 'tuote, publisher';

    protected $allowedFields = ['id', 'title', 'price', 'description', 'picture'];
    
    public function searchGamePublisher($search) {
        $this->table('tuote, publisher');
        $this->select('tuote.id, title, price, description, picture');
        $this->where("tuote.publisher_id = publisher.id
        AND publisher.name LIKE '%$search%'");

        $query = $this->get();

        return $query->getResultArray();
    }

    public function getPublishers() {
        $this->table('publisher');
        $this->select('publisher.id, name');

        $query = $this->get();

        return $query->getResultArray();
    }
}