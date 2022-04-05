<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

  public function login()
	{

    $data = [
        'title' => 'Login'
    ];

    $this->load_view('auth/login',$data);

	}

  public function forget_password()
	{

    $data = [
        'title' => 'Forget Password'
    ];

    $this->load_view('auth/forget_password',$data);

	}

  public function logout()
  {

    redirect('login');

  }

}
