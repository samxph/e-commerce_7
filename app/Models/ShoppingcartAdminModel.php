<?php

namespace App\Models;

use CodeIgniter\Model;

class ShoppingcartAdminModel extends Model
{
    protected $table = 'tuote';

    protected $allowedFields = ['id', 'title', 'price'];

    public function getProducts($ids)
    {
        $result = array();

        foreach ($ids as $id) {
            $this->table('tuote');
            $this->select('id, title, price');
            $this->where('id', $id);

            $query = $this->get();

            $product = $query->getRowArray();
            $this->productToArray($product, $result);

            $this->resetQuery();
        }

        return $result;
    }

    public function productToArray($product, &$array)
    {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i]['id'] === $product['id']) {
                $array[$i]['amount'] = $array[$i]['amount'] + 1;
                return;
            }
        }
        $product['amount'] = 1;
        array_push($array, $product);
    }

}
