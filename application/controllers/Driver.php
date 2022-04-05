<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Driver extends MY_Controller
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
        'users/main.js',
        'main.js'
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
      'active_submenu' => 'drivers',
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('users/driver/create',$data);

  }

  public function edit($id)
  {

    $data = [

      'title' => 'Edit Driver',
      'page_head' => 'Edit Driver',
      'edit_id' => $id,
      'active_menu' => 'users',
      'active_submenu' => 'drivers',
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('users/driver/create',$data);

  }

}
