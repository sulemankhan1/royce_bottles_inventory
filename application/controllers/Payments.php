<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payments extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Payments',
      'page_head' => 'Payments',
      'active_menu' => 'payments',
      'scripts' => [
        'payment/payment.js'
      ]

    ];

    $this->template('payments/index',$data);


	}

}
