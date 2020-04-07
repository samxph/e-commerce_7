<?php namespace App\Models;

use CodeIgniter\Model;


class HeaderPlatformModel extends Model {
    protected $table = 'tuoteryhma';
    protected $allowedFields = ['id', 'name', 'logo'];

    public function getPlatforms() {
        $this->table('tuoteryhma');
        $this->select('id, name, logo');

        $query = $this->get();

        return $query->getResultArray();
    }
}