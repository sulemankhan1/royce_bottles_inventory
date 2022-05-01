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

      'title' => 'Invoices',
      'page_head' => 'Invoices',
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
