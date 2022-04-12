<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Products','url' => 'products'],
          ['label'=>'Add Product']
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

                    <div class="col-sm-2">


                        <?php

                          echo getImgField();

                         ?>


                    </div>
                    <div class="col-sm-6 form-col-padding">
                      <div class="row">

                        <?php

                        echo getInputField([
                          'label' => 'Product Name',
                          'name' => 'name',
                          'column' => 'sm-12'
                        ]);
                        echo getInputField([
                          'label' => 'Product Code',
                          'name' => 'product_code',
                          'column' => 'sm-12'
                        ]);
                        echo getInputField([
                          'label' => 'SKU',
                          'name' => 'sku',
                          'column' => 'sm-12'
                        ]);
                        echo getSelectField([
                          'label' => 'Category',
                          'name' => 'cat_id',
                          'column' => 'sm-12'
                        ]);
                        echo getTextareaField([
                          'label' => 'Description',
                          'name' => 'description',
                          'column' => 'sm-12'
                        ]);

                            echo getSubmitBtn('Add Product');

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
