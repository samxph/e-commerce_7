<?php namespace App\Models;

use CodeIgniter\Model;


class GenreModel extends Model {
    protected $table = 'tuote, tuoteryhma, tuoteryhma_tuote, genre, genre_tuote';
     protected $allowedFields = ['tuote.id', 'title', 'price', 'description', 'picture'];

    public function getGenres($trname, $genre) {
        $this->table('tuote, tuoteryhma, tuoteryhma_tuote, genre, genre_tuote');
        $this->select('tuote.id, title, price, description, picture');
        $this->where("tuote.id = tuoteryhma_tuote.tuote_id
        AND tuoteryhma.id = tuoteryhma_tuote.tuoteryhma_id
        AND tuote.id = genre_tuote.tuote_id
        AND genre_tuote.genre_id = genre.id                
        AND tuoteryhma.name = '$trname'
        AND genre.name = '$genre'");
                
        $query = $this->get();

        return $query->getResultArray();
    }
}

