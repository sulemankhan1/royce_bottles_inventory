<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class OtherUsers extends My_controller
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
      'scripts' => [
        'DataTable/myDataTable.js',
        'users/main.js'
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
      'active_submenu' => 'others_users'

    ];

    $this->template('users/other/create',$data);

  }

}
