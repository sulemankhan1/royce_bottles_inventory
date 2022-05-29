<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Evidence extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

    $this->checkRole(61);

  }

	public function index()
	{

    $data = [

      'title' => 'Evidence',
      'page_head' => 'Evidence',
      'active_menu' => 'evidence',
      'ajax_url' => site_url('Evidence/getEvidences'),
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/evidenceDataTable.js',
        'main.js',
        'dataTable_buttons'
      ]

    ];

    $this->template('evidence/index',$data);


	}

  public function getEvidences()
  {

    $this->load->model('Evidence_model');

    $records = $this->Evidence_model->getEvidences($_REQUEST,'records');
    $totalFilteredRecords = $this->Evidence_model->getEvidences($_REQUEST,'filter');
    $recordsTotal = $this->Evidence_model->getEvidences($_REQUEST,'recordsTotal');

    $data = array();
    $SNo = 0;
    $Style = "";

    foreach ($records as $key => $v)
    {

      $ID = $v->id;

      $SNo++;

      $nestedData = array();

      $nestedData[] = $SNo;

      //check image is exist in folder or not
      if (@getimagesize(base_url('uploads/evidence/'.$v->img)) && !empty($v->img))
      {
          $img_url = base_url('uploads/evidence/'.$v->img);
      }
      else
      {
          $img_url = base_url('assets/images/avatars/01.png');
      }

      $image = '<div class="table-circular-img"><img src="'. $img_url .'" class="" alt=""></div>';

      $nestedData[] = $v->shop_name;
      $nestedData[] = $image;
      $nestedData[] = $v->comment;
      $nestedData[] = $v->added_by_name;
      $nestedData[] = date('d-m-Y,H:i a',strtotime($v->added_at));

        $delete_url = site_url('delete_evidence/'.$ID);

        $actions = '';

          $actions .= '<span class="actions-icons">';

          if (isUserAllow(63)) {

            $actions .= '<a href="'.site_url('edit_evidence/'.$ID) .'" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
              <i class="fa fa-pencil"></i>
            </a>';

          }

          if (isUserAllow(64)) {

            $actions .= '<a href="javascript:void(0)" class="action-icons delete_record_" data-msg="Are you sure you want to delete this Evidence?" data-url="'. $delete_url .'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
              <i class="fa-solid fa-trash"></i>
            </a>';

          }

          if (isUserAllow(65)) {

            $actions .= '<a href="javascript:void(0)" class="action-icons view_details_" data-url="'. site_url('AjaxController/getEvidenceDetails/'.$ID) .'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
              <i class="fa fa-eye"></i>
            </a>';

          }

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

  public function create()
  {

    $this->checkRole(62);

    $this->load->model('Customer_model');
    $data = [

      'title' => 'Add Evidence',
      'page_head' => 'Add Evidence',
      'active_menu' => 'evidence',
      'customers' => $this->Customer_model->getCustomerShopName(),
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('evidence/create',$data);

  }

  public function save_evidence()
  {

      $this->form_validation->set_rules('shop_id', 'Shop', 'required');

      if ($this->form_validation->run() == FALSE)
      {

        $error = validation_errors();

        $this->session->set_flashdata('_error',$error);

        redirect('add_evidence');

      }
      else
      {

           $p = $this->inp_post();

           $ID = (isset($p['ID'])?$p['ID']:'');
           unset($p['ID']);

           $evidence_img = NULL;

           if($ID != '')
           {
              $evidence_img = $p['old_img'];
              unset($p['old_img']);
           }

           if(!empty($_FILES['img']['name']))
           {

             if($ID != '')
             {
                  if (@getimagesize(base_url('uploads/evidence/'.$evidence_img)) && !empty($evidence_img))
                  {
                      $dir_path = getcwd().'/uploads/evidence/'.$evidence_img;

                      unlink($dir_path);
                  }
             }

             $evidence_img = $this->bm->uploadFile($_FILES['img'],'uploads/evidence');

           }

           $arr = [

              'img' => $evidence_img,
              'shop_id' => $p['shop_id'],
              'comment' => $p['comment'],
              'added_by' => $this->user_id_

           ];

           $this->trans_('start');

            if(!empty($ID))
            {

              unset($arr['added_by']);

              $this->bm->update('evidence',$arr,'id',$ID);

            }
            else
            {

                $this->bm->insert_row('evidence',$arr);

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

               $this->session->set_flashdata('_success','Evidence updated successfully');

             }
             else
             {

               $this->session->set_flashdata('_success','Evidence created successfully');

             }


           }

           redirect('evidence');

      }

  }

  public function edit($evidence_id)
  {

    $this->checkRole(63);

    $this->load->model('Customer_model');

    $data = [

      'title' => 'Edit Evidence',
      'page_head' => 'Edit Evidence',
      'active_menu' => 'evidence',
      'customers' => $this->Customer_model->getCustomerShopName(),
      'evidence' => $this->bm->getRow('evidence','id',$evidence_id),
      'scripts' => [
        'img_trigger.js'
      ]

    ];

    $this->template('evidence/edit',$data);

  }

  public function delete($evidence_id)
  {

      $this->checkRole(64);

      $arr = [

        'is_deleted' => 1

      ];

      $res = $this->bm->update('evidence',$arr,'id',$evidence_id);

      if ($res)
      {

        $this->session->set_flashdata('_success','Evidence deleted successfully');

      }
      else
      {

        $this->session->set_flashdata('_error','Connection error Try Again');

      }

      redirect('evidence');

  }

}
