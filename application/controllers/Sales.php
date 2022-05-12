<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Sales',
      'page_head' => 'Sales',
      'active_menu' => 'sales',
      'ajax_url' => site_url('Sales/getSales'),
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/salesDataTable.js',
        'sales/sales.js'
      ]

    ];

    $this->template('sales/index',$data);

	}

  public function getSales()
  {
    $this->load->model('Sale_model');

    $records = $this->Sale_model->getSales($_REQUEST,'records');
    $totalFilteredRecords = $this->Sale_model->getSales($_REQUEST,'filter');
    $recordsTotal = $this->Sale_model->getSales($_REQUEST,'recordsTotal');

    $data = array();
    $SNo = 0;
    $Style = "";

    foreach ($records as $key => $v)
    {

      $ID = $v->id;

      $SNo++;

      $nestedData = array();

      $nestedData[] = $SNo;

      $nestedData[] = $v->invoice_no;
      $nestedData[] = $v->customer_name;
      $nestedData[] = $v->customer_category;
      $nestedData[] = $v->salesperson_name;
      $nestedData[] = $v->total_products;
      $nestedData[] = $v->total_qty;
      $nestedData[] = $v->total_amount;


        if($v->status == 'unpaid')
        {

          $change_status_url = site_url('update_sales_status/active/'.$ID);

          $status = '<a href="javascript:void(0)" class="changeSalesStatus action-icons" data-type-status="active" data-msg="Admin" data-url="'. $change_status_url .'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Paid">
                   <span class="badge rounded-pill bg-danger">Unpaid</span>
             </a>';

        }
        else
        {

          if($v->status == 'paid')
          {
            $bg = 'success';
          }
          elseif ($v->status == 'credit') {
            $bg = 'warning';
          }
          elseif ($v->status == 'pending') {
            $bg = 'secondary';
          }

          $status = '<a href="javascript:void(0)" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="'. ucfirst($v->status) .'">
                 <span class="badge rounded-pill bg-'. $bg .'">'. ucfirst($v->status) .'</span>
           </a>';

        }

        $nestedData[] = $status;

        $delete_url = site_url('delete_admin/'.$ID);

        $actions = '';

          $actions .= '<span class="actions-icons">';

            $actions .= '<a href="'.site_url('edit_sale/'.$ID) .'" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
              <i class="fa fa-pencil"></i>
            </a>';

            $actions .= '<a href="javascript:void(0)" class="action-icons view_details_" data-url="'. site_url('AjaxController/showSalesDetails/'.$ID.'/details') .'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
              <i class="fa fa-eye"></i>
            </a>';

          $actions .= '</span>';

           $nestedData[] = $actions;

           $data[] = $nestedData;

    }

    $json_data = array(
      "draw" => intval($_REQUEST['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
      "recordsTotal" => intval($recordsTotal), // total number of records
      "recordsFiltered" => intval($totalFilteredRecords), // total number of records after searching, if there is no searching then totalFiltered = totalData
      "data" => $data // total data array
    );


    echo json_encode($json_data);

  }

  public function create()
  {

    $data = [

      'title' => 'Add Sale',
      'page_head' => 'Add Sale',
      'active_menu' => 'sales',
      'customers' => $this->bm->getRows('customers','is_deleted',0),
      'styles' => [
        'add_sale.css'
      ],
      'scripts' => [
        'sales/add_sale.js'
      ]

    ];

    $this->template('sales/create',$data);

  }

  public function save_sale()
  {

      $this->load->model('Sale_model');

      $sale_row = $this->Sale_model->getLastInvoiceNo();

      if(!empty($sale_row))
      {


         $NewInvoiceNo = str_pad($sale_row->invoice_no, 5, '0', STR_PAD_LEFT);

       }
       else
       {

         $NewInvoiceNo = "00001";

       }

       $p = $this->inp_post();

       $arr = [
         'invoice_no' => $NewInvoiceNo,
         'customer_id' => $p['customer_id'],
         'customer_category' => $p['customer_category'],
         'total_amount' => $p['total_amount'],
         'is_pay' => $p['is_customer_pay'] == 'No'?0:1,
         'pay_type' => $p['payment_type'],
         'reason' => $p['reason'],
         'bank' => $p['bank_name'],
         'acc_no' => $p['acc_no'],
         'cheque_no' => $p['cheque_no'],
         'status' => 'pending',
         'added_by' => $this->user_id_
       ];

       $this->trans_('start');

            $last_id = $this->bm->insert_row('sales',$arr);

            $sale_products = [];

            $logs = [];

            foreach ($p['product_id'] as $key => $v) {

                $sale_products[] = [

                  'sale_id' => $last_id,
                  'product_id' => $v,
                  'price' => $p['price'][$key],
                  'sale_qty' => $p['sale_qty'][$key] == ''?0:$p['sale_qty'][$key],
                  'exchange_qty' => $p['exchange_qty'][$key] == ''?0:$p['exchange_qty'][$key],
                  'foc_qty' => $p['foc_qty'][$key] == ''?0:$p['foc_qty'][$key]

                ];

                $logs[] = [

                    'product_id' => $v,
                    'customer_id' => $p['customer_id'],
                    'driver_id' => $this->user_id_,
                    'qty' => $p['sale_qty'][$key] == ''?0:$p['sale_qty'][$key],
                    'type' => 'add_sale',
                    'added_by' => $this->user_id_

                ];
                $logs[] = [

                  'product_id' => $v,
                  'customer_id' => $p['customer_id'],
                  'driver_id' => $this->user_id_,
                  'qty' => $p['exchange_qty'][$key] == ''?0:$p['exchange_qty'][$key],
                  'type' => 'add_sale',
                  'added_by' => $this->user_id_

                ];
                $logs[] = [

                  'product_id' => $v,
                  'customer_id' => $p['customer_id'],
                  'driver_id' => $this->user_id_,
                  'qty' => $p['foc_qty'][$key] == ''?0:$p['foc_qty'][$key],
                  'type' => 'add_sale',
                  'added_by' => $this->user_id_

                ];

            }

            $this->bm->insert_rows('sales_details',$sale_products);
            $this->bm->insert_rows('logs',$logs);

       $this->trans_('complete');

       if ($this->trans_('status') === FALSE)
       {

           $output['status'] = false;
           $output['msg'] = 'Connection error Try Again';
           $output['sale_id'] = 0;

       }
       else
       {

         $output['status'] = true;
         $output['msg'] = 'Sale added successfully';
         $output['sale_id'] = $last_id;

       }

       echo json_encode($output);

  }

  public function edit($id)
  {

    $data = [

      'title' => 'Edit Sale',
      'page_head' => 'Edit Sale',
      'active_menu' => 'sales',
      'styles' => [
        'add_sale.css'
      ],
      'scripts' => [
        'sales/add_sale.js'
      ]

    ];

    $this->template('sales/edit',$data);

  }

  public function view_sale()
  {

    $data = [

      'title' => 'View Sale',
      'page_head' => 'View Sale',
      'active_menu' => 'sales'

    ];


    $this->template('sales/view_sale',$data);

  }

}
