<?php namespace App\Models;

use CodeIgniter\Model;


class DeviceModel extends Model {
    protected $table = 'devices';
     protected $allowedFields = ['id', 'title', 'price', 'description', 'picture'];

    public function DeviceModel($type) {
        $this->table('devices');
        $this->select('id, title, price, description, picture');
        $this->where("type = '$type'");
                
        $query = $this->get();

        return $query->getResultArray();
    }
}

