<?php

namespace App\Models;

use CodeIgniter\Model;

class AddproductModel extends Model
{
    protected $table = 'tuote';

    protected $allowedFields = ['id', 'title', 'releasedate',  'price', 'picture', 'description', 'developer_id', 'publisher_id'];

    public function getProduct()
    {
        $this->table('tuote');
        $this->select('id, title, releasedate, price, picture, description, developer, publisher');
        $query = $this->get();

        return $query->getResultArray();
    }

    public function remove($id)
    {
        $this->where('id', $id);
        $this->delete();
    }
}
