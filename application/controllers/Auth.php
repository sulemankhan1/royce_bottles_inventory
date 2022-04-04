<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends My_controller
{

  function __construct()
  {

    parent :: __construct();

  }

  public function login()
	{

		$this->load->view('auth/login');

	}

  public function forget_password()
	{

		$this->load->view('auth/forget_password');

	}

}
