
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0" style="margin-top:20px!important;">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Customers']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">

                 <h4 class="card-title"><?= $page_head ?></h4>
               </div>

               <a href="<?= site_url('add_customer') ?>" class="btn btn-sm btn-primary">Add Customer</a>

            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="myDataTable" class="table">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Name</th>
                           <th>Shop Name</th>
                           <th>Shop ID</th>
                           <th>Contact #</th>
                           <th>Email For E-receipt </th>
                           <th>Category</th>
                           <th>Salesperson </th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                       <tr>
                          <td>1</td>
                          <td>
                            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="table-img-design" alt="">
                            <span class="table-img-txt-design">
                              Name
                            </span>
                          </td>
                          <td>shopname</td>
                          <td>shop-11</td>
                          <td>1111</td>
                          <td>Email@gmail.com</td>
                          <td>
                              <span class="badge rounded-pill bg-success">Cash</span>
                          </td>
                          <td>salesperson</td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_customer/1') ?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Customer" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Customer/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons adjust_prices_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Customer/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Product Adjustment Prices">
                                <i class="fa-solid fa-comment-dollar"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>
                            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="table-img-design" alt="">
                            <span class="table-img-txt-design">
                              Name
                            </span>
                          </td>
                          <td>shopname</td>
                          <td>shop-11</td>
                          <td>1111</td>
                          <td>Email@gmail.com</td>
                          <td>
                              <span class="badge rounded-pill bg-success">Cash</span>
                          </td>
                          <td>salesperson</td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_customer/1') ?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Customer" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Customer/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons adjust_prices_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Customer/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Product Adjustment Prices">
                                <i class="fa-solid fa-comment-dollar"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>
                            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="table-img-design" alt="">
                            <span class="table-img-txt-design">
                              Name
                            </span>
                          </td>
                          <td>shopname</td>
                          <td>shop-11</td>
                          <td>1111</td>
                          <td>Email@gmail.com</td>
                          <td>
                              <span class="badge rounded-pill bg-success">Cash</span>
                          </td>
                          <td>salesperson</td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_customer/1') ?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Customer" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Customer/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons adjust_prices_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Customer/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Product Adjustment Prices">
                                <i class="fa-solid fa-comment-dollar"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>
                            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="table-img-design" alt="">
                            <span class="table-img-txt-design">
                              Name
                            </span>
                          </td>
                          <td>shopname</td>
                          <td>shop-11</td>
                          <td>1111</td>
                          <td>Email@gmail.com</td>
                          <td>
                              <span class="badge rounded-pill bg-success">Cash</span>
                          </td>
                          <td>salesperson</td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_customer/1') ?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Customer" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Customer/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons adjust_prices_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Customer/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Product Adjustment Prices">
                                <i class="fa-solid fa-comment-dollar"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>
                            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="table-img-design" alt="">
                            <span class="table-img-txt-design">
                              Name
                            </span>
                          </td>
                          <td>shopname</td>
                          <td>shop-11</td>
                          <td>1111</td>
                          <td>Email@gmail.com</td>
                          <td>
                              <span class="badge rounded-pill bg-success">Cash</span>
                          </td>
                          <td>salesperson</td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_customer/1') ?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Customer" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Customer/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons adjust_prices_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Customer/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Product Adjustment Prices">
                                <i class="fa-solid fa-comment-dollar"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>
                            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="table-img-design" alt="">
                            <span class="table-img-txt-design">
                              Name
                            </span>
                          </td>
                          <td>shopname</td>
                          <td>shop-11</td>
                          <td>1111</td>
                          <td>Email@gmail.com</td>
                          <td>
                              <span class="badge rounded-pill bg-success">Cash</span>
                          </td>
                          <td>salesperson</td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_customer/1') ?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Customer" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Customer/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons adjust_prices_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Customer/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Product Adjustment Prices">
                                <i class="fa-solid fa-comment-dollar"></i>
                              </a>
                            </span>
                          </td>
                       </tr>

                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php
include(APPPATH.'views/modals/delete-modal.php');
include(APPPATH.'views/modals/view-details-modal.php');
include(APPPATH.'views/users/modals/customer-products.php');
 ?>
