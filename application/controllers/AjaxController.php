<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

  public function getViewDetailsByType($type,$id)
	{

    $data = [

      'type' => $type

    ];

    if($type === 'Product')
    {

      $output['html'] = $this->load_view('product/view_details',$data,true);

    }
    else if($type === 'Customer')
    {

      $output['html'] = $this->load_view('customer/view_details',$data,true);

    }
    else
    {

      $output['html'] = $this->load_view('users/modals/view_details',$data,true);

    }


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

}
