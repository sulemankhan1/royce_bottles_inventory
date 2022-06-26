<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller
{

  function __construct()
  {

    parent :: __construct();

    $this->checkRole(25);

  }

	public function index()
	{

    $data = [

      'title' => 'Products',
      'page_head' => 'Products',
      'active_menu' => 'products',
      'ajax_url' => site_url('Product/getProducts'),
      'styles' => [
        'my-dataTable.css'
      ],
      'scripts' => [
        'DataTable/myDataTable.js',
        'main.js',
        'dataTable_buttons'
      ]

    ];

    $this->template('product/index',$data);

	}

  public function getProducts()
  {

    $this->load->model('Product_model');

    $records = $this->Product_model->getProducts($_REQUEST,'records');
    $totalFilteredRecords = $this->Product_model->getProducts($_REQUEST,'filter');
    $recordsTotal = $this->Product_model->getProducts($_REQUEST,'recordsTotal');

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
      if (@getimagesize(base_url('uploads/product/'.$v->img)) && !empty($v->img))
      {
          $img_url = base_url('uploads/product/'.$v->img);
      }
      else
      {
          $img_url = base_url('assets/images/avatars/01.png');
      }

      $name = '<div class="table-circular-img"><img src="'. $img_url .'" class="" alt=""></div>'.
        '<span class="table-img-txt-design">'.$v->name.'</span>';

      $nestedData[] = $name;
      $nestedData[] = $v->cat_name;
      $nestedData[] = $v->code;
      $nestedData[] = $v->sku;
      $nestedData[] = $v->price;

        $delete_url = site_url('delete_product/'.$ID);

        $actions = '';

          $actions .= '<span class="actions-icons">';

          if (isUserAllow(27)) {

            $actions .= '<a href="'.site_url('edit_product/'.$ID) .'" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
              <i class="fa fa-pencil"></i>
            </a>';

          }

          if (isUserAllow(28)) {


            $actions .= '<a href="javascript:void(0)" class="action-icons delete_record_" data-msg="Are you sure you want to delete this Product?" data-url="'. $delete_url .'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
              <i class="fa-solid fa-trash"></i>
            </a>';

          }

          if (isUserAllow(29)) {


            $actions .= '<a href="javascript:void(0)" class="action-icons view_details_" data-url="'. site_url('AjaxController/getProductDetails/'.$ID) .'" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
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

    $this->checkRole(26);

    $data = [

      'title' => 'Add Product',
      'page_head' => 'Add Product',
      'active_menu' => 'products',
      'categories' => $this->bm->getRows('categories','is_deleted' ,0),
      'scripts' => [
        'img_trigger.js',
        'product/product.js'
      ]

    ];

    $this->template('product/create',$data);

  }

  public function save_product()
  {

      $p = $this->inp_post();
      $is_unique = '';
      if(isset($p['old_name']))
      {

        if ($p['name'] != $p['old_name'])
        {

          $is_unique = '|is_unique[products.name]';

        }

      }
      else
      {

        $is_unique = '|is_unique[products.name]';

      }

      $this->form_validation->set_rules('name', 'Product Name', 'required'.$is_unique,[
        'required'      => 'The %s is required',
        'is_unique'     => 'The %s already exist'
      ]);

      $this->form_validation->set_rules('product_code', 'Product Code', 'required');
      $this->form_validation->set_rules('sku', 'Sku', 'required');
      $this->form_validation->set_rules('cat_id', 'Product Category', 'required');
      $this->form_validation->set_rules('price', 'Price', 'required');

      if ($this->form_validation->run() == FALSE)
      {

        $error = validation_errors();

        $this->session->set_flashdata('_error',$error);

        if(isset($p['ID']))
        {

          redirect('edit_product/'.$p['ID']);

        }
        else
        {

          redirect('add_product');

        }

      }
      else
      {

           $ID = (isset($p['ID'])?$p['ID']:'');
           unset($p['ID']);

           $product_img = NULL;

           if($ID != '')
           {
              $product_img = $p['old_img'];
              unset($p['old_img']);
           }

           if(!empty($_FILES['img']['name']))
           {

             if($ID != '')
             {
                  if (@getimagesize(base_url('uploads/product/'.$product_img)) && !empty($product_img))
                  {
                      $dir_path = getcwd().'/uploads/product/'.$product_img;

                      unlink($dir_path);
                  }
             }

             $product_img = $this->bm->uploadFile($_FILES['img'],'uploads/product');

           }

           $arr = [

              'img' => $product_img,
              'name' => $p['name'],
              'code' => $p['product_code'],
              'sku' => $p['sku'],
              'cat_id' => $p['cat_id'],
              'price' => $p['price'],
              'description' => $p['description'],
              'added_by' => $this->user_id_

           ];

           $this->trans_('start');

            if(!empty($ID))
            {

              unset($arr['added_by']);

              $this->bm->update('products',$arr,'id',$ID);

            }
            else
            {

                $last_id = $this->bm->insert_row('products',$arr);

                $customers = $this->bm->getRows('customers','is_deleted',0);
                $product = $this->bm->getRow('products','id',$last_id);

                $customer_products = [];

                foreach ($customers as $key => $v)
                {

                  $customer_products[] = [

                      'product_id' => $product->id,
                      'customer_id' => $v->id,
                      'price' => $product->price

                  ];

                }

                if(!empty($customer_products))
                {

                  $this->bm->insert_rows('customer_products_price',$customer_products);

                }


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

               $this->session->set_flashdata('_success','Product updated successfully');

             }
             else
             {

               $this->session->set_flashdata('_success','Product created successfully');

             }


           }

           redirect('products');

      }

  }

  public function edit($product_id)
  {

    $this->checkRole(27);

    $data = [

      'title' => 'Edit Product',
      'page_head' => 'Edit Product',
      'active_menu' => 'products',
      'categories' => $this->bm->getRows('categories','is_deleted' ,0),
      'product' => $this->bm->getRow('products','id',$product_id),
      'scripts' => [
        'img_trigger.js',
        'product/product.js'
      ]

    ];

    $this->template('product/edit',$data);

  }

  public function delete($product_id)
  {

      $this->checkRole(28);

      $arr = [

        'is_deleted' => 1

      ];

      $res = $this->bm->update('products',$arr,'id',$product_id);

      if ($res)
      {

        $this->session->set_flashdata('_success','Product deleted successfully');

      }
      else
      {

        $this->session->set_flashdata('_error','Connection error Try Again');

      }

      redirect('products');

  }

}
