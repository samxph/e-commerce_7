<?php namespace App\Models;

use CodeIgniter\Model;

class AllGenresModel extends Model {
    protected $table = 'genreList';
    protected $allowedFields = ['id', 'name'];

    public function getAllGenres() {
        $this->table('genreList');
        $this->select('id, name');        

        $query = $this->get();

        return $query->getResultArray();
    }

}