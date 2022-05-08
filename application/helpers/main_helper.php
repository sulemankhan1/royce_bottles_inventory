<?php

if ( ! function_exists('companySetting'))
{

  function companySetting($column = '')
	{

    $ci=& get_instance();
    $ci->load->database();

    $result = $ci->db->get('company_setting')->row();

    if(!empty($result))
    {

      if (@getimagesize(base_url('uploads/company_logo/'.$result->logo)) && !empty($result->logo))
      {
           $logo_url = base_url('uploads/company_logo/'.$result->logo);
      }
      else
      {
          $logo_url = base_url('assets/images/company_logo.jpg');
      }

      $company_data =[

        'logo' => $logo_url,
        'name' => $result->name,
        'address' => $result->address,
        'terms_and_condition' => $result->terms_and_condition

      ];

    }
    else
    {

      $company_data =[

        'logo' => base_url('assets/images/company_logo.jpg'),
        'name' => '',
        'address' => '',
        'terms_and_condition' => ''

      ];

    }

    if(!empty($column))
    {

      return $company_data[$column];

    }
    else
    {

      return $company_data;

    }


  }

}

if ( ! function_exists('loginUserDetails'))
{

  function loginUserDetails($user_id)
	{

    $ci=& get_instance();
    $ci->load->database();

    $result = $ci->db->get_where('users',['id' => $user_id])->row();

    return $result;

  }

}

if ( ! function_exists('getDateTimeFormat'))
{

  function getDateTimeFormat($value ,$type = 'time')
  {

    if($type == 'time')
    {

      return date('d-m-Y H:i A',strtotime($value));

    }
    else
    {

      return date('d-m-Y',strtotime($value));

    }

  }

}

if ( ! function_exists('change_number_format'))
{

  function change_number_format($value)
  {


    return number_format(floatval($value),2,'.','');

  }

}

if ( ! function_exists('getProductAvailableStock'))
{

  function getProductAvailableStock($product_id)
  {

      $ci=& get_instance();
      $ci->load->database();

      $ci->db->select("logs.product_id,products.name as product_name,sum(if(logs.type='request',qty,0)) as total_request_qty,sum(if(logs.type='assign',qty,0)) as total_assign_qty,sum(if(logs.type='sold',qty,0)) as total_sold_qty,sum(if(logs.type='return',qty,0)) as total_return_qty,sum(if(logs.type='add_stock',qty,0)) as total_add_stock_qty,sum(if(logs.type='remove_stock',qty,0)) as total_remove_stock_qty,sum(if(logs.type='missing',qty,0)) as total_missing_qty,sum(if(logs.type='exchange',qty,0)) as total_exchange_qty", FALSE);
      $ci->db->from('logs');
      $ci->db->join('products','products.id = logs.product_id');

      $ci->db->where('logs.product_id',$product_id);

      $result = $ci->db->get()->row();


      $total_add = $result->total_add_stock_qty + $result->total_return_qty;
      $total_remove = $result->total_sold_qty + $result->total_remove_stock_qty + $result->total_missing_qty + $result->total_exchange_qty;

      $total = $total_add - $total_remove;

      $arr = [

        'product_id' => $result->product_id,
        'available_qty' => $total,

      ];

      return $arr;

  }

}
