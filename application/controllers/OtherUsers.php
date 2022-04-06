<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class OtherUsers extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Other Users',
      'page_head' => 'Other Users',
      'active_menu' => 'users',
      'active_submenu' => 'others_users',
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/myDataTable.js',
        'users/main.js',
        'main.js'
      ]

    ];

    $this->template('users/other/index',$data);


	}

  public function create()
  {

    $data = [

      'title' => 'Add Other User',
      'page_head' => 'Add Other User',
      'active_menu' => 'users',
      'active_submenu' => 'others_users',
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('users/other/create',$data);

  }

  public function edit($id)
  {

    $data = [

      'title' => 'Edit Other User',
      'page_head' => 'Edit Other User',
      'active_menu' => 'users',
      'active_submenu' => 'others_users',
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('users/other/edit',$data);

  }

}
