
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Inventory','url' => 'logs'],
          ['label'=>'Logs','url' => 'logs'],
          ['label'=>'View Logs']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">

                 <h4 class="card-title"><?= $page_head ?></h4>
               </div>

              <a href="javascript:void(0)" class="btn btn-sm btn-primary" id="print_log_details" data-url="<?= base_url('AjaxController/printLogDetails')?>">Print</a>

            </div>
            <div class="card-body" id="logs_data">
              <div class="row">
                <div class="col-sm-12 mb-4">
                  <table width="30%" id="log-details-filter">
                    <tr>
                      <td>Product:</td>
                      <th>All</th>
                    </tr>
                    <tr>
                      <td>Customer:</td>
                      <th>All</th>
                    </tr>
                    <tr>
                      <td>Driver:</td>
                      <th>All</th>
                    </tr>
                    <tr>
                      <td>Type:</td>
                      <th>All</th>
                    </tr>
                    <tr>
                      <td>Date From:</td>
                      <th>03-10-2022</th>
                    </tr>
                    <tr>
                      <td>Date To:</td>
                      <th>03-20-2022</th>
                    </tr>
                  </table>
                </div>
              </div>
               <div class="table-responsive">
                  <table class="table">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Product Name</th>
                           <th>Qty</th>
                           <th>Type</th>
                           <th>Customer</th>
                           <th>Driver</th>
                           <th>User</th>
                           <th>Date</th>
                           <th>Time</th>
                        </tr>
                     </thead>
                     <tbody>
                       <tr>
                          <td>1</td>
                          <td>
                            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="table-img-design" alt="">
                            <span class="table-img-txt-design">
                              Product1
                            </span>
                          </td>
                          <td>10</td>
                          <td>Assigned</td>
                          <td>-</td>
                          <td>Driver1</td>
                          <td>User1</td>
                          <td>03-04-2021</td>
                          <td>5:10 PM</td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>
                            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="table-img-design" alt="">
                            <span class="table-img-txt-design">
                              Product1
                            </span>
                          </td>
                          <td>10</td>
                          <td>Removed</td>
                          <td>-</td>
                          <td>-</td>
                          <td>User1</td>
                          <td>03-04-2021</td>
                          <td>5:10 PM</td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>
                            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="table-img-design" alt="">
                            <span class="table-img-txt-design">
                              Product1
                            </span>
                          </td>
                          <td>10</td>
                          <td>Sold</td>
                          <td>Customer1</td>
                          <td>Driver1</td>
                          <td>User1</td>
                          <td>03-04-2021</td>
                          <td>5:10 PM</td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>
                            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="table-img-design" alt="">
                            <span class="table-img-txt-design">
                              Product1
                            </span>
                          </td>
                          <td>10</td>
                          <td>Sold</td>
                          <td>Customer1</td>
                          <td>Driver1</td>
                          <td>User1</td>
                          <td>03-04-2021</td>
                          <td>5:10 PM</td>
                       </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
