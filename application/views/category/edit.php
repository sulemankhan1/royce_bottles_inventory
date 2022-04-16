<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Categories','url' => 'categories'],
          ['label'=>'Add Category']
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

                        echo getInputField([
                          'label' => 'Category',
                          'name' => 'name'
                        ]);

                        ?>
                        </div>
                        <div class="row">
                          <?php

                        echo getInputField([
                          'label' => 'Price',
                          'name' => 'price',
                          'type' => 'number'
                        ]);

                            echo getSubmitBtn('Update Category');

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
