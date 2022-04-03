<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Admin',
      'active_menu' => 'users',
      'active_submenu' => 'admins'

    ];

    $this->template('users/admin/index',$data);


	}

  public function create()
  {

    $data = [

      'title' => 'Admin',
      'active_menu' => 'users',
      'active_submenu' => 'admins'

    ];

    $this->template('users/admin/create',$data);

  }

}
