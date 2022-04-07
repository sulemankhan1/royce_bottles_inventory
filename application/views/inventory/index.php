
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0" style="margin-top:20px!important;">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Inventory','url' => 'view_inventory'],
          ['label'=>'View Inventory']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">

               <div class="header-title">

                 <h4 class="card-title"><?= $page_head ?></h4>

               </div>

                <span>
                  <a href="javascript:void(0)" class="btn btn-sm btn-primary" id="add_stock_" data-redirect="view_inventory">Add Stock</a>
                  <a href="javascript:void(0)" class="btn btn-sm btn-warning" id="return_stock_">Return Stock</a>
                  <a href="javascript:void(0)" class="btn btn-sm btn-success" id="assign_stock_to_driver_">Assign Stock To Driver</a>
                </span>

            </div>
            <div class="card-body">
              <div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom:32px!important">
                <button type="button" class="btn btn-sm btn-outline-primary active inv_tabs_" data-type="available">Available</button>
                <button type="button" class="btn btn-sm btn-outline-primary inv_tabs_" data-type="missing">Missing</button>
                <button type="button" class="btn btn-sm btn-outline-primary inv_tabs_" data-type="return">Return</button>
                <button type="button" class="btn btn-sm btn-outline-primary inv_tabs_" data-type="exchange">Exchange</button>
              </div>
              <div class="table-responsive tabs_table available_table_">
                 <table id="invAvailableDataTable" class="table">
                    <thead>
                       <tr>
                          <th>#</th>
                          <th>Product Name</th>
                          <th>Available Qty</th>
                          <th>Action</th>
                       </tr>
                    </thead>
                    <tbody>
                      <tr>
                         <td>1</td>
                         <td>Product1</td>
                         <td>13</td>
                         <th>
                           <span class="actions-icons">
                             <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getInventoryDetailsByType/available/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                               <i class="fa fa-eye"></i>
                             </a>
                           </span>
                         </th>
                      </tr>

                    </tbody>
                 </table>
              </div>
              <div class="table-responsive tabs_table missing_table_" style="display:none">
                 <table id="invMissingDataTable" class="table">
                    <thead>
                       <tr>
                          <th>#</th>
                          <th>Product Name</th>
                          <th>Missing Qty</th>
                          <th>Action</th>
                       </tr>
                    </thead>
                    <tbody>
                      <tr>
                         <td>1</td>
                         <td>Product1</td>
                         <td>13</td>
                         <th>
                           <span class="actions-icons">
                             <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getInventoryDetailsByType/missing/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                               <i class="fa fa-eye"></i>
                             </a>
                           </span>
                         </th>
                      </tr>

                    </tbody>
                 </table>
              </div>
              <div class="table-responsive tabs_table return_table_" style="display:none">
                 <table id="invReturnDataTable" class="table">
                    <thead>
                       <tr>
                          <th>#</th>
                          <th>Product Name</th>
                          <th>Return Qty</th>
                          <th>Action</th>
                       </tr>
                    </thead>
                    <tbody>
                      <tr>
                         <td>1</td>
                         <td>Product1</td>
                         <td>13</td>
                         <th>
                           <span class="actions-icons">
                             <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getInventoryDetailsByType/return/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                               <i class="fa fa-eye"></i>
                             </a>
                           </span>
                         </th>
                      </tr>

                    </tbody>
                 </table>
              </div>
              <div class="table-responsive tabs_table exchange_table_" style="display:none">
                 <table id="invExchangeDataTable" class="table">
                    <thead>
                       <tr>
                          <th>#</th>
                          <th>Product Name</th>
                          <th>Exchange Qty</th>
                          <th>Action</th>
                       </tr>
                    </thead>
                    <tbody>
                      <tr>
                         <td>1</td>
                         <td>Product1</td>
                         <td>13</td>
                         <th>
                           <span class="actions-icons">
                             <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getInventoryDetailsByType/exchange/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                               <i class="fa fa-eye"></i>
                             </a>
                           </span>
                         </th>
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
include(APPPATH.'views/inventory/modals/return_stock.php');
include(APPPATH.'views/inventory/modals/assign_stock_to_driver.php');
include(APPPATH.'views/inventory/modals/view_details_modal.php');
 ?>
