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
      'ajax_url' => base_url('Settings/getTemplates'),
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

  public function save_general_setting()
  {

         $p = $this->inp_post();

         $ID = (isset($p['ID'])?$p['ID']:'');
         unset($p['ID']);

         $arr = [

            'title' => isset($p['title'])?$p['title']:'',
            'subject' => isset($p['subject'])?$p['subject']:'',
            'template' => isset($p['template'])?$p['template']:'',
            'added_by' => $this->user_id_

         ];

         $this->trans_('start');

          if(!empty($ID))
          {

            unset($arr['added_by']);

            $this->bm->update('email_templates',$arr,'id',$ID);

          }
          else
          {

              $this->bm->insert_row('email_templates',$arr);

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

             $this->session->set_flashdata('_success','Template updated successfully');

           }
           else
           {

             $this->session->set_flashdata('_success','Template created successfully');

           }

         }

         redirect('email_setting');

  }

  public function getTemplates()
	{

    $this->load->model('Setting_model');

		$records = $this->Setting_model->getTemplates($_REQUEST,'records');
		$totalFilteredRecords = $this->Setting_model->getTemplates($_REQUEST,'filter');
		$recordsTotal = $this->Setting_model->getTemplates($_REQUEST,'recordsTotal');

		$data = array();
		$SNo = 0;
		$Style = "";

		foreach ($records as $key => $v)
		{

      $ID = $v->id;

			$SNo++;

			$nestedData = array();

			$nestedData[] = $SNo;

			$nestedData[] = $v->title;
      $nestedData[] = $v->subject;
			$nestedData[] = $v->template;

        $delete_url = site_url('delete_template/'.$ID);
        $edit_url = site_url('AjaxController/getTemplateData/'.$ID);

  			$actions = '';

          $actions .= '<span class="actions-icons">';

    				$actions .= '<a href="javascript:void(0)" data-url="'. $edit_url .'" class="action-icons edit_template_" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
              <i class="fa fa-pencil"></i>
            </a>';

  					$actions .= '<a href="javascript:void(0)" class="action-icons delete_record_" data-msg="Are you sure you want to delete this Template?" data-url="'. $delete_url .'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
              <i class="fa-solid fa-trash"></i>
            </a>';

          $actions .= '</span>';

			     $nestedData[] = $actions;

           $data[] = $nestedData;

		}

		$json_data = array(
			"draw" => intval($_REQUEST['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
			"recordsTotal" => intval($recordsTotal), // total number of records
			"recordsFiltered" => intval($totalFilteredRecords), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data" => $data // total data array
		);


		echo json_encode($json_data);

	}

  public function save_template()
  {

         $p = $this->inp_post();

         $ID = (isset($p['ID'])?$p['ID']:'');
         unset($p['ID']);

         $arr = [

            'title' => isset($p['title'])?$p['title']:'',
            'subject' => isset($p['subject'])?$p['subject']:'',
            'template' => isset($p['template'])?$p['template']:'',
            'added_by' => $this->user_id_

         ];

         $this->trans_('start');

          if(!empty($ID))
          {

            unset($arr['added_by']);

            $this->bm->update('email_templates',$arr,'id',$ID);

          }
          else
          {

              $this->bm->insert_row('email_templates',$arr);

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

             $this->session->set_flashdata('_success','Template updated successfully');

           }
           else
           {

             $this->session->set_flashdata('_success','Template created successfully');

           }

         }

         redirect('email_setting');

  }

  public function delete_template($template_id)
  {

    $res = $this->bm->delete('email_templates','id',$template_id);

    if($res)
    {

        $this->session->set_flashdata('_success','Template deleted successfully');

    }
    else
    {

        $this->session->set_flashdata('_error','Connection error Try Again');

    }

    redirect('email_setting');

  }

}
