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
    //
    // $this->sendOnWhatsapp();
    // die();
    $user = $this->bm->getRow('users','id',$this->user_id_);

    $data = [

      'title' => 'Dashboard',
      'active_menu' => 'dashboard',
      'user' => $user,
      'styles' => [
        'dashboard.css'
      ],
      'scripts' => [
        'charts/vectore-chart.js',
        'charts/dashboard.js'
      ]

    ];

    if($user->type == 'driver')
    {

        $this->load->model('Stock_model');
        $this->load->model('Order_model');
        $data['stock'] = $this->Stock_model->getAssignStockQtyToDriver($this->user_id_);
        $data['call_orders'] = $this->Order_model->getAllCallOrders($this->user_id_);

        $data['call_orders_details'] = [];

        foreach ($data['call_orders'] as $key => $v)
        {
            $data['call_orders_details'][$key] = $this->Order_model->getAllCallOrdersQtyByCallOrderId($v->id);
        }
    }
    else if($user->type == 'production')
    {

      $this->load->model('Product_model');
      $this->load->model('Driver_model');
      $data['products'] = $this->Product_model->getProductsCount();
      $data['drivers'] = $this->Driver_model->getDriversCount();

    }
    elseif ($user->type == 'admin')
    {

        $this->load->model('Customer_model');
        $this->load->model('Driver_model');
        $this->load->model('Sale_model');
        $this->load->model('Payment_model');

        $data['customers'] = $this->Customer_model->getCustomersCount();
        $data['drivers'] = $this->Driver_model->getDriversCount();
        $data['sale'] = $this->Sale_model->getTotalSaleAmount();
        $data['payment'] = $this->Payment_model->getTotalCreditAmount();
        $data['customer_credits'] = $this->Payment_model->getCustomerCreditsAmount();

    }


    $this->template('dashboard/index',$data);


	}

}
