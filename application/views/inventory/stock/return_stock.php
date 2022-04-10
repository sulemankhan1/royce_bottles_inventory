<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Inventory','url' => 'return_stock'],
          ['label'=>'Return Stock']
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
                      <div class="row mb-3">

                        <?php

                          $pro_arr = [

                            ['id' => 1,'name' => 'Driver1'],
                            ['id' => 2,'name' => 'Driver2'],
                            ['id' => 3,'name' => 'Driver3']

                          ];

                          echo getHiddenField('return_stock_url',base_url('AjaxController/getReturnStockProductsByDriverId'));

                          echo getSelectField([
                            'label' => 'Driver',
                            'name' => 'driver_id',
                            'id' => 'return_stock_driver',
                            'column' => 'sm-4',
                            'data' => $pro_arr
                          ]);
                        ?>
                      </div>
                      <div id="show_driver_products_"></div>

                      <div class="row mt-1 mb-1">
                        <?php

                          echo getSubmitBtn('Return Stock');

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
