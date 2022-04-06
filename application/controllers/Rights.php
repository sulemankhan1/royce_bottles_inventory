<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rights extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Rights',
      'page_head' => 'Rights',
      'active_menu' => 'users',
      'active_submenu' => 'rights',
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/myDataTable.js',
        'main.js'
      ]

    ];

    $this->template('users/rights/index',$data);


	}

  public function edit()
  {

    $data = [

      'title' => 'Edit Rights',
      'page_head' => 'Edit Rights',
      'active_menu' => 'users',
      'active_submenu' => 'rights',

    ];

    $this->template('users/rights/edit',$data);

  }

}
