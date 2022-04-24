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
      'active_submenu' => 'company_setting',
      'company_setting' => $this->bm->getRow('company_setting'),
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('settings/company',$data);


	}

  public function save_company_setting()
  {

       $p = $this->inp_post();

       $company_setting = $this->bm->getRow('company_setting');

       if(!empty($company_setting))
       {
          $ID = $company_setting->id;
       }
       else
       {
          $ID = '';
       }

       $company_logo = NULL;

       if($ID != '')
       {
          $company_logo = $p['old_img'];
          unset($p['old_img']);
       }

       if(!empty($_FILES['img']['name']))
       {

         if($ID != '')
         {
              if (getimagesize(base_url('uploads/company_logo/'.$company_logo)) && !empty($company_logo))
              {
                  $dir_path = getcwd().'/uploads/company_logo/'.$company_logo;

                  unlink($dir_path);
              }
         }

         $company_logo = $this->bm->uploadFile($_FILES['img'],'uploads/company_logo');

       }

       $arr = [

          'logo' => $company_logo,
          'name' => $p['title'],
          'address' => $p['address'],
          'terms_and_condition' => $p['terms_and_condition'],
          'updated_by' => $this->user_id_,
          'updated_at' => date('Y-m-d H:i:s')

       ];

       $this->trans_('start');

        if(!empty($ID))
        {

          $this->bm->update('company_setting',$arr,'id',$ID);

        }
        else
        {

            $this->bm->insert_row('company_setting',$arr);

        }

       $this->trans_('complete');

       if ($this->trans_('status') === FALSE)
       {

           $this->session->set_flashdata('_error','Connection error Try Again');

       }
       else
       {

         if(!empty($ID))
         {

           $this->session->set_flashdata('_success','Company Setting updated successfully');

         }
         else
         {

           $this->session->set_flashdata('_success','Company Setting created successfully');

         }


       }

       redirect('company_setting');

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
