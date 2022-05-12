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

  public function getCustomerDetails($customer_id)
  {

    $customer_row = $this->bm->getRow('customers','id',$customer_id);

    $data = [

      'type' => 'Customer',
      'customer' => $customer_row,
      'salesperson' => $this->bm->getRow('salesperson','id',$customer_row->salesperson_id),
      'driver' => $this->bm->getRow('users','id',$customer_row->driver_id)

    ];

    $output['html'] = $this->load_view('customer/view_details',$data,true);

    echo json_encode($output);

  }

  public function getCustomerProductPrices($customer_id)
  {

      $this->load->model('Customer_model');

      $customer_products_price = $this->Customer_model->getCustomerProductPrices($customer_id);

      $data = [

        'customers' => $customer_products_price

      ];

      $output['html'] = $this->load_view('customer/customer_products_data',$data,true);
      $output['customer_id'] = $customer_id;

      echo json_encode($output);

  }

  public function getEvidenceDetails($evidence_id)
  {

    $this->load->model('Evidence_model');

    $data = [

      'type' => 'Evidence',
      'evidence' => $this->Evidence_model->getEvidenceDetails($evidence_id)

    ];

    $output['html'] = $this->load_view('evidence/view_details',$data,true);

    echo json_encode($output);

  }

  public function getTemplateData($template_id)
  {

      $output['data'] = $this->bm->getRow('email_templates','id',$template_id);

      echo json_encode($output);

  }

  public function getProductAvailableQty($product_id)
  {

    $this->load->model('Stock_model');

    $output['data'] = $this->Stock_model->getProductStock($product_id);

    echo json_encode($output);

  }

  public function getCustomersData($customer_id)
  {

    $output['data'] = $this->bm->getRow('customers','id',$customer_id);

    echo json_encode($output);

  }

  public function getCallOrderDetails($call_order_id)
  {

    $this->load->model('Order_model');

    $data['call_order'] = $this->Order_model->getCallOrderDetails($call_order_id);

    $output['html'] = $this->load_view('order/view_details',$data,true);

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

      $this->load->model('Sale_model');

      $unpaid_inv = $this->Sale_model->getCountCustomerUnpaidInvoices($customer_id);
      $customer = $this->bm->getRow('customers','id',$customer_id);

      $driver_id = $this->user_id_;
      $products = $this->Sale_model->getAssignStockToDriver($driver_id);

      if($unpaid_inv->total > 0)
      {
          $output['total_unpaid_inv'] = '<span class="badge rounded-pill bg-danger">Total Unpaid Invoices: '. $unpaid_inv->total .'</span>';
      }
      else
      {
          $output['total_unpaid_inv'] = '<span class="badge rounded-pill bg-success">Total Unpaid Invoices: 0</span>';
      }

      $output['remarks'] = $customer->remarks;
      $output['payment_type'] = $customer->cat_type;
      $output['total_products'] = count($products);

      $data = [
          'products' => $products
      ];

      $output['html'] = $this->load_view('sales/customer_sale_products',$data,true);

      echo json_encode($output);

  }

  public function showSalesDetails($sale_id,$type = '')
  {

    $this->load->model('Sale_model');

    $sales_details = $this->Sale_model->getSaleDetails($sale_id);

    $sale = @$sales_details[0];
    $data = [
      'page_title' => 'Sale Information',
      'type' => $type,
      'sale' => $sale,
      'sales_details' => $sales_details

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

  public function getPendingPageStockDetails($type,$id)
  {

    if($type == 'call_order')
    {

      $this->load->model('Order_model');

      $details = $this->Order_model->getCallOrderDetails($id);

    }
    else
    {

      $this->load->model('Stock_model');

      $details = $this->Stock_model->getAssignStockDetails($id);

    }

    $data = [

      'type' => $type,
      'data' => $details

    ];

    $output['html'] = $this->load_view('inventory/modals/pending_page_details',$data,true);

    echo json_encode($output);

  }

  public function getDriverRequestedProducts($driver_id)
  {

    $this->load->model('Stock_model');

    $driver_request_products = $this->Stock_model->getDriverRequestedProducts($driver_id);

    $products = $this->bm->getRows('products','is_deleted',0);

    $output = [

        'driver_request' => $driver_request_products,
        'products' => $products

    ];

    $html = '';

    foreach ($driver_request_products as $key => $v)
    {




      $p_stock = getProductAvailableStock($v->product_id);

      $available_stock = $p_stock['available_qty'] > 0?'max="'.$p_stock['available_qty'].'"':'';

      $html .= '<div class="row">'.
                      '<div class="col-sm-5 mb-3">'.
                        '<label for="product_" class="form-label">Product</label>'.
                        '<select class="form-select form-select-sm product_id_" data-width="100%" name="product_id[]" required>'.
                          '<option value="">select</option>';

                          foreach ($products as $product)
                          {

                            $html .='<option value="'. $product->id .'" "'. $v->product_id == $product->id?'selected':''.'">'. $product->name .'</option>';

                          }

              $html .='</select>'.
                      '</div>'.
                      '<div class="col-sm-2 mb-3">'.
                        '<label for="qty" class="form-label">Qty</label>'.
                        '<input type="number" class="form-control form-control-sm qty_" min="1" '. $available_stock .' name="qty" value="'. $v->qty .'">'.
                      '</div>'.
                      '<div class="col-sm-1" style="padding:0px!important;">'.
                        '<a href="javascript:void(0)" class="remove_assign_products_to_driver">'.
                          '<i class="fa-solid fa-x" style="font-size: 20px;margin-top: 38px;margin-left:8px;;color:#fd6262!important;"></i>'.
                        '</a>'.
                      '</div>'.
                    '</div>';

    }

    echo json_encode($output);


  }


}
