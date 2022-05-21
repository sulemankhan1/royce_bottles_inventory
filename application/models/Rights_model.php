<?php

/**
 *
 */
class Rights_model extends CI_Model
{

  public function getModuleRolesByUserType($module_id,$type)
  {

    $this->db->select('roles.id,roles.name,user_roles.is_allow');
    $this->db->from('modules');
    $this->db->join('roles','modules.id = roles.module_id');
    $this->db->join('user_roles','roles.id = user_roles.role_id','left');

      $this->db->where('modules.id',$module_id);
      $this->db->or_where('user_roles.type',$type);

      $this->db->order_by('roles.order_id','asc');

    return $this->db->get()->result();

  }

}
