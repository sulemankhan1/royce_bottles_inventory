<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends My_controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Customers',
      'page_head' => 'Customers',
      'active_menu' => 'customers',
      'scripts' => [
        'DataTable/myDataTable.js',
        'main.js'
      ]

    ];

    $this->template('customer/index',$data);


	}

  public function create()
  {

    $data = [

      'title' => 'Add Customer',
      'page_head' => 'Add Customer',
      'active_menu' => 'customers',

    ];

    $this->template('customer/create',$data);

  }

}
