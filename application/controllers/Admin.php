<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends My_controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Admin',
      'page_head' => 'Admin',
      'active_menu' => 'users',
      'active_submenu' => 'admins',
      'scripts' => [
        'DataTable/myDataTable.js',
        'users/main.js'
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
      'active_submenu' => 'admins'

    ];

    $this->template('users/admin/create',$data);

  }

  public function edit($id)
  {

    $data = [

      'title' => 'Edit Admin',
      'page_head' => 'Edit Admin',
      'edit_id' => $id,
      'active_menu' => 'users',
      'active_submenu' => 'admins'

    ];

    $this->template('users/admin/create',$data);

  }

}
