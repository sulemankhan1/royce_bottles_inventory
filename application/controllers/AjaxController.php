<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends My_controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function getViewDetailsByType($type,$id)
	{

    $data = [

      'type' => $type

    ];

    if($type === 'Product')
    {

      $output['html'] = $this->load_view('product/view_details',$data,true);

    }
    else if($type === 'Customer')
    {

      $output['html'] = $this->load_view('customer/view_details',$data,true);

    }
    else
    {

      $output['html'] = $this->load_view('users/modals/view_details',$data,true);

    }


    echo json_encode($output);

	}

}
