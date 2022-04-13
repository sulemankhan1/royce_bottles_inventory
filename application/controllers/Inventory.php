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

    ];

    $this->template('inventory/stock/add',$data);

  }

  public function view_stock()
  {

    $data = [

      'title' => 'View Stock',
      'page_head' => 'View Stock',
      'active_menu' => 'inventory',
      'active_submenu' => 'view_stock',
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/myDataTable.js',
        'inventory/add_stock.js',
        'main.js'
      ]

    ];

    $this->template('inventory/stock/index',$data);

  }

  public function stock_history()
  {

    $data = [

      'title' => 'Stock History',
      'page_head' => 'Stock History',
      'active_menu' => 'inventory',
      'active_submenu' => 'stock_history',
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/myDataTable.js',
        'inventory/add_stock.js',
        'main.js'
      ]

    ];

    $this->template('inventory/stock/stock_history',$data);

  }

  public function assign_to_driver()
  {

    $data = [

      'title' => 'Assign Stock To Driver',
      'page_head' => 'Assign Stock To Driver',
      'active_menu' => 'inventory',
      'active_submenu' => 'assign_to_driver',
      'scripts' => [
        'inventory/assign_to_driver.js'
      ]
    ];

    $this->template('inventory/stock/assign_to_driver',$data);

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

    $data = [

      'title' => 'Request Stock',
      'page_head' => 'Request Stock',
      'active_menu' => 'inventory',
      'active_submenu' => 'request_stock',
      'scripts' => [
        'inventory/assign_to_driver.js'
      ]

    ];

    $this->template('inventory/stock/request_stock',$data);

  }

  public function pending_request()
  {

    $data = [

      'title' => 'Pending Request',
      'page_head' => 'Pending Request',
      'active_menu' => 'inventory',
      'active_submenu' => 'pending_request',
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/pendingRequest.js',
        'main.js',
        'users/main.js',
        'pending_request/pending_request.js'
      ]

    ];

    $this->template('inventory/stock/pending_page',$data);

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
