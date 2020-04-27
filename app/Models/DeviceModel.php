<?php namespace App\Models;

use CodeIgniter\Model;


class DeviceModel extends Model {
    protected $table = 'devices, genre';
     protected $allowedFields = ['id', 'title', 'price', 'description', 'picture'];

    public function DeviceModel($type) {
        $this->table('devices, genre');
        $this->select('devices.id, title, price, description, picture');
        $this->where("devices.genre_id = genre.id               
        AND genre.name = '$type'");
                
        $query = $this->get();

        return $query->getResultArray();
    }

    public function searchDevice($search) {
        $this->table('devices');
        $this->select('devices.id, title, price, description, picture');
        $this->where("devices.genre_id = genre.id               
        AND devices.title LIKE '%$search%'");
                
        $query = $this->get();

        return $query->getResultArray();
    }
}

