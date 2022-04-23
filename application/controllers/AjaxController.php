<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

  public function getUserDetailsByType($type,$user_id)
	{

    $data = [

      'type' => $type,
      'user' => $this->bm->getRow('users','id',$user_id)

    ];

    //   $output['html'] = $this->load_view('customer/view_details',$data,true);

      $output['html'] = $this->load_view('users/modals/view_details',$data,true);


    echo json_encode($output);

	}

  public function getCategoryPrice($cat_id)
  {

      $output = $this->bm->getRow('categories','id',$cat_id);

      echo json_encode($output);

  }

  public function getProductDetails($product_id)
  {

      $product_row = $this->bm->getRow('products','id',$product_id);

      $data = [

        'type' => 'Product',
        'product' => $product_row,
        'category' => $this->bm->getRow('categories','id',$product_row->cat_id)

      ];

      $output['html'] = $this->load_view('product/view_details',$data,true);

      echo json_encode($output);

  }

  public function getReturnStockProductsByDriverId($driver_id)
  {
      $data = [];
      $output['html'] = $this->load_view('inventory/modals/return_stock_products',$data,true);

      echo json_encode($output);

  }

  public function getInventoryDetailsByType($type,$id)
  {

      $data = [

        'type' => $type

      ];

      $output['html'] = $this->load_view('inventory/modals/inv_details',$data,true);

      echo json_encode($output);

  }


  public function getViewDetailsByDriverAssignQty($driver_id)
  {

      $data = [];

      $output['html'] = $this->load_view('inventory/modals/live_stock_details',$data,true);

      echo json_encode($output);

  }

  public function printLogDetails()
  {

      $get = $this->inp_get();

      $data = [
        'page_title' => 'Log Details'
      ];

      $this->load_view('inventory/print_log_details',$data);


  }

  public function getCustomerSaleInfo($customer_id)
  {

      $data = [];
      $total_unpaid_invoices = 10;
      if($total_unpaid_invoices > 0)
      {
          $output['total_unpaid_inv'] = '<span class="badge rounded-pill bg-danger">Total Unpaid Invoices: '.$total_unpaid_invoices.'</span>';
      }
      else
      {
          $output['total_unpaid_inv'] = '<span class="badge rounded-pill bg-success">Total Unpaid Invoices: '.$total_unpaid_invoices.'</span>';
      }

      $output['remarks'] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

      $output['html'] = $this->load_view('sales/customer_sale_products',$data,true);

      echo json_encode($output);

  }

  public function showSalesDetails($sale_id,$type = '')
  {

    $data = [
      'page_title' => 'Sale Information',
      'type' => $type
    ];
    $output['html'] = $this->load_view('sales/view_sale',$data);

  }

  public function updateSale($sale_id)
  {

      echo json_encode(true);

  }

  public function showInvoiceDetails($invoice_id,$type)
  {

    $data = [
      'page_title' => 'Invoice Details',
      'type' => $type
    ];

    $output['html'] = $this->load_view('sales/view_sale',$data);

  }

  public function getEvidenceDetails($evidence_id)
  {

      $data = [];

      $output['html'] = $this->load_view('evidence/view_details',$data,true);


    echo json_encode($output);

  }

  public function getCustomerPayments($customer_id)
  {

    $data = [
      'page_title' => 'Customer Payments'
    ];
    $output['html'] = $this->load_view('payments/view_payments',$data);

  }

  public function printCustomerPayments()
  {

      $get = $this->inp_get();

      $data = [
        'page_title' => 'Customer Payments'
      ];

      $this->load_view('payments/print_payment_details',$data);


  }

  public function getPendingPageStockDetails($pending_request_id,$type)
  {

    $data = [
      'type' => $type
    ];

    $output['html'] = $this->load_view('inventory/modals/pending_page_details',$data,true);

    echo json_encode($output);

  }

  public function showCallOrderDetails($call_order_id)
  {

    $data = [

    ];

    $output['html'] = $this->load_view('order/view_details',$data,true);

    echo json_encode($output);

  }

  public function getDriverRequestedProducts($driver_id)
  {

    $driver = $this->bm->getRow('driver_request','driver_id',$driver_id);
    $driver_request_products = $this->bm->getRows('driver_request_details','driver_request_id',$driver->id);

    $pro_arr = [

      ['id' => 1,'name' => 'Driver1'],
      ['id' => 2,'name' => 'Driver2'],
      ['id' => 3,'name' => 'Driver3']

    ];

    $data = [

      'driver_request_products' => $driver_request_products,
      'products' => $pro_arr

    ];

    $output['html'] = $this->load_view('order/view_details',$data,true);

    echo json_encode($output);


  }


}
