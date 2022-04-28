<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
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
              <form class="row g-3 needs-validation" novalidate action="<?= site_url('save_customer') ?>" method="post" enctype="multipart/form-data">
                <div class="row mt-4">

                    <div class="col-sm-2">


                        <?php

                          //check image is exist in folder or not
                          if (@getimagesize(base_url('uploads/customer/'.$customer->img)) && !empty($customer->img))
                          {
                              echo getImgField([
                                'img_url' => base_url('uploads/customer/'.$customer->img)
                              ]);
                          }
                          else
                          {
                              echo getImgField();
                          }

                         ?>


                    </div>
                    <div class="col-sm-10 form-col-padding">
                      <div class="row">

                        <?php

                          echo getHiddenField('ID',$customer->id);
                          echo getHiddenField('old_img',$customer->img);
                          echo getHiddenField('old_email',$customer->e_receipt_email);
                          echo getHiddenField('old_soa_email',$customer->soa_email);

                          echo getInputField([
                              'label' => 'Customer Name',
                              'name' => 'name',
                              'value' => $customer->name
                            ]);
                          echo getInputField([
                              'label' => 'Shop Name',
                              'name' => 'shop_name',
                              'value' => $customer->shop_name
                            ]);
                          echo getInputField([
                              'label' => 'Shop Acronym',
                              'name' => 'shop_acronym',
                              'value' => $customer->shop_acronym
                            ]);
                          echo getInputField([
                              'label' => 'Shop ID',
                              'name' => 'shop_id',
                              'value' => $customer->shop_id
                            ]);
                          echo getInputField([
                              'label' => 'Primary Contact',
                              'name' => 'primary_contact',
                              'value' => $customer->primary_contact
                            ]);
                          echo getInputField([
                              'label' => 'Secondary Contact',
                              'name' => 'secondary_contact',
                              'value' => $customer->secondary_contact,
                              'required' => false
                            ]);
                          echo getInputField([
                              'label' => 'Email Address For E-Receipt',
                              'name' => 'email',
                              'type' => 'email',
                              'value' => $customer->e_receipt_email
                            ]);
                          echo getInputField([
                              'label' => 'Email Address For SOA',
                              'name' => 'soa_email',
                              'type' => 'email',
                              'value' => $customer->soa_email
                            ]);

                          echo getSelectField([
                            'label' => 'Payment Type',
                            'name' => 'cat_type',
                            'static' => true,
                            'data' => $cat_types,
                            'selected' => $customer->cat_type
                          ]);

                          echo getSelectField([
                            'label' => 'Salesperson',
                            'name' => 'salesperson_id',
                            'data' => $salespersons,
                            'selected' => $customer->salesperson_id
                          ]);

                          echo getSelectField([
                            'label' => 'Assign Driver To This Customer',
                            'name' => 'driver_id',
                            'data' => $drivers,
                            'selected' => $customer->driver_id
                          ]);

                          echo getSelectField([
                            'label' => 'Day',
                            'name' => 'day',
                            'static' => true,
                            'data' => $days,
                            'selected' => $customer->day
                          ]);

                          ?>
                      </div>
                      <div class="row">
                        <?php

                          echo getTextareaField([
                            'label' => 'Shop Address',
                            'name' => 'address',
                            'value' => $customer->address
                          ]);
                          echo getTextareaField([
                            'label' => 'Remarks',
                            'name' => 'remarks',
                            'value' => $customer->remarks
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
