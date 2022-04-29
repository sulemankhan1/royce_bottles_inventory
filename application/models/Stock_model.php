<?php

/**
 *
 */
class Stock_model extends CI_Model
{

  public function getStocks($requestData,$type)
  {
      // storing request (ie, get/post) global array to a variable
      $columns = [
          // datatable column index => database column name
          0 => NULL,
          1 => 'products.name',
          2 => NULL,
          3 => 'users.name',
          4 => 'stock.added_at',
          5 => NULL

      ];

      $this->db->select('stock.*,products.name as product_name,users.name as added_by_name');
      $this->db->from('stock');
      $this->db->join('products','products.id = stock.product_id');
      $this->db->join('users','users.id = stock.added_by');

      $this->db->where('stock.type','add');
      $this->db->where('stock.is_deleted',0);

      if($type == 'recordsTotal')
      {
          return $this->db->count_all_results();
      }

      else if($type == 'filter' || $type == 'records')
      {

        if (!empty($requestData['search']['value']))
        {

           $this->db->group_start();

            $this->db->or_like('products.name',$requestData['search']['value']);
            $this->db->or_like('users.name',$requestData['search']['value']);
            $this->db->or_like('stock.added_at',getDateTimeFormat($requestData['search']['value']));

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

            $this->db->order_by('stock.id','desc');

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

  public function getStockHistory($requestData,$type)
  {
      // storing request (ie, get/post) global array to a variable
      $columns = [
          // datatable column index => database column name
          0 => NULL,
          1 => 'products.name',
          2 => NULL,
          3 => 'stock.type',
          3 => 'users.name',
          4 => 'stock.added_at',

      ];

      $this->db->select('stock.*,products.name as product_name,users.name as added_by_name');
      $this->db->from('stock');
      $this->db->join('products','products.id = stock.product_id');
      $this->db->join('users','users.id = stock.added_by');

      if($type == 'recordsTotal')
      {
          return $this->db->count_all_results();
      }

      else if($type == 'filter' || $type == 'records')
      {

        if (!empty($requestData['search']['value']))
        {

           $this->db->group_start();

            $this->db->or_like('products.name',$requestData['search']['value']);
            $this->db->or_like('users.name',$requestData['search']['value']);
            $this->db->or_like('stock.type',$requestData['search']['value']);
            $this->db->or_like('stock.added_at',getDateTimeFormat($requestData['search']['value']));

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

            $this->db->order_by('stock.id','desc');

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
