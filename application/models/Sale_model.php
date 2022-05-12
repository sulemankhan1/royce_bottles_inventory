<?php

/**
 *
 */
class Sale_model extends CI_Model
{

  public function getSales($requestData,$type)
  {
      // storing request (ie, get/post) global array to a variable
      $columns = [
          // datatable column index => database column name
          0 => NULL,
          1 => 'sales.invoice_no',
          2 => 'customers.name',
          3 => 'sales.customer_category',
          4 => 'salesperson.name',
          5 => NULL,
          6 => NULL,
          7 => NULL,
          8 => 'sales.status',
          9 => NULL,


      ];

      $this->db->select('sales.*,customers.name customer_name,customers.address as customer_address,salesperson.name as salesperson_name,sum(sales_details.sale_qty) as total_qty,count(sales_details.product_id) as total_products,products.name as product_name');
      $this->db->from('sales');
      $this->db->join('customers','customers.id = sales.customer_id');
      $this->db->join('salesperson','salesperson.id = customers.salesperson_id');
      $this->db->join('sales_details','sales_details.sale_id = sales.id');
      $this->db->join('products','products.id = sales_details.product_id');

      $this->db->where('sales.is_deleted',0);
      $this->db->group_by('sales_details.sale_id');

      if($type == 'recordsTotal')
      {
          return $this->db->count_all_results();
      }

      else if($type == 'filter' || $type == 'records')
      {

        if (!empty($requestData['search']['value']))
        {

           $this->db->group_start();

             $this->db->or_like('sales.invoice_no',$requestData['search']['value']);
             $this->db->or_like('customers.name',$requestData['search']['value']);
             $this->db->or_like('sales.customer_category',$requestData['search']['value']);
             $this->db->or_like('salesperson.name',$requestData['search']['value']);
             $this->db->or_like('sales.invoice_no',$requestData['search']['value']);
             $this->db->or_like('sales.status',$requestData['search']['value']);

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

            $this->db->order_by('sales.id','desc');

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

  public function getCountCustomerUnpaidInvoices($customer_id)
  {

    $this->db->select('count(id) as total');
    $this->db->from('sales');

    $this->db->where('status','unpaid');
    $this->db->where('customer_id',$customer_id);

    return $this->db->get()->row();

  }

  public function getAssignStockToDriver($driver_id)
  {

    $this->db->select('products.name as product_name,products.price as product_price,assign_stock_details.*');
    $this->db->from('assign_stock');
    $this->db->join('users','users.id = assign_stock.driver_id');
    $this->db->join('assign_stock_details','assign_stock_details.assign_stock_id = assign_stock.id');
    $this->db->join('products','products.id = assign_stock_details.product_id');

    $this->db->where('assign_stock.driver_id',$driver_id);
    $this->db->where('assign_stock.status','confirmed');
    $this->db->where('assign_stock.is_return',0);

    return $this->db->get()->result();

  }

  public function getLastInvoiceNo()
  {

    $this->db->select('invoice_no');
    $this->db->from('sales');

    $this->db->order_by('id','desc');

    return $this->db->get()->row();

  }

  public function getSaleDetails($sale_id)
  {

    $this->db->select('sales.*,customers.name customer_name,customers.address as customer_address,sales_details.price,sales_details.sale_qty,sales_details.exchange_qty,sales_details.foc_qty,sales_details.amount,products.name as product_name');
    $this->db->from('sales');
    $this->db->join('customers','customers.id = sales.customer_id');
    $this->db->join('sales_details','sales_details.sale_id = sales.id');
    $this->db->join('products','products.id = sales_details.product_id');

    $this->db->where('sales.id',$sale_id);

    return $this->db->get()->result();

  }


}
