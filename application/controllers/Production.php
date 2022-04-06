<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Production extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Production Users',
      'page_head' => 'Production Users',
      'active_menu' => 'users',
      'active_submenu' => 'productions',
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/myDataTable.js',
        'users/main.js',
        'main.js'
      ]

    ];

    $this->template('users/production/index',$data);


	}

  public function create()
  {

    $data = [

      'title' => 'Add Production User',
      'page_head' => 'Add Production User',
      'active_menu' => 'users',
      'active_submenu' => 'productions',
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('users/production/create',$data);

  }

  public function edit($id)
  {

    $data = [

      'title' => 'Edit Production User',
      'page_head' => 'Edit Production User',
      'active_menu' => 'users',
      'active_submenu' => 'productions',
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('users/production/edit',$data);

  }

}
