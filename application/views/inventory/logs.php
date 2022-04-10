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

                          $pro_arr = [

                            ['id' => 1,'name' => 'Product1'],
                            ['id' => 2,'name' => 'Product2'],
                            ['id' => 3,'name' => 'Product3']

                          ];

                          echo getSelectField([
                            'label' => 'Product',
                            'name' => 'product_id',
                            'data' => $pro_arr
                          ]);
                          ?>
                      </div>
                      <div class="row">
                      <?php

                          $pro_arr = [

                            ['id' => 1,'name' => 'Customer1'],
                            ['id' => 2,'name' => 'Customer2'],
                            ['id' => 3,'name' => 'Customer3']

                          ];

                          echo getSelectField([
                            'label' => 'Customer',
                            'name' => 'customer_id',
                            'data' => $pro_arr
                          ]);
                          ?>
                      </div>
                      <div class="row">
                          <?php

                            $pro_arr = [

                              ['id' => 1,'name' => 'Driver1'],
                              ['id' => 2,'name' => 'Driver2'],
                              ['id' => 3,'name' => 'Driver3']

                            ];

                            echo getSelectField([
                              'label' => 'Driver',
                              'name' => 'driver_id',
                              'data' => $pro_arr
                            ]);
                          ?>
                      </div>
                      <div class="row">
                          <?php
                          $pro_arr = [

                            ['id' => 1,'name' => 'Sold'],
                            ['id' => 2,'name' => 'Assigned'],
                            ['id' => 3,'name' => 'Return'],
                            ['id' => 3,'name' => 'Removed']

                          ];
                          echo getSelectField([
                            'label' => 'Type',
                            'name' => 'type',
                            'data' => $pro_arr
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
                        <div class="col-sm-3">

                          <a href="<?= site_url('view_logs') ?>" class="btn btn-sm btn-primary">View Logs</a>
                        </div>
                        <?php

                           getSubmitBtn('View Logs');

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
