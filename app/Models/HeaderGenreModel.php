<?php namespace App\Models;

use CodeIgniter\Model;

class HeaderGenreModel extends Model {
    protected $table = 'genre';
    protected $allowedFields = ['id', 'name'];

    public function getAllGenres() {
        $this->table('genre');
        $this->select('id, name');        

        $query = $this->get();

        return $query->getResultArray();
    }

}