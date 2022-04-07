
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0" style="margin-top:20px!important;">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Inventory','url' => 'view_stock'],
          ['label'=>'View Stock']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">

                 <h4 class="card-title"><?= $page_head ?></h4>
               </div>

                 <a href="javascript:void(0)" class="btn btn-sm btn-primary" id="add_stock_">Add Stock</a>

            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="myDataTable" class="table">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Product Name</th>
                           <th>Qty</th>
                           <th>Added By</th>
                           <th>Added At</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                       <tr>
                          <td>1</td>
                          <td>Product1</td>
                          <td>10</td>
                          <td>Demo</td>
                          <td>03-04-2021,5:10 PM</td>
                          <td>
                            <span class="actions-icons">
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Stock" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>Product1</td>
                          <td>10</td>
                          <td>Demo</td>
                          <td>03-04-2021,5:10 PM</td>
                          <td>
                            <span class="actions-icons">
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Stock" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>Product1</td>
                          <td>10</td>
                          <td>Demo</td>
                          <td>03-04-2021,5:10 PM</td>
                          <td>
                            <span class="actions-icons">
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Stock" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>Product1</td>
                          <td>10</td>
                          <td>Demo</td>
                          <td>03-04-2021,5:10 PM</td>
                          <td>
                            <span class="actions-icons">
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Stock" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
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
include(APPPATH.'views/inventory/modals/add_stock.php');
include(APPPATH.'views/modals/delete-modal.php');
 ?>
