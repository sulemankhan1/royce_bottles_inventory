<?php

/**
 *
 */
class Payment_model extends CI_Model
{

  public function getPayments($customer_id,$from,$to)
  {

    $this->db->select('payments.*,sales.invoice_no,customers.name as customer_name');
    $this->db->from('payments');
    $this->db->join('sales','sales.id = payments.sale_id','left');
    $this->db->join('customers','customers.id = payments.customer_id');

    if (!empty($customer_id))
    {

      $this->db->where('payments.customer_id',$customer_id);

    }

    if (!empty($from))
    {

      $this->db->where('DATE_FORMAT(payments.added_at, "%Y-%m-%d") >=',$from);

    }

    if (!empty($to))
    {

      $this->db->where('DATE_FORMAT(payments.added_at, "%Y-%m-%d") <=',$to);

    }

    return $this->db->get()->result();

  }


}
