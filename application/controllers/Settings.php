<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

  public function company()
	{

    $data = [

      'title' => 'Company Setting',
      'page_head' => 'Company Setting',
      'active_menu' => 'setting',
      'active_submenu' => 'company_setting'

    ];

    $this->template('settings/company',$data);


	}

  public function email()
  {

    $data = [

      'title' => 'Email Setting',
      'page_head' => 'Email Setting',
      'active_menu' => 'setting',
      'active_submenu' => 'email_setting',
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/myDataTable.js',
        'main.js',
        'template/template.js'
      ]

    ];

    $this->template('settings/email',$data);


  }

}
