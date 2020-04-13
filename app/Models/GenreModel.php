<?php namespace App\Models;

use CodeIgniter\Model;


class GenreModel extends Model {
    protected $table = 'tuote, tuoteryhma, tuoteryhma_tuote, genrelist, tuote_genrelist';
     protected $allowedFields = ['tuote.id', 'title', 'price', 'description', 'picture'];

    public function getGenres($trid, $genre) {
        $this->table('tuote, tuoteryhma, tuoteryhma_tuote, genrelist, tuote_genrelist');
        $this->select('title, price, description, picture');
        $this->where("tuote.id = tuoteryhma_tuote.tuote_id
        AND tuoteryhma.id = tuoteryhma_tuote.tuoteryhma_id
        AND tuote.id = tuote_genrelist.tuote_id
        AND genrelist.id = tuote_genrelist.genreList_id        
        AND tuoteryhma.id = $trid
        AND genrelist.id = $genre");
        
        $query = $this->get();

        return $query->getResultArray();
    }
}

