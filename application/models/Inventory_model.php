<?php

/**
 *
 */
class Inventory_model extends CI_Model
{

  public function getDeliveryOrders($requestData,$type)
  {
      // storing request (ie, get/post) global array to a variable
      $columns = [
          // datatable column index => database column name
          0 => NULL,
          1 => 'driver.name',
          2 => Null,
          3 => 'assign_stock.status',
          4 => NULL

      ];

      $this->db->select('assign_stock.id,assign_stock.status,users.name as driver_name,count(assign_stock_details.product_id) as total_products,sum(assign_stock_details.qty) as total_qty');
      $this->db->from('assign_stock');
      $this->db->join('users','users.id = assign_stock.driver_id');
      $this->db->join('assign_stock_details','assign_stock_details.assign_stock_id = assign_stock.id');
      $this->db->join('products','products.id = assign_stock_details.product_id');

      $this->db->where('assign_stock.is_deleted',0);
      $this->db->where('assign_stock.status','pending');

      $this->db->group_by('assign_stock_details.assign_stock_id');

      if($type == 'recordsTotal')
      {
          return $this->db->count_all_results();
      }

      else if($type == 'filter' || $type == 'records')
      {

        if (!empty($requestData['search']['value']))
        {

           $this->db->group_start();

            $this->db->or_like('users.name',$requestData['search']['value']);
            $this->db->or_like('assign_stock.status',$requestData['search']['value']);

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

            $this->db->order_by('assign_stock.id','desc');

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

  public function getCallOrders($requestData,$type)
  {
      // storing request (ie, get/post) global array to a variable
      $columns = [
          // datatable column index => database column name
          0 => NULL,
          1 => 'customer.name',
          2 => 'users.name',
          3 => 'call_orders.delivery_day',
          4 => Null,
          5 => Null,
          6 => Null,
          7 => 'call_orders.status',
          8 => NULL

      ];

      $this->db->select('call_orders.*,customers.name as customer_name,users.name as driver_name,count(call_orders_details.product_id) as total_products,sum(call_orders_details.qty) as total_qty,sum(products.price) as total_price');
      $this->db->from('call_orders');
      $this->db->join('customers','customers.id = call_orders.customer_id');
      $this->db->join('users','users.id = call_orders.driver_id');
      $this->db->join('call_orders_details','call_orders_details.call_order_id = call_orders.id');
      $this->db->join('products','products.id = call_orders_details.product_id');

      $this->db->where('call_orders.is_deleted',0);
      $this->db->where('call_orders.status','confirmed');
      $this->db->where('call_orders.pending_request_status','pending');

      $this->db->group_by('call_orders_details.call_order_id');

      if($type == 'recordsTotal')
      {
          return $this->db->count_all_results();
      }

      else if($type == 'filter' || $type == 'records')
      {

        if (!empty($requestData['search']['value']))
        {

           $this->db->group_start();

            $this->db->or_like('customers.name',$requestData['search']['value']);
            $this->db->or_like('users.name',$requestData['search']['value']);
            $this->db->or_like('call_orders.delivery_day',$requestData['search']['value']);
            $this->db->or_like('call_orders.status',$requestData['search']['value']);

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

            $this->db->order_by('call_orders.id','desc');

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
