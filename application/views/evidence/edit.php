<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Evidence','url' => 'evidence'],
          ['label'=>'Update Evidence ']
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

                         <div class="row">
                           <div class="col-sm-12">
                             <img src="<?= base_url('assets/images/evidence_demo.png') ?>" class="img-thumbnail user-form-img" alt="..." style="border-radius:0px!important;">
                             <input type="file" class="choose_img" name="img" accept="image/*" capture style="display:none;">
                           </div>
                           <div class="col-sm-12 mt-4" style="margin-left:5px;">
                             <button type="button" class="btn btn-sm btn-outline-primary select_img_">Upload Photo</button>
                           </div>
                         </div>


                    </div>
                </div>
                      <div class="row mt-3">

                        <?php

                          echo getSelectField([
                            'label' => 'Shop',
                            'name' => 'shop_id'
                          ]);
                          ?>

                      </div>
                      <div class="row mt-1">

                          <?php
                            echo getTextareaField([
                              'label' => 'Comment',
                              'name' => 'comment'
                            ]);

                            echo getSubmitBtn('Update Evidence');

                          ?>
                      </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
