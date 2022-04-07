<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends MY_Controller
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

  public function getReturnStockProductsByDriverId($driver_id)
  {
      $data = [];
      $output['html'] = $this->load_view('inventory/modals/return_stock_products',$data,true);

      echo json_encode($output);

  }

  public function getInventoryDetailsByType($type,$id)
  {

      $data = [

        'type' => $type

      ];

      $output['html'] = $this->load_view('inventory/modals/inv_details',$data,true);

      echo json_encode($output);

  }


  public function getViewDetailsByDriverAssignQty($driver_id)
  {

      $data = [];

      $output['html'] = $this->load_view('inventory/modals/live_stock_details',$data,true);

      echo json_encode($output);

  }


}
