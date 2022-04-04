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

                          echo getInputField('Name','text','name');
                          echo getInputField('Email','email','email');
                          echo getInputField('Username','text','username');
                          echo getInputField('Password','password','password');
                          echo getInputField('Contact #','number','contact_no');
                          echo getInputField('License #','number','license_no');
                          echo getInputField('FIN #','number','fin_no');
                          echo getInputField('Car Plate','text','car_plate');
                          echo getInputField('Date Of Birth','date','dob');
                          echo getInputField('Country','text','country');
                          echo getInputField('City','text','city');
                          echo getInputField('Zip code','number','zip_code');
                          echo getTextareaField('Residential Address','address');

                          echo getSubmitBtn('Add Production');

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
