<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Driver extends My_controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Driver',
      'page_head' => 'Drivers',
      'active_menu' => 'users',
      'active_submenu' => 'drivers',
      'scripts' => [
        'DataTable/myDataTable.js',
        'users/main.js'
      ]

    ];

    $this->template('users/driver/index',$data);


	}

  public function create()
  {

    $data = [

      'title' => 'Add Driver',
      'page_head' => 'Add Driver',
      'active_menu' => 'users',
      'active_submenu' => 'drivers'

    ];

    $this->template('users/driver/create',$data);

  }

}
