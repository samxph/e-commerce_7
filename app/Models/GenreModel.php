<?php namespace App\Models;

use CodeIgniter\Model;


class GenreModel extends Model {
    protected $table = 'tuote, tuoteryhma, tuoteryhma_tuote';
     protected $allowedFields = ['tuote.id', 'title', 'price', 'description', 'picture'];

    public function getGenres($trname, $genre) {
        $this->table('tuote, tuoteryhma, tuoteryhma_tuote');
        $this->select('tuote.id, title, price, description, picture');
        $this->where("tuote.id = tuoteryhma_tuote.tuote_id
        AND tuoteryhma.id = tuoteryhma_tuote.tuoteryhma_id                
        AND tuoteryhma.name = '$trname'
        AND genres LIKE '%$genre%'");
                
        $query = $this->get();

        return $query->getResultArray();
    }
}

