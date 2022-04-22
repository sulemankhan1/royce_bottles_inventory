<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

  }

	public function index()
	{

    $data = [

      'title' => 'Product Categories',
      'page_head' => 'Product Categories',
      'active_menu' => 'categories',
      'ajax_url' => site_url('Category/getCategories'),
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/myDataTable.js',
        'main.js'
      ]

    ];

    $this->template('category/index',$data);


	}

	public function getCategories()
	{

    $this->load->model('Category_model');

		$records = $this->Category_model->getCategories($_REQUEST,'records');
		$totalFilteredRecords = $this->Category_model->getCategories($_REQUEST,'filter');
		$recordsTotal = $this->Category_model->getCategories($_REQUEST,'recordsTotal');

		$data = array();
		$SNo = 0;
		$Style = "";

		foreach ($records as $key => $v)
		{

      $ID = $v->id;

			$SNo++;

			$nestedData = array();

			$nestedData[] = $SNo;

			$nestedData[] = $v->name;
			$nestedData[] = $v->price;

        $delete_url = site_url('delete_category/'.$ID);

  			$actions = '';

          $actions .= '<span class="actions-icons">';

    				$actions .= '<a href="'.site_url('edit_category/'.$ID) .'" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
              <i class="fa fa-pencil"></i>
            </a>';

  					$actions .= '<a href="javascript:void(0)" class="action-icons delete_record_" data-msg="Are you sure you want to delete this Category?" data-url="'. $delete_url .'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
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

  public function create()
  {

    $data = [

      'title' => 'Add Category',
      'page_head' => 'Add Category',
      'active_menu' => 'categories',

    ];

    $this->template('category/create',$data);

  }

  public function save_category()
  {

      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('price', 'Price', 'required');

      if ($this->form_validation->run() == FALSE)
      {

        $error = validation_errors();

        $this->session->set_flashdata('_error',$error);

        redirect('add_category');

      }
      else
      {

           $p = $this->inp_post();

           $ID = (isset($p['ID'])?$p['ID']:'');
           unset($p['ID']);

           $arr = [

              'name' => $p['name'],
              'price' => $p['price'],
              'added_by' => $this->user_id_

           ];

           $this->trans_('start');

            if(!empty($ID))
            {

              unset($arr['added_by']);

              $this->bm->update('categories',$arr,'id',$ID);

            }
            else
            {

                $this->bm->insert_row('categories',$arr);

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

               $this->session->set_flashdata('_success','Category updated successfully');

             }
             else
             {

               $this->session->set_flashdata('_success','Category created successfully');

             }

           }

           redirect('categories');

      }

  }

  public function edit($cat_id)
  {

    $data = [

      'title' => 'Edit Category',
      'page_head' => 'Edit Category',
      'active_menu' => 'categories',
      'category' => $this->bm->getRow('categories','id',$cat_id)

    ];

    $this->template('category/edit',$data);

  }

  public function delete($cat_id)
  {

      $arr = [

        'is_deleted' => 1

      ];

      $res = $this->bm->update('categories',$arr,'id',$cat_id);

      if ($res)
      {

        $this->session->set_flashdata('_success','Category deleted successfully');

      }
      else
      {

        $this->session->set_flashdata('_error','Connection error Try Again');

      }

      redirect('categories');

  }


}
