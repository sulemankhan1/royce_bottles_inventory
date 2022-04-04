<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Dashboard',
      'active_menu' => 'dashboard',
      'scripts' => [
        'charts/vectore-chart.js',
        'charts/dashboard.js'
      ]

    ];

    $this->template('dashboard/index',$data);


	}

}
