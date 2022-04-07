
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0" style="margin-top:20px!important;">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Inventory','url' => 'stock_history'],
          ['label'=>'Stock History']
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
                           <th>Product Name</th>
                           <th>Qty</th>
                           <th>Type</th>
                           <th>Added By</th>
                           <th>Added At</th>
                        </tr>
                     </thead>
                     <tbody>
                       <tr>
                          <td>1</td>
                          <td>Product1</td>
                          <td>10</td>
                          <td>
                              <span class="badge rounded-pill bg-success">Add</span>
                          </td>
                          <td>Demo</td>
                          <td>03-04-2021,5:10 PM</td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>Product1</td>
                          <td>10</td>
                          <td>
                              <span class="badge rounded-pill bg-danger">Remove</span>
                          </td>
                          <td>Demo</td>
                          <td>03-04-2021,5:10 PM</td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>Product1</td>
                          <td>10</td>
                          <td>
                              <span class="badge rounded-pill bg-success">Add</span>
                          </td>
                          <td>Demo</td>
                          <td>03-04-2021,5:10 PM</td>
                       </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
