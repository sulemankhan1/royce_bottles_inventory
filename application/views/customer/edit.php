<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0" style="margin-top:20px!important;">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Customers','url' => 'customers'],
          ['label'=>'Edit Customer ']
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
                    <div class="col-sm-9">
                      <div class="row">

                        <?php

                          echo getInputField([
                              'label' => 'Customer Name',
                              'name' => 'name'
                            ]);
                          echo getInputField([
                              'label' => 'Shop Name',
                              'name' => 'shop_name'
                            ]);
                          echo getInputField([
                              'label' => 'Shop Acronym',
                              'name' => 'shop_acronym'
                            ]);
                          echo getInputField([
                              'label' => 'Shop ID',
                              'name' => 'shop_id'
                            ]);
                          echo getInputField([
                              'label' => 'Contact #',
                              'name' => 'contact_no',
                              'type' => 'number'
                            ]);
                          echo getInputField([
                              'label' => 'Email Address For E-Receipt',
                              'name' => 'email',
                              'type' => 'email'
                            ]);
                          echo getInputField([
                              'label' => 'Email Address For SOA',
                              'name' => 'soa_email',
                              'type' => 'email'
                            ]);

                          echo getSelectField([
                            'label' => 'Category',
                            'name' => 'cat_id'
                          ]);

                          echo getSelectField([
                            'label' => 'Salesperson',
                            'name' => 'salesperson_id'
                          ]);

                          echo getSelectField([
                            'label' => 'Driver',
                            'name' => 'driver_id'
                          ]);

                          echo getSelectField([
                            'label' => 'Days',
                            'name' => 'day'
                          ]);

                          ?>
                      </div>
                      <div class="row">
                        <?php

                          echo getTextareaField([
                            'label' => 'Shop Address',
                            'name' => 'address'
                          ]);
                          echo getTextareaField([
                            'label' => 'Remarks',
                            'name' => 'remarks'
                          ]);

                          echo getSubmitBtn('Update Customer');

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
