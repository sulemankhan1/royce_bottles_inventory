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

  public function getProductStock($product_id)
  {

    $this->db->select("logs.product_id,products.name as product_name,sum(if(logs.type='request',qty,0)) as total_request_qty,sum(if(logs.type='assign',qty,0)) as total_assign_qty,sum(if(logs.type='sold',qty,0)) as total_sold_qty,sum(if(logs.type='return',qty,0)) as total_return_qty,sum(if(logs.type='add_stock',qty,0)) as total_add_stock_qty,sum(if(logs.type='remove_stock',qty,0)) as total_remove_stock_qty,sum(if(logs.type='missing',qty,0)) as total_missing_qty,sum(if(logs.type='exchange',qty,0)) as total_exchange_qty", FALSE);
    $this->db->from('logs');
    $this->db->join('products','products.id = logs.product_id');

    $this->db->where('logs.product_id',$product_id);

    $result = $this->db->get()->row();


    $total_add = $result->total_add_stock_qty + $result->total_return_qty;
    $total_remove = $result->total_sold_qty + $result->total_remove_stock_qty + $result->total_missing_qty + $result->total_exchange_qty;

    $total = $total_add - $total_remove;

    $arr = [

      'product_id' => $result->product_id,
      'available_qty' => $total,

    ];

    return $arr;
    
  }


  public function getDriverRequestStock($driver_id)
  {

    $this->db->select('driver_request_details.*');
    $this->db->from('driver_request');
    $this->db->join('driver_request_details','driver_request_details.driver_request_id = driver_request.id');

    $this->db->where('driver_request.driver_id',$driver_id);

    return $this->db->get()->result();

  }

}
