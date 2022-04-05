<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0" style="margin-top:20px!important;">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title"><?= $page_head ?></h4>
               </div>
            </div>
            <div class="card-body">
               <div class="row mt-4 mb-4">

                    <div class="col-sm-3">

                        <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="img-thumbnail user-form-img" alt="...">'.

                    </div>
                </div>
                <div class="row">

                  <div class="col-sm-12">

                    <h5>Basic Information</h5>

                    <div class="row mt-3 mb-3">

                      <?php

                          echo viewDetailsCol('Name','Demo');
                          echo viewDetailsCol('Email','Demo@gmail.com');
                          echo viewDetailsCol('Username','Demo123');
                          echo viewDetailsCol('Contact #','11111');
                          echo viewDetailsCol('Status','<span class="badge rounded-pill bg-success">Active</span>');

                      ?>

                    </div>

                    <h5>Additinal Information</h5>

                    <div class="row mt-3">

                      <?php


                          echo viewDetailsCol('Date Of Birth','15-12-2001');
                          echo viewDetailsCol('Country','country');
                          echo viewDetailsCol('City','city');
                          echo viewDetailsCol('Zip code','111233');
                          echo viewDetailsCol('Residential Address','address',12);


                      ?>

                    </div>

                  </div>

                </div>
            </div>
         </div>
      </div>
   </div>
</div>
