<?php  namespace App\Models;

use CodeIgniter\Model;

class ProdLineModel extends Model {
  protected $table = 'tilausrivi';

  protected $allowedFields = ['tilaus_id','tuote_id','maara', 'maksu', 'toimitus'];
}