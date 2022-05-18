<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Inventory','url' => 'logs'],
          ['label'=>'Logs']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h3 class="card-title"><?= $page_head ?></h3>
               </div>
            </div>
            <div class="card-body">
              <form class="row g-3 needs-validation" novalidate>
                <div class="row mt-4">

                    <div class="col-sm-12">
                      <div class="row">

                        <?php

                          echo getSelectField([
                            'label' => 'Product',
                            'name' => 'product_id',
                            'data' => $products
                          ]);
                          ?>
                      </div>
                      <div class="row">
                      <?php

                          echo getSelectField([
                            'label' => 'Customer',
                            'name' => 'customer_id',
                            'data' => $customers
                          ]);
                          ?>
                      </div>
                      <div class="row">
                          <?php

                            echo getSelectField([
                              'label' => 'Driver',
                              'name' => 'driver_id',
                              'data' => $drivers
                            ]);
                          ?>
                      </div>
                      <div class="row">
                          <?php
                          $type_arr = [

                            'add_stock',
                            'remove_stock',
                            'request',
                            'assign',
                            'return',
                            'add_stock',
                            'remove_stock',
                            'call_order',
                            'assign_stock_confirmed',
                            'call_order_confirmed',
                            'pending_call_order_confirmed',
                            'add_sale',
                            'edit_sale',
                            'mark_sale_done'

                          ];
                          echo getSelectField([
                            'label' => 'Type',
                            'name' => 'type',
                            'static' => true,
                            'data' => $type_arr
                          ]);
                          ?>
                      </div>
                      <div class="row">
                          <?php
                          echo getInputField([
                            'label' => 'From',
                            'type' => 'date',
                            'name' => 'from',
                            'column' => 'sm-3'
                          ]);
                          echo getInputField([
                            'label' => 'To',
                            'type' => 'date',
                            'name' => 'to',
                            'column' => 'sm-3'
                          ]);
                          ?>
                      </div>
                      <div class="row mt-3">
                        
                        <?php

                           echo getSubmitBtn('View Logs');

                        ?>


                      </div>
                    </div>

                </div>

               </form>
            </div>
         </div>
      </div>
   </div>
</div>
