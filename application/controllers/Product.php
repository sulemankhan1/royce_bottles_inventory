<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Products',
      'page_head' => 'Products',
      'active_menu' => 'products',
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/myDataTable.js',
        'main.js'
      ]

    ];

    $this->template('product/index',$data);


	}

  public function create()
  {

    $data = [

      'title' => 'Add Product',
      'page_head' => 'Add Product',
      'active_menu' => 'products',
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('product/create',$data);

  }

  public function edit($id)
  {

    $data = [

      'title' => 'Edit Product',
      'page_head' => 'Edit Product',
      'active_menu' => 'products',
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('product/edit',$data);

  }

}
