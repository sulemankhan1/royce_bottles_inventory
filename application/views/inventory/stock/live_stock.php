
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0" style="margin-top:20px!important;">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Inventory','url' => 'live_stock'],
          ['label'=>'Live Stock']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">

                 <h4 class="card-title"><?= $page_head ?></h4>
               </div>

            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="myDataTable" class="table">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Driver</th>
                           <th>Total Assign Qty</th>
                           <th>Total Sold Qty</th>
                           <th>Total Remaining Qty</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                       <tr>
                          <td>1</td>
                          <td>Driver1</td>
                          <td>55</td>
                          <td>15</td>
                          <td>40</td>
                          <td>
                            <span class="actions-icons">
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getViewDetailsByDriverAssignQty/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>Driver1</td>
                          <td>55</td>
                          <td>15</td>
                          <td>40</td>
                          <td>
                            <span class="actions-icons">
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getViewDetailsByDriverAssignQty/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>Driver1</td>
                          <td>55</td>
                          <td>15</td>
                          <td>40</td>
                          <td>
                            <span class="actions-icons">
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getViewDetailsByDriverAssignQty/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
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
include(APPPATH.'views/modals/view-details-modal.php');
 ?>
