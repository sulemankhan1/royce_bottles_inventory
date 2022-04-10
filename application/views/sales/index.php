
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Sales']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">

                 <h4 class="card-title"><?= $page_head ?></h4>
               </div>

               <a href="<?= site_url('add_sale') ?>" class="btn btn-sm btn-primary">Add Sale</a>

            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="myDataTable" class="table">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Invoice #</th>
                           <th>Customer</th>
                           <th>Category</th>
                           <th>Salesperson</th>
                           <th>Total Product</th>
                           <th>Total Qty</th>
                           <th>Total Price</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                       <tr>
                          <td>1</td>
                          <td>Category</td>
                          <td>Customer</td>
                          <td>Category</td>
                          <td>Salesperson</td>
                          <td>10</td>
                          <td>20</td>
                          <td>1000</td>
                          <td>
                              <span class="badge rounded-pill bg-success">Paid</span>
                          </td>
                          <td>
                            <span class="actions-icons">
                              <a href="javascript:void(0)" class="action-icons view_sale_details_" data-url="<?= site_url('AjaxController/showSalesDetails/1/details') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>Category</td>
                          <td>Customer</td>
                          <td>Category</td>
                          <td>Salesperson</td>
                          <td>10</td>
                          <td>20</td>
                          <td>1000</td>
                          <td>
                              <span class="badge rounded-pill bg-secondary">Pending</span>
                          </td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_sale/1') ?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons view_sale_details_" data-url="<?= site_url('AjaxController/showSalesDetails/1/details') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>Category</td>
                          <td>Customer</td>
                          <td>Category</td>
                          <td>Salesperson</td>
                          <td>10</td>
                          <td>20</td>
                          <td>1000</td>
                          <td>
                              <span class="badge rounded-pill bg-danger">Unpaid</span>
                          </td>
                          <td>
                            <span class="actions-icons">
                              <a href="javascript:void(0)" class="action-icons view_sale_details_" data-url="<?= site_url('AjaxController/showSalesDetails/1/details') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>Category</td>
                          <td>Customer</td>
                          <td>Category</td>
                          <td>Salesperson</td>
                          <td>10</td>
                          <td>20</td>
                          <td>1000</td>
                          <td>
                              <span class="badge rounded-pill bg-warning">Credit</span>
                          </td>
                          <td>
                            <span class="actions-icons">
                              <a href="javascript:void(0)" class="action-icons view_sale_details_" data-url="<?= site_url('AjaxController/showSalesDetails/1/details') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
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
