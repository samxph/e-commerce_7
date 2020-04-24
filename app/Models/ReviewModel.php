<?php namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model {
    protected $table = 'review';

    protected $allowedFields = ['name','subject', 'message'];
/*
    public function getReviews() {
        $this->table('review');
        $this->select('message, name, saved, subject');
        $query = $this->get();
    
        return $query->getResultArray();
}
*/
    }
