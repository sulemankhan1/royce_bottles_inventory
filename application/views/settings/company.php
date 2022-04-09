<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0" style="margin-top:20px!important;">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Setting','url' => 'company_setting'],
          ['label'=>'Company Setting']
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

                    <div class="col-sm-3">

                          <?php

                            echo getImgField();

                           ?>

                    </div>
                </div>
                      <div class="row mt-3">

                        <?php

                          echo getInputField([
                            'label' => 'Title',
                            'name' => 'title'
                          ]);

                          ?>

                      </div>
                      <div class="row">

                        <?php

                          echo getTextareaField([
                            'label' => 'Address',
                            'name' => 'address'
                          ]);

                          ?>

                      </div>
                      <div class="row">
                        <?php

                          echo getTextareaField([
                            'label' => 'Terms & Condition',
                            'name' => 'address'
                          ]);

                        ?>
                      </div>
                      <div class="row mt-1">

                          <?php

                            echo getSubmitBtn('Submit');

                          ?>
                      </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
