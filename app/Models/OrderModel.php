<?php

namespace App\Models;

use CodeIgniter\Model;

use App\Models\CustomerModel;
use App\Models\ProdLineModel;

class OrderModel extends Model
{
  protected $table = 'tilaus';

  protected $allowedFields = ['tila', 'asiakas_id'];

  public function saveInfo($customer, $payment, $delivery, $product_ids)
  {
    $this->db->transStart();

    $customer_id = $this->saveCustomer($customer);

    $order_id = $this->saveOrder($customer_id);

    $this->saveProdLine($order_id, $product_ids, $payment, $delivery);
    $this->db->transComplete();
  }

  private function saveCustomer($customer)
  {
    $CustomerModel = new CustomerModel();
    $CustomerModel->save($customer);

    return $this->insertID();
  }

  private function saveOrder($customer_id)
  {
    $this->save([
      'tila' => 'tilattu',
      'asiakas_id' => $customer_id
    ]);

    return $this->insertID();
  }

  private function saveProdLine($order_id, $product_ids, $payment, $delivery)
  {
    $ProdLineModel = new ProdLineModel();
    foreach ($product_ids as $product_id) {
      $ProdLineModel->save([
        'tilaus_id' => $order_id,
        'tuote_id' => $product_id,
        'maara' => 1,
        'maksu' => $payment,
        'toimitus' => $delivery
      ]);
    }
  }
}
