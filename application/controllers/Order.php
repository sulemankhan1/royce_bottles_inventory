<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Call Order',
      'page_head' => 'Call Order',
      'active_menu' => 'call_order',
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/myDataTable.js',
        'sales/sales.js',
        'users/main.js',
        'main.js'
      ]

    ];

    $this->template('order/index',$data);

	}

  public function create()
  {

    $data = [

      'title' => 'Add Call Order',
      'page_head' => 'Add Call Order',
      'active_menu' => 'call_order',
      'scripts' => [
        'inventory/assign_to_driver.js'
      ]

    ];

    $this->template('order/create',$data);

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
