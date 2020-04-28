<?php namespace App\Models;

use CodeIgniter\Model;

class GetPublisherModel extends Model
{
    protected $table = 'publisher';
    protected $allowedFields = ['id', 'name'];

public function getPublishers() {
        $this->table('publisher');
        $this->select('publisher.id, name');

        $query = $this->get();

        return $query->getResultArray();
    }
}