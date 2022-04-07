<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0" style="margin-top:20px!important;">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Inventory','url' => 'add_stock'],
          ['label'=>'Add Stock']
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

                          echo getHiddenField('redirect_to','add_stock');

                          echo getSelectField([
                            'label' => 'Product',
                            'name' => 'product_id',
                            'data' => $pro_arr
                          ]);

                          echo getInputField([
                            'label' => 'Qty',
                            'type' => 'number',
                            'name' => 'qty',
                            'column' => 'sm-3'
                          ]);

                          echo getSubmitBtn('Add Stock');

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
