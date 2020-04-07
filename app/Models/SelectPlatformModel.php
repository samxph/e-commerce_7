<?php namespace App\Models;

use CodeIgniter\Model;

class SelectPlatformModel extends Model {
    protected $table = 'tuote, tuoteryhma, tuoteryhma_tuote';
    protected $allowedFields = ['id, title', 'price', 'description', 'picture'];

    public function selectPlatform($trid) {
            $this->table('tuote, tuoteryhma, tuoteryhma_tuote');
            $this->select('tuote.id, title, price, description, picture');
            $this->where("tuote.id = tuoteryhma_tuote.tuote_id
            AND tuoteryhma_tuote.tuoteryhma_id = tuoteryhma.id
            AND tuoteryhma.id = $trid");
            $query = $this->get();

            return $query->getResultArray();
    }

    public function selectAllPlatforms() {
        $this->table('tuote, tuoteryhma, tuoteryhma_tuote');
        $this->select('title, price, description, picture');

        $query = $this->get();

        return $query->getResultArray();
    }
}