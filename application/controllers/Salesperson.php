<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Salesperson extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Salesperson',
      'page_head' => 'Salesperson',
      'active_menu' => 'salesperson',
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/myDataTable.js',
        'main.js'
      ]

    ];

    $this->template('salesperson/index',$data);


	}

  public function create()
  {

    $data = [

      'title' => 'Add Salesperson',
      'page_head' => 'Add Salesperson',
      'active_menu' => 'salesperson',
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('salesperson/create',$data);

  }

  public function edit($id)
  {

    $data = [

      'title' => 'Edit Salesperson',
      'page_head' => 'Edit Salesperson',
      'active_menu' => 'salesperson'

    ];

    $this->template('salesperson/edit',$data);

  }

}
