<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0" style="margin-top:20px!important;">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Edit Profile']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title"><?= $page_head ?></h4>
               </div>
               <a href="<?= site_url('view_profile/1') ?>" class="btn btn-sm btn-primary">View Profile</a>
            </div>
            <div class="card-body">
              <form class="row g-3 needs-validation" novalidate>
                <div class="row mt-4">

                    <div class="col-sm-3">


                        <?php

                          echo getImgField('Upload Photo', base_url('assets/images/avatars/01.png'));

                         ?>


                    </div>
                    <div class="col-sm-9">
                      <div class="row">

                      <?php

                      echo getInputField([
                        'label' => 'Name',
                        'name' => 'name'
                      ]);
                      echo getInputField([
                        'label' => 'Email',
                        'name' => 'email',
                        'type' => 'email'
                      ]);
                      echo getInputField([
                        'label' => 'Username',
                        'name' => 'username'
                      ]);
                      echo getInputField([
                        'label' => 'Password',
                        'name' => 'password',
                        'type' => 'password'
                      ]);
                      echo getInputField([
                        'label' => 'Contact #',
                        'name' => 'contact_no',
                        'type' => 'number'
                      ]);
                      echo getInputField([
                        'label' => 'Date Of Birth',
                        'name' => 'dob',
                        'type' => 'date'
                      ]);
                      echo getInputField([
                        'label' => 'Country',
                        'name' => 'country'
                      ]);
                      echo getInputField([
                        'label' => 'City',
                        'name' => 'city'
                      ]);
                      echo getInputField([
                        'label' => 'Zip Code',
                        'name' => 'zip_code'
                      ]);
                      ?>
                    </div>
                    <div class="row">
                    <?php
                        echo getTextareaField([
                          'label' => 'Residential Address',
                          'name' => 'address'
                        ]);

                          echo getSubmitBtn('Update Profile');

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
