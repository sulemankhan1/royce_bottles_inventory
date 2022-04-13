
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Call Order']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">

                 <h4 class="card-title"><?= $page_head ?></h4>
               </div>

               <a href="<?= site_url('add_call_order') ?>" class="btn btn-sm btn-primary">Add Call Order</a>

            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="myDataTable" class="table">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Customer</th>
                           <th>Day</th>
                           <th>Total Product</th>
                           <th>Total Qty</th>
                           <th>Total Price</th>
                           <th>Status</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                       <tr>
                          <td>1</td>
                          <td>Customer</td>
                          <td>Monday</td>
                          <td>10</td>
                          <td>20</td>
                          <td>1000</td>
                          <td>
                            <a href="javascript:void(0)" class="changeUser_status_" data-type-msg="Call Order" data-type-status="move to pending request">
                                  <span class="badge rounded-pill bg-secondary">Pending</span>
                            </a>
                          </td>
                          <td>
                            <span class="actions-icons">
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Call Order" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/showCallOrderDetails/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>Customer</td>
                          <td>Monday</td>
                          <td>10</td>
                          <td>20</td>
                          <td>1000</td>
                          <td>
                            <a href="javascript:void(0)" class="changeUser_status_" data-type-msg="Call Order" data-type-status="move to pending request">
                                  <span class="badge rounded-pill bg-secondary">Pending</span>
                            </a>
                          </td>
                          <td>
                            <span class="actions-icons">
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Call Order" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/showCallOrderDetails/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>Customer</td>
                          <td>Monday</td>
                          <td>10</td>
                          <td>20</td>
                          <td>1000</td>
                          <td>
                            <a href="javascript:void(0)" class="changeUser_status_" data-type-msg="Call Order" data-type-status="move to pending request">
                                  <span class="badge rounded-pill bg-secondary">Pending</span>
                            </a>
                          </td>
                          <td>
                            <span class="actions-icons">
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Call Order" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/showCallOrderDetails/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
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
include(APPPATH.'views/users/modals/status-modal.php');
include(APPPATH.'views/modals/delete-modal.php');
include(APPPATH.'views/modals/view-details-modal.php');
?>
