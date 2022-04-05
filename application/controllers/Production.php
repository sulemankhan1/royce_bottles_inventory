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

      'title' => 'Production',
      'page_head' => 'Productions',
      'active_menu' => 'users',
      'active_submenu' => 'productions',
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

      'title' => 'Add Production',
      'page_head' => 'Add Production',
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

      'title' => 'Edit Production',
      'page_head' => 'Edit Production',
      'edit_id' => $id,
      'active_menu' => 'users',
      'active_submenu' => 'productions',
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('users/production/create',$data);

  }

}
