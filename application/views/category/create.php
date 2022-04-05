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

                    <div class="col-sm-12">
                      <div class="row">

                        <?php

                          echo getInputField('Category','text','name');

                          if (isset($edit_id)) {

                            echo getSubmitBtn('Update Category');
                          }
                          else
                          {

                            echo getSubmitBtn('Add Category');
                          }

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
