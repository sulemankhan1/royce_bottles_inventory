<?php

/**
 *
 */
class Inventory_model extends CI_Model
{

  public function getDriverRequestStock($driver_id)
  {

    $this->db->select('driver_request_details.*');
    $this->db->from('driver_request');
    $this->db->join('driver_request_details','driver_request_details.driver_request_id = driver_request.id');

    $this->db->where('driver_request.driver_id',$driver_id);

    return $this->db->get()->result();

  }


}
