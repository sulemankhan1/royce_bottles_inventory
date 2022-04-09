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
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/myDataTable.js',
        'sales/sales.js'
      ]

    ];

    $this->template('sales/index',$data);

	}

  public function create()
  {

    $data = [

      'title' => 'Add Sale',
      'page_head' => 'Add Sale',
      'active_menu' => 'sales',
      'styles' => [
        'add_sale.css'
      ],
      'scripts' => [
        'sales/add_sale.js'
      ]

    ];

    $this->template('sales/create',$data);

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
