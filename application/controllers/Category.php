<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends My_controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Categories',
      'page_head' => 'Categories',
      'active_menu' => 'categories',
      'scripts' => [
        'DataTable/myDataTable.js',
        'main.js'
      ]

    ];

    $this->template('category/index',$data);


	}

  public function create()
  {

    $data = [

      'title' => 'Add Category',
      'page_head' => 'Add Category',
      'active_menu' => 'categories',

    ];

    $this->template('category/create',$data);

  }

  public function edit($id)
  {

    $data = [

      'title' => 'Edit Category',
      'page_head' => 'Edit Category',
      'edit_id' => $id,
      'active_menu' => 'categories'

    ];

    $this->template('category/create',$data);

  }

}
