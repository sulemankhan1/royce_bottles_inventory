<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Admins',
      'page_head' => 'Admins',
      'active_menu' => 'users',
      'active_submenu' => 'admins',
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/myDataTable.js',
        'users/main.js',
        'main.js'
      ]

    ];

    $this->template('users/admin/index',$data);


	}

  public function create()
  {

    $data = [

      'title' => 'Add Admin',
      'page_head' => 'Add Admin',
      'active_menu' => 'users',
      'active_submenu' => 'admins',
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('users/admin/create',$data);

  }

  public function edit($id)
  {

    $data = [

      'title' => 'Edit Admin',
      'page_head' => 'Edit Admin',
      'active_menu' => 'users',
      'active_submenu' => 'admins',
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('users/admin/edit',$data);

  }

}
