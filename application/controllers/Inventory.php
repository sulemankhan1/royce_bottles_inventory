<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Inventory',
      'page_head' => 'Inventory',
      'active_menu' => 'inventory',
      'active_submenu' => 'view_inventory',
      'products' => $this->bm->getRows('products','is_deleted',0),
      'redirect_to' => site_url('view_inventory'),
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/inventoryDataTable.js',
        'inventory/main.js',
        'inventory/assign_to_driver.js',
        'inventory/return_stock.js',
        'inventory/add_stock.js'
      ]

    ];

    $this->template('inventory/index',$data);

	}

  public function add_stock()
  {

    $data = [

      'title' => 'Add Stock',
      'page_head' => 'Add Stock',
      'active_menu' => 'inventory',
      'active_submenu' => 'add_stock',
      'products' => $this->bm->getRows('products','is_deleted',0)

    ];

    $this->template('inventory/stock/add',$data);

  }

  public function save_stock()
  {
      $p = $this->inp_post();

      $rediect_to = $p['redirect_to'];

      $this->form_validation->set_rules('product_id', 'Product', 'required');
      $this->form_validation->set_rules('qty', 'Qty', 'required');

      if ($this->form_validation->run() == FALSE)
      {

        $error = validation_errors();

        $this->session->set_flashdata('_error',$error);

        redirect($rediect_to);

      }
      else
      {

           $arr = [

              'product_id' => $p['product_id'],
              'qty' => $p['qty'],
              'type' => 'add',
              'added_by' => $this->user_id_

           ];

           $this->trans_('start');

                $this->bm->insert_row('stock',$arr);

                $arr['type'] = 'add_stock';

                $this->bm->insert_row('logs',$arr);

           $this->trans_('complete');

           if ($this->trans_('status') === FALSE)
           {

               $this->session->set_flashdata('_error','Connection error Try Again');

           }
           else
           {

               $this->session->set_flashdata('_success','Stock added successfully');

           }

           redirect($rediect_to);

      }

  }

  public function view_stock()
  {

    $data = [

      'title' => 'View Stock',
      'page_head' => 'View Stock',
      'active_menu' => 'inventory',
      'active_submenu' => 'view_stock',
      'ajax_url' => site_url('Inventory/getStocks'),
      'products' => $this->bm->getRows('products','is_deleted',0),
      'redirect_to' => site_url('view_stock'),
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/stockDataTable.js',
        'inventory/add_stock.js',
        'main.js',
        'dataTable_buttons'
      ]

    ];

    $this->template('inventory/stock/index',$data);

  }

	public function getStocks()
	{

    $this->load->model('Stock_model');

		$records = $this->Stock_model->getStocks($_REQUEST,'records');
		$totalFilteredRecords = $this->Stock_model->getStocks($_REQUEST,'filter');
		$recordsTotal = $this->Stock_model->getStocks($_REQUEST,'recordsTotal');

		$data = array();
		$SNo = 0;
		$Style = "";

		foreach ($records as $key => $v)
		{

      $ID = $v->id;

			$SNo++;

			$nestedData = array();

			$nestedData[] = $SNo;

			$nestedData[] = $v->product_name;
      $nestedData[] = $v->qty;
      $nestedData[] = $v->added_by_name;
			$nestedData[] = getDateTimeFormat($v->added_at);

        $delete_url = site_url('delete_stock/'.$ID);

  			$actions = '';

          $actions .= '<span class="actions-icons">';

  					$actions .= '<a href="javascript:void(0)" class="action-icons delete_record_" data-msg="Are you sure you want to delete this Stock?" data-url="'. $delete_url .'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
              <i class="fa-solid fa-trash"></i>
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

  public function delete_stock($stock_id)
  {

      $arr = [

        'is_deleted' => 1

      ];

      $this->trans_('start');

           $this->bm->update('stock',$arr,'id',$stock_id);

           $stock = $this->bm->getRow('stock','id',$stock_id);

           $stock_arr = [

              'product_id' => $stock->product_id,
              'qty' => $stock->qty,
              'type' => 'remove',
              'added_by' => $this->user_id_

           ];

           $this->bm->insert_row('stock',$stock_arr);

           $stock_arr['type'] = 'remove_stock';

           $this->bm->insert_row('logs',$stock_arr);

      $this->trans_('complete');

      if ($this->trans_('status') === FALSE)
      {

          $this->session->set_flashdata('_error','Connection error Try Again');

      }
      else
      {
          $this->session->set_flashdata('_success','Stock deleted successfully');

      }

      redirect('view_stock');

  }

  public function stock_history()
  {

    $data = [

      'title' => 'Stock History',
      'page_head' => 'Stock History',
      'active_menu' => 'inventory',
      'active_submenu' => 'stock_history',
      'ajax_url' => base_url('Inventory/getStockHistory'),
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/stockHistoryDataTable.js',
        'inventory/add_stock.js',
        'main.js',
        'dataTable_buttons'
      ]

    ];

    $this->template('inventory/stock/stock_history',$data);

  }

  public function getStockHistory()
	{

    $this->load->model('Stock_model');

		$records = $this->Stock_model->getStockHistory($_REQUEST,'records');
		$totalFilteredRecords = $this->Stock_model->getStockHistory($_REQUEST,'filter');
		$recordsTotal = $this->Stock_model->getStockHistory($_REQUEST,'recordsTotal');

		$data = array();
		$SNo = 0;
		$Style = "";

		foreach ($records as $key => $v)
		{

      $ID = $v->id;

			$SNo++;

			$nestedData = array();

			$nestedData[] = $SNo;

			$nestedData[] = $v->product_name;
      $nestedData[] = $v->qty;

      if($v->type == 'add')
      {

        $type = '<span class="badge rounded-pill bg-success">'.ucfirst($v->type).'</span>';

      }
      else
      {

        $type = '<span class="badge rounded-pill bg-danger">'.ucfirst($v->type).'</span>';

      }

      $nestedData[] = $type;

      $nestedData[] = $v->added_by_name;
			$nestedData[] = getDateTimeFormat($v->added_at);

        $delete_url = site_url('delete_stock/'.$ID);

  			$actions = '';

          $actions .= '<span class="actions-icons">';

  					$actions .= '<a href="javascript:void(0)" class="action-icons delete_record_" data-msg="Are you sure you want to delete this Stock?" data-url="'. $delete_url .'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
              <i class="fa-solid fa-trash"></i>
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

  public function assign_to_driver()
  {

    $this->load->model('Product_model');
    $this->load->model('Stock_model');

    $data = [

      'title' => 'Assign Stock To Driver',
      'page_head' => 'Assign Stock To Driver',
      'active_menu' => 'inventory',
      'active_submenu' => 'assign_to_driver',
      'drivers' => $this->bm->getRowsWithConditions('users',['is_deleted' => 0,'type' => 'driver']),
      'products' => $this->Product_model->getAllProducts(),
      'driver_request_products' => $this->Stock_model->getDriverRequestStock($this->user_id_),
      'scripts' => [
        'inventory/assign_to_driver.js'
      ]
    ];

    $this->template('inventory/stock/assign_to_driver',$data);

  }

  public function save_assign_to_driver($value='')
  {

      $this->form_validation->set_rules('driver_id', 'Driver', 'required');
      $this->form_validation->set_rules('product_id[]', 'Product', 'required');
      $this->form_validation->set_rules('qty[]', 'Quantity', 'required');

      if ($this->form_validation->run() == FALSE)
      {

        $error = validation_errors();

        $this->session->set_flashdata('_error',$error);

        redirect('assign_to_driver');

      }
      else
      {

           $p = $this->inp_post();

           $arr = [

              'driver_id' => $p['driver_id'],
              'added_by' => $this->user_id_

           ];

           $this->trans_('start');

              $last_id = $this->bm->insert_row('assign_stock',$arr);

              $assign_products = [];

              foreach ($p['product_id'] as $key => $v) {

                  $assign_products[] = [

                    'assign_stock_id' => $last_id,
                    'product_id' => $v,
                    'qty' => $p['qty'][$key]

                  ];

                  $logs[] = [

                      'product_id' => $v,
                      'driver_id' => $p['driver_id'],
                      'qty' => $p['qty'][$key],
                      'type' => 'assign',
                      'added_by' => $this->user_id_

                  ];

              }

              $this->bm->insert_rows('assign_stock_details',$assign_products);
              $this->bm->insert_rows('logs',$logs);

           $this->trans_('complete');

           if ($this->trans_('status') === FALSE)
           {

               $this->session->set_flashdata('_error','Connection error Try Again');

           }
           else
           {

               $this->session->set_flashdata('_success','Assigned to driver');

           }

           redirect('assign_to_driver');
      }

  }

  public function return_stock()
  {

    $data = [

      'title' => 'Return Stock',
      'page_head' => 'Return Stock',
      'active_menu' => 'inventory',
      'active_submenu' => 'return_stock',
      'scripts' => [
        'inventory/return_stock.js'
      ]
    ];

    $this->template('inventory/stock/return_stock',$data);

  }

  public function live_stock()
  {

    $data = [

      'title' => 'Live Stock',
      'page_head' => 'Live Stock',
      'active_menu' => 'inventory',
      'active_submenu' => 'live_stock',
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/myDataTable.js',
        'main.js'
      ]

    ];

    $this->template('inventory/stock/live_stock',$data);

  }

  public function request_stock()
  {

    $this->load->model('Product_model');
    $this->load->model('Stock_model');

    $data = [

      'title' => 'Request Stock',
      'page_head' => 'Request Stock',
      'active_menu' => 'inventory',
      'active_submenu' => 'request_stock',
      'driver_id' => $this->user_id_,
      'products' => $this->Product_model->getAllProducts(),
      'driver_request_products' => $this->Stock_model->getDriverRequestStock($this->user_id_),
      'scripts' => [
        'inventory/assign_to_driver.js'
      ]

    ];

    $this->template('inventory/stock/request_stock',$data);

  }

  public function save_driver_stock_request()
  {

      $this->form_validation->set_rules('driver_id', 'Driver', 'required');
      $this->form_validation->set_rules('product_id[]', 'Product', 'required');
      $this->form_validation->set_rules('qty[]', 'Quantity', 'required');

      if ($this->form_validation->run() == FALSE)
      {

        $error = validation_errors();

        $this->session->set_flashdata('_error',$error);

        redirect('request_stock');

      }
      else
      {

           $p = $this->inp_post();

           $is_driver = $this->bm->getRow('driver_request','driver_id',$p['driver_id']);

           $arr = [

              'driver_id' => $p['driver_id'],
              'added_by' => $this->user_id_

           ];

           $this->trans_('start');

            if(!empty($is_driver))
            {

              $last_id = $is_driver->id;
              $this->bm->update('driver_request',$arr,'id',$last_id);

              $this->bm->delete('driver_request_details','driver_request_id',$last_id);

            }
            else
            {

                $last_id = $this->bm->insert_row('driver_request',$arr);

            }

              $request_products = [];

              foreach ($p['product_id'] as $key => $v)
              {

                  $request_products[] = [

                    'driver_request_id' => $last_id,
                    'product_id' => $v,
                    'qty' => $p['qty'][$key]

                  ];

                  $log_req[] = [

                      'product_id' => $v,
                      'driver_id' => $p['driver_id'],
                      'qty' => $p['qty'][$key],
                      'type' => 'request',
                      'added_by' => $this->user_id_

                  ];

              }

              $this->bm->insert_rows('driver_request_details',$request_products);
              $this->bm->insert_rows('logs',$log_req);

           $this->trans_('complete');

           if ($this->trans_('status') === FALSE)
           {

               $this->session->set_flashdata('_error','Connection error Try Again');

           }
           else
           {

             if(!empty($is_driver))
             {

               $this->session->set_flashdata('_success','Request has updated');

             }
             else
             {

               $this->session->set_flashdata('_success','Request has sent');

             }

           }

           redirect('request_stock');

      }

  }

  public function pending_request()
  {

    $data = [

      'title' => 'Pending Requests',
      'page_head' => 'Pending Requests',
      'active_menu' => 'inventory',
      'active_submenu' => 'pending_request',
      'ajax_url' => site_url('Inventory/getDeliveryOrders'),
      'ajax_url1' => site_url('Inventory/getCallOrders'),
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/pendingRequest.js',
        'main.js',
        'pending_request/pending_request.js',
        'inventory/change_status.js',
        'dataTable_buttons'
      ]

    ];

    $this->template('inventory/stock/pending_page',$data);

  }

  public function getDeliveryOrders()
	{

    $this->load->model('Inventory_model');

		$records = $this->Inventory_model->getDeliveryOrders($_REQUEST,'records');
		$totalFilteredRecords = $this->Inventory_model->getDeliveryOrders($_REQUEST,'filter');
		$recordsTotal = $this->Inventory_model->getDeliveryOrders($_REQUEST,'recordsTotal');

		$data = array();
		$SNo = 0;
		$Style = "";

		foreach ($records as $key => $v)
		{

      $ID = $v->id;

			$SNo++;

			$nestedData = array();

			$nestedData[] = $SNo;

			$nestedData[] = $v->driver_name;
      $nestedData[] = $v->total_products;
      $nestedData[] = $v->total_qty;

        $change_status_url = site_url('update_delivery_order_status/'.$ID);

        $status = '<a href="javascript:void(0)" class="changeInv_status_ action-icons" data-btn-txt="Confirm" data-msg="Are you sure you want to Confirm this delivery order?" data-url="'. $change_status_url .'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Confirm">
                 <span class="badge rounded-pill bg-secondary">Pending</span>
           </a>';

      $nestedData[] = $status;


        $delete_url = site_url('delete_delivery_order/'.$ID);

  			$actions = '';

          $actions .= '<span class="actions-icons">';

  					$actions .= '<a href="javascript:void(0)" class="action-icons delete_record_" data-msg="Are you sure you want to delete this Delivery Order?" data-url="'. $delete_url .'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
              <i class="fa-solid fa-trash"></i>
            </a>';

            $actions .= '<a href="javascript:void(0)" class="action-icons view_details_" data-url="'. site_url('AjaxController/getPendingPageStockDetails/delivery_order/'.$ID) .'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
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

  public function update_delivery_order_status($delivery_order_id)
  {

      $arr = [

        'status' => 'confirmed'

      ];


      $this->trans_('start');

         $this->bm->update('assign_stock',$arr,'id',$delivery_order_id);

         $assign_stock_row = $this->bm->getRow('assign_stock','id',$delivery_order_id);
         $products = $this->bm->getRows('assign_stock_details','assign_stock_id',$delivery_order_id);

         $logs = [];
         foreach ($products as $key => $v) {

             $logs[] = [

                 'product_id' => $v->product_id,
                 'driver_id' => $assign_stock_row->driver_id,
                 'qty' => $v->qty,
                 'type' => 'assign_stock_confirmed',
                 'added_by' => $this->user_id_

             ];

         }

         $this->bm->insert_rows('logs',$logs);

      $this->trans_('complete');

      if ($this->trans_('status') === FALSE)
      {

          $this->session->set_flashdata('_error','Connection error Try Again');

      }
      else
      {

          $this->session->set_flashdata('_success','Delivery Order has confirmed successfully');

      }

      redirect('pending_request');

  }

  public function delete_delivery_order($delivery_order_id)
  {

      $arr = [

        'is_deleted' => 1

      ];

      $res = $this->bm->update('assign_stock',$arr,'id',$delivery_order_id);

      if ($res)
      {

        $this->session->set_flashdata('_success','Delivery Order deleted successfully');

      }
      else
      {

        $this->session->set_flashdata('_error','Connection error Try Again');

      }

      redirect('pending_request');

  }

  public function getCallOrders()
  {

    $this->load->model('Inventory_model');

    $records = $this->Inventory_model->getCallOrders($_REQUEST,'records');
    $totalFilteredRecords = $this->Inventory_model->getCallOrders($_REQUEST,'filter');
    $recordsTotal = $this->Inventory_model->getCallOrders($_REQUEST,'recordsTotal');

    $data = array();
    $SNo = 0;
    $Style = "";

    foreach ($records as $key => $v)
    {

      $ID = $v->id;

      $SNo++;

      $nestedData = array();

      $nestedData[] = $SNo;

      $nestedData[] = $v->customer_name;
      $nestedData[] = $v->driver_name;
      $nestedData[] = $v->delivery_day;
      $nestedData[] = $v->total_products;
      $nestedData[] = $v->total_qty;
      // $nestedData[] = change_number_format($v->total_price);


        $change_status_url = site_url('update_pending_call_order_status/'.$ID);

        $status = '<a href="javascript:void(0)" class="changeInv_status_ action-icons" data-btn-txt="Confirm" data-msg="Are you sure you want to Confirm this Call Order?" data-url="'. $change_status_url .'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Confirm">
                 <span class="badge rounded-pill bg-secondary">Pending</span>
           </a>';

        $nestedData[] = $status;

        $delete_url = site_url('delete_pending_call_order/'.$ID);

        $actions = '';

          $actions .= '<span class="actions-icons">';

            $actions .= '<a href="javascript:void(0)" class="action-icons delete_record_" data-msg="Are you sure you want to delete this Call Order?" data-url="'. $delete_url .'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
              <i class="fa-solid fa-trash"></i>
            </a>';

            $actions .= '<a href="javascript:void(0)" class="action-icons view_details_" data-url="'. site_url('AjaxController/getPendingPageStockDetails/call_order/'.$ID) .'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
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

  public function update_pending_call_order_status($call_order_id)
  {

      $arr = [

        'pending_request_status' => 'confirmed'

      ];


      $this->trans_('start');

         $this->bm->update('call_orders',$arr,'id',$call_order_id);

         $call_order_row = $this->bm->getRow('call_orders','id',$call_order_id);
         $products = $this->bm->getRows('call_orders_details','call_order_id',$call_order_id);

         $logs = [];
         foreach ($products as $key => $v) {

             $logs[] = [

                 'product_id' => $v->product_id,
                 'customer_id' => $call_order_id->customer_id,
                 'driver_id' => $call_order_id->driver_id,
                 'qty' => $v->qty,
                 'type' => 'pending_call_order_confirmed',
                 'added_by' => $this->user_id_

             ];

         }

         $this->bm->insert_rows('logs',$logs);

      $this->trans_('complete');

      if ($this->trans_('status') === FALSE)
      {

          $this->session->set_flashdata('_error','Connection error Try Again');

      }
      else
      {

          $this->session->set_flashdata('_success','Call Order has confirmed successfully');

      }

      redirect('pending_request');

  }

  public function delete_pending_call_order($call_order_id)
  {

      $arr = [

        'is_deleted' => 1

      ];

      $res = $this->bm->update('call_orders',$arr,'id',$call_order_id);

      if ($res)
      {

        $this->session->set_flashdata('_success','Call Order deleted successfully');

      }
      else
      {

        $this->session->set_flashdata('_error','Connection error Try Again');

      }

      redirect('pending_request');

  }

  public function logs()
  {

    $data = [

      'title' => 'Inventory Logs',
      'page_head' => 'Inventory Logs',
      'active_menu' => 'inventory',
      'active_submenu' => 'logs'

    ];

    $this->template('inventory/logs',$data);

  }

  public function view_logs()
  {

    $data = [

      'title' => 'View Inventory Logs',
      'page_head' => 'View Inventory Logs',
      'active_menu' => 'inventory',
      'active_submenu' => 'logs',
      'styles' => [
        'table-image.css'
      ],
      'scripts' => [
        'inventory/log_details.js'
      ]

    ];

    $this->template('inventory/logs_details',$data);

  }

}
