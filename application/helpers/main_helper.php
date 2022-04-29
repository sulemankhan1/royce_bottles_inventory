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
