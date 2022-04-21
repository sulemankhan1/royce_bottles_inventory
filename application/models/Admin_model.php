<?php

/**
 *
 */
class Admin_model extends CI_Model
{

  public function getAdmins($requestData,$type)
  {

      // storing request (ie, get/post) global array to a variable
      $columns = [
          // datatable column index => database column name
          0 => 'name',
          1 => 'username',
          2 => 'email',
          3 => 'contact_no',
          4 => 'status'

      ];

      $this->db->select('*');
      $this->db->from('users');

      $this->db->where('users.is_deleted',0);

      if($type == 'recordsTotal')
      {
          return $this->db->count_all_results();
      }

      else if($type == 'filter' || $type == 'records')
      {

        if (!empty($requestData['search']['value']))
        {

           $this->db->group_start();

            $this->db->or_like('name',$requestData['search']['value']);
            $this->db->or_like('username',$requestData['search']['value']);
            $this->db->or_like('email',$requestData['search']['value']);
            $this->db->or_like('contact_no',$requestData['search']['value']);


           $this->db->group_end();

        }

        if($type == 'records')
        {

          if(isset($requestData['order']))
          {

              $this->db->order_by($columns[$requestData['order'][0]['column']],$requestData['order'][0]['dir']);

          }
          else
          {

            $this->db->order_by('id','desc');

          }

          if(isset($requestData["length"]))
          {

               $this->db->limit(@$_POST['length'], @$_POST['start']);

          }

          return $this->db->get()->result();

        }
        else
        {

            return $this->db->count_all_results();

        }


      }

  }


}
