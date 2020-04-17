<?php namespace App\Models;

use CodeIgniter\Model;
use App\Models\CustomerModel;
use App\Models\SaveOrderrowModel;

class OrderModel extends Model{
    protected $table = "tilaus";

    protected $allowedFields = ['user_id'];

    public function save($customer, $cart){
        $this->db->transStart();


        $user_id = $this->saveCustomer($customer);

        $order_id = $this->Order($user_id);

        
        $this->db->transComplete();


        
        if($this->db->transStatus() == FALSE){
            $this->db->transRollback();

            return false;
        }
        else
            return true;
        
        
    }
    private function saveCustomer($customer){
        $customerModel = new customerModel();
        $customerModel->save($customer);

        return $this->insertID();
    }
    private function saveOrder($user_id){
        $this->save([
            'user_id' => $user_id
        ]);
        return $this->insertID();
    }
    private function SaveOrderRow($order_id, $cart){
        $SaveOrderRowModel = new SaveOrderRowModel;

        foreach($cart as $product_id){
            $SaveOrderRowModel->save([
                'tilaus_id' => $order_id,
                'tuote_id' => $tuote_id,
                'maara' => 1
            ]);
        }
    }

}