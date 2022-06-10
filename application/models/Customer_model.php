<?php

/**
 *
 */
class Customer_model extends CI_Model
{

  public function getCustomers($requestData,$type)
  {
      // storing request (ie, get/post) global array to a variable
      $columns = [
          // datatable column index => database column name
          0 => NULL,
          1 => 'customers.name',
          2 => 'customers.day',
          3 => 'customers.shop_name',
          4 => 'customers.shop_id',
          5 => 'customers.primary_contact',
          6 => 'customers.secondary_contact',
          7 => 'customers.e_receipt_email',
          8 => 'customers.cat_type',
          9 => 'salesperson.name',
          10 => 'customers.added_at',
          11 => NULL

      ];

      $this->db->select('customers.*,salesperson.name as salesperson_name');
      $this->db->from('customers');
      $this->db->join('salesperson','salesperson.id = customers.salesperson_id');
      $this->db->join('users','users.id = customers.driver_id');

      $this->db->where('customers.is_deleted',0);

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
            $this->db->or_like('customers.day',$requestData['search']['value']);
            $this->db->or_like('customers.shop_name',$requestData['search']['value']);
            $this->db->or_like('customers.shop_id',$requestData['search']['value']);
            $this->db->or_like('customers.primary_contact',$requestData['search']['value']);
            $this->db->or_like('customers.secondary_contact',$requestData['search']['value']);
            $this->db->or_like('customers.e_receipt_email',$requestData['search']['value']);
            $this->db->or_like('customers.cat_type',$requestData['search']['value']);
            $this->db->or_like('salesperson.name',$requestData['search']['value']);

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

            $this->db->order_by('customers.id','desc');

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

  public function getCustomerProductPrices($customer_id)
  {

    $this->db->select('customer_products_price.*,products.name as product_name');
    $this->db->from('customer_products_price');
    $this->db->join('products','products.id = customer_products_price.product_id');
    $this->db->join('customers','customers.id = customer_products_price.customer_id');

    $this->db->where('customer_products_price.customer_id',$customer_id);
    $this->db->where('products.is_deleted',0);

    return $this->db->get()->result();

  }

  public function getCustomerShopName()
  {

      $this->db->select('customers.id as id,customers.shop_name as name');
      $this->db->from('customers');
      $this->db->join('salesperson','salesperson.id = customers.salesperson_id');
      $this->db->join('users','users.id = customers.driver_id');

      $this->db->where('customers.is_deleted',0);

      return $this->db->get()->result();

  }

  public function getCustomersCount()
  {

    $this->db->select('customers.id');
    $this->db->from('customers');
    $this->db->join('salesperson','salesperson.id = customers.salesperson_id');
    $this->db->join('users','users.id = customers.driver_id');

    $this->db->where('customers.is_deleted',0);

    return $this->db->count_all_results();

  }

  public function getRecurringCustomers()
  {

    $this->db->select('customers.*');
    $this->db->from('customers');
    $this->db->join('recurring_customers','recurring_customers.customer_id = customers.id');

    $this->db->where('customers.is_deleted',0);
    $this->db->where('customers.soa_email !=','');

    return $this->db->get()->result();

  }


}
