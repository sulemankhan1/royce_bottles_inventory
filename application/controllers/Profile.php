<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

  public function edit_profile($id)
  {

    $data = [

      'title' => 'Edit Profile',
      'page_head' => 'Edit Profile',
      'active_menu' => '',
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('users/profile/edit_profile',$data);

  }

  public function view_profile($id)
  {

    $data = [

      'title' => 'View Profile',
      'page_head' => 'View Profile',
      'active_menu' => ''

    ];

    $this->template('users/profile/view_profile',$data);

  }

}
