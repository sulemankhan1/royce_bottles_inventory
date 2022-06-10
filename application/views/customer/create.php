<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Customers','url' => 'customers'],
          ['label'=>'Add Customer ']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h3 class="card-title"><?= $page_head ?></h3>
               </div>
            </div>
            <div class="card-body">
              <form class="row g-3" action="<?= site_url('save_customer') ?>" method="post" id="myForm" data-parsley-validate enctype="multipart/form-data">
                <div class="row mt-4">

                    <div class="col-sm-2">


                        <?php

                          echo getImgField();

                         ?>


                    </div>
                    <div class="col-sm-10 form-col-padding">
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
                              'label' => 'Primary Contact',
                              'name' => 'primary_contact'
                            ]);
                          echo getInputField([
                              'label' => 'Secondary Contact',
                              'name' => 'secondary_contact',
                              'required' => false
                            ]);
                          echo getInputField([
                              'label' => 'Email Address For E-Receipt',
                              'name' => 'email',
                              'type' => 'email',
                              'required' => false
                            ]);
                          echo getInputField([
                              'label' => 'Email Address For SOA',
                              'name' => 'soa_email',
                              'type' => 'email',
                              'required' => false
                            ]);

                          echo getSelectField([
                            'label' => 'Payment Type',
                            'name' => 'cat_type',
                            'static' => true,
                            'data' => $cat_types
                          ]);

                          echo getSelectField([
                            'label' => 'Salesperson',
                            'name' => 'salesperson_id',
                            'data' => $salespersons
                          ]);

                          echo getSelectField([
                            'label' => 'Assign Driver To This Customer',
                            'name' => 'driver_id',
                            'data' => $drivers
                          ]);

                          echo getSelectField([
                            'label' => 'Day',
                            'name' => 'day',
                            'static' => true,
                            'data' => $days
                          ]);

                          ?>
                      </div>
                      <div class="row">
                        <?php

                          echo getTextareaField([
                            'label' => 'Shop Address',
                            'name' => 'address',
                            'required' => false
                          ]);
                          echo getTextareaField([
                            'label' => 'Remarks',
                            'name' => 'remarks',
                            'required' => false
                          ]);

                          echo getSubmitBtn('Add Customer');

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
