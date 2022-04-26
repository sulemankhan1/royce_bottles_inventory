<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    // Load the DB utility class
$this->load->dbutil();

// Backup your entire database and assign it to a variable


$backup =& $this->dbutil->backup();

// Load the file helper and write the file to your server

$this->load->helper('file');

write_file('/path/to/mybackup.sql', $backup);

// Load the download helper and send the file to your desktop

$this->load->helper('download');

force_download('mybackup.sql', $backup);

die();

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
