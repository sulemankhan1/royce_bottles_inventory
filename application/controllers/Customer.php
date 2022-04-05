<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller
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
        'users/customers.js',
        'main.js',
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
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('customer/create',$data);

  }

  public function edit($id)
  {

    $data = [

      'title' => 'Edit Customer',
      'page_head' => 'Edit Customer',
      'edit_id' => $id,
      'active_menu' => 'customers',
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('customer/create',$data);

  }


}
