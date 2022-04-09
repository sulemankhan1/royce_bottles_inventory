<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Invocies',
      'page_head' => 'Invocies',
      'active_menu' => 'invoices',
      'styles' => [
        'invoice.css'
      ],
      'scripts' => [
        'invoice/invoice.js'
      ]

    ];

    $this->template('invoices/index',$data);

	}

}
