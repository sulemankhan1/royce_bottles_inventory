<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Evidence extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Evidence',
      'page_head' => 'Evidence',
      'active_menu' => 'evidence',
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/myDataTable.js',
        'main.js'
      ]

    ];

    $this->template('evidence/index',$data);


	}

  public function create()
  {

    $data = [

      'title' => 'Add Evidence',
      'page_head' => 'Add Evidence',
      'active_menu' => 'evidence',
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('evidence/create',$data);

  }

  public function edit($id)
  {

    $data = [

      'title' => 'Edit Evidence',
      'page_head' => 'Edit Evidence',
      'active_menu' => 'evidence'

    ];

    $this->template('evidence/edit',$data);

  }

}
