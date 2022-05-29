<?php

/**
 *
 */
class Sale_model extends CI_Model
{

  public function getSales($requestData,$type)
  {

    $only_his = false;
    if(isUserAllow(47))
    {

      $only_his = true;

    }

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

      if($only_his)
      {

        $this->db->where('sales.added_by',$this->session->userdata('UID'));

      }

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

  public function getAssignStockToDriverForSale($customer_id,$driver_id)
  {

    $this->db->select('products.name as product_name,customer_products_price.price as product_price,assign_stock_details.*');
    $this->db->from('assign_stock');
    $this->db->join('users','users.id = assign_stock.driver_id');
    $this->db->join('assign_stock_details','assign_stock_details.assign_stock_id = assign_stock.id');
    $this->db->join('products','products.id = assign_stock_details.product_id');
    $this->db->join('customer_products_price','customer_products_price.product_id = products.id');

    $this->db->where('customer_products_price.customer_id',$customer_id);
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

  public function getEditSaleDetails($sale_id,$driver_id)
  {

      $this->db->where('id',$sale_id);
      $sale_row = $this->db->get('sales')->row();

      if(!empty($sale_row) && $sale_row->sale_type == 'call_order')
      {

        $this->db->select('sales.*,customers.name customer_name,customers.address as customer_address,customers.remarks as customer_remarks,sales_details.price,sales_details.sale_qty,sales_details.exchange_qty,sales_details.foc_qty,sales_details.amount,products.name as product_name,products.id as product_id,call_orders_details.qty');
        $this->db->from('sales');
        $this->db->join('customers','customers.id = sales.customer_id');
        $this->db->join('sales_details','sales_details.sale_id = sales.id');
        $this->db->join('products','products.id = sales_details.product_id');
        $this->db->join('call_orders','call_orders.id = sales.main_id');
        $this->db->join('call_orders_details','call_orders_details.call_order_id = call_orders.id');

      }
      else
      {

        $this->db->select('sales.*,customers.name customer_name,customers.address as customer_address,customers.remarks as customer_remarks,sales_details.price,sales_details.sale_qty,sales_details.exchange_qty,sales_details.foc_qty,sales_details.amount,products.name as product_name,products.id as product_id,assign_stock_details.available_qty');
        $this->db->from('sales');
        $this->db->join('customers','customers.id = sales.customer_id');
        $this->db->join('sales_details','sales_details.sale_id = sales.id');
        $this->db->join('products','products.id = sales_details.product_id');
        $this->db->join('assign_stock','assign_stock.id = sales.main_id');
        $this->db->join('assign_stock_details','assign_stock_details.product_id = sales_details.product_id');

        $this->db->where('assign_stock.is_return',0);
        $this->db->where('assign_stock.driver_id',$driver_id);
        $this->db->where('assign_stock_details.available_qty !=',0);
        $this->db->where('assign_stock_details.assign_stock_id',$sale_row->main_id);

      }


      $this->db->where('sales.id',$sale_id);

      return $this->db->get()->result();

  }

  public function getDriverProductStockByProductId($product_id,$driver_id,$assign_stock_id)
  {

    $this->db->select('assign_stock_details.*');
    $this->db->from('assign_stock');
    $this->db->join('assign_stock_details','assign_stock_details.assign_stock_id = assign_stock.id');

    $this->db->where('assign_stock.is_return',0);
    $this->db->where('assign_stock.id',$assign_stock_id);
    $this->db->where('assign_stock.driver_id',$driver_id);
    $this->db->where('assign_stock_details.product_id',$product_id);

    return $this->db->get()->row();

  }

  public function getTotalSaleAmount()
  {

    $this->db->select('sum(sales.total_amount) as total_amount');
    $this->db->from('sales');
    $this->db->join('customers','customers.id = sales.customer_id');
    $this->db->join('salesperson','salesperson.id = customers.salesperson_id');
    $this->db->join('sales_details','sales_details.sale_id = sales.id');
    $this->db->join('products','products.id = sales_details.product_id');

    $this->db->where('sales.is_deleted',0);
    $this->db->where('sales.status !=','pending');
    $this->db->group_by('sales_details.sale_id');

    return $this->db->get()->row();

  }

  public function getAllSalesandCreditAmounts($type)
  {

    if($type == 'weekly' || $type == 'monthly')
    {

      $this->db->select("DATE(sales.added_at) AS added_at_formatted,sum(if(sales.is_mark_done='1',total_amount,0)) as total_sale_amount,sum(if(sales.status='credit',total_amount,0)) as total_credit_amount",FALSE);

    }
    else if($type == 'yearly')
    {

      $this->db->select("MONTHNAME(sales.added_at) AS added_at_formatted,sales.added_at,sum(if(sales.is_mark_done='1',total_amount,0)) as total_sale_amount,sum(if(sales.status='credit',total_amount,0)) as total_credit_amount",FALSE);

    }

    $this->db->from('sales');
    $this->db->join('customers','customers.id = sales.customer_id');
    $this->db->join('salesperson','salesperson.id = customers.salesperson_id');
    $this->db->join('sales_details','sales_details.sale_id = sales.id');
    $this->db->join('products','products.id = sales_details.product_id');

    $this->db->where('sales.is_deleted',0);

    if($type == 'weekly')
    {

      $week_first_day = date('Y-m-d',strtotime('monday this week'));
      $week_last_day = date('Y-m-d',strtotime('sunday this week'));

      $this->db->where('DATE_FORMAT(sales.added_at, "%Y-%m-%d") >=',$week_first_day);

      $this->db->where('DATE_FORMAT(sales.added_at, "%Y-%m-%d") <=',$week_last_day);

    }
    elseif ($type == 'monthly')
    {

      $cur_month = date('Y-m');

      $this->db->where('DATE_FORMAT(sales.added_at, "%Y-%m") =',$cur_month);

    }
    elseif ($type == 'yearly')
    {

      $cur_year = date('Y');

      $this->db->where('DATE_FORMAT(sales.added_at, "%Y") =',$cur_year);

    }

    $this->db->order_by('sales.added_at','asc');

    $this->db->group_by('added_at_formatted');

    return $this->db->get()->result_array();

  }

  public function checkDriverStockRemainingOrNot($assign_stock_id)
  {

    $this->db->select('assign_stock.id');
    $this->db->from('assign_stock');
    $this->db->join('users','users.id = assign_stock.driver_id');
    $this->db->join('assign_stock_details','assign_stock_details.assign_stock_id = assign_stock.id');

    $this->db->where('assign_stock_details.assign_stock_id',$assign_stock_id);
    $this->db->where('assign_stock.is_return',0);
    $this->db->where('assign_stock.status','confirmed');
    $this->db->where('assign_stock_details.available_qty !=',0);

    return $this->db->count_all_results();

  }


}
