<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Setting','url' => 'email_setting'],
          ['label'=>'Email Setting']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h3 class="card-title"><?= $page_head ?></h3>
               </div>
            </div>
            <div class="card-body">
                <div class="row mt-4">

                    <div class="col-sm-12">

                      <ul class="nav nav-pills" data-toggle="slider-tab" id="myTab" role="tablist">
                          <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#pills-home1" type="button" role="tab" aria-controls="home" aria-selected="true">General</button>
                          </li>
                          <li class="nav-item" role="presentation">
                              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#pills-profile1" type="button" role="tab" aria-controls="profile" aria-selected="false">Templates</button>
                          </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-home1" role="tabpanel"
                              aria-labelledby="pills-home-tab1">

                             <form class="row g-3 needs-validation" novalidate>

                                <h4 class="mt-4 mb-2">General</h4>

                                <div class="row pb-2 pt-4">

                                  <div class="col-sm-11">
                                    <span class="text-dark">Invoice should be set automatically</span>
                                  </div>
                                  <div class="col-sm-1">
                                      <div class="form-check form-check-inline">
                                         <input type="checkbox" class="form-check-input" id="customCheck5">
                                      </div>
                                  </div>

                                </div>
                                <hr>

                                <div class="row pb-2 pt-4">

                                  <div class="col-sm-8">
                                    <span class="text-dark">Recurring Email timestamp</span>
                                  </div>
                                  <div class="col-sm-4">

                                      <div class="row">

                                          <?php

                                            $pro_arr = [

                                              ['id' => 1,'name' => 'Monthly'],
                                              ['id' => 2,'name' => 'Weekly'],
                                              ['id' => 3,'name' => 'Daily']

                                            ];

                                            echo getSelectField([
                                              'name' => 'sending_type',
                                              'column' => 'sm-6',
                                              'data' => $pro_arr
                                            ]);

                                            $pro_arr = [

                                              ['id' => 1,'name' => 'Monday'],
                                              ['id' => 2,'name' => 'Tuesday'],
                                              ['id' => 3,'name' => 'Wednesday']

                                            ];

                                            echo getSelectField([
                                              'name' => 'sending_day',
                                              'column' => 'sm-6',
                                              'data' => $pro_arr
                                            ]);

                                          ?>

                                      </div>

                                  </div>

                                </div>
                                <hr>
                                <div class="row pb-2 pt-4">

                                  <div class="col-sm-10">
                                    <span class="text-dark">Invoice email template</span>
                                  </div>
                                  <div class="col-sm-2">
                                    <div class="row">
                                      <?php

                                        $pro_arr = [

                                          ['id' => 1,'name' => 'template1'],
                                          ['id' => 2,'name' => 'template2'],
                                          ['id' => 3,'name' => 'template3']

                                        ];

                                        echo getSelectField([
                                          'name' => 'invoice_template',
                                          'column' => 'sm-12',
                                          'data' => $pro_arr
                                        ]);

                                      ?>
                                    </div>
                                  </div>

                                </div>
                                <hr>
                                <div class="row pb-2 pt-4">

                                  <div class="col-sm-10">
                                    <span class="text-dark">Recurring email template</span>
                                  </div>
                                  <div class="col-sm-2">
                                    <div class="row">
                                      <?php

                                        $pro_arr = [

                                          ['id' => 1,'name' => 'template1'],
                                          ['id' => 2,'name' => 'template2'],
                                          ['id' => 3,'name' => 'template3']

                                        ];

                                        echo getSelectField([
                                          'name' => 'recurrig_template',
                                          'column' => 'sm-12',
                                          'data' => $pro_arr
                                        ]);

                                      ?>
                                    </div>
                                  </div>

                                </div>

                                <h4 class="mt-4 mb-2">Recurring Email Receipients</h4>

                                <div class="row">
                                  <div class="col-sm-12">

                                    <div class="row pt-2 pb-1 mb-2" style="background-color:#f1f1f1!important;border-radius:3px!important;padding-left:15px!important">

                                      <div class="col-sm-11">

                                        <span class="text-dark">Customer1</span>

                                      </div>
                                      <div class="col-sm-1">

                                        <div class="form-check form-check-inline">
                                           <input type="checkbox" class="form-check-input" id="customCheck5">
                                        </div>

                                      </div>

                                    </div>
                                    <div class="row pt-2 pb-1 mb-2" style="background-color:#f1f1f1!important;border-radius:3px!important;padding-left:15px!important">

                                      <div class="col-sm-11">

                                        <span class="text-dark">Customer2</span>

                                      </div>
                                      <div class="col-sm-1">

                                        <div class="form-check form-check-inline">
                                           <input type="checkbox" class="form-check-input" id="customCheck5">
                                        </div>

                                      </div>

                                    </div>
                                    <div class="row pt-2 pb-1 mb-2" style="background-color:#f1f1f1!important;border-radius:3px!important;padding-left:15px!important">

                                      <div class="col-sm-11">

                                        <span class="text-dark">Customer3</span>

                                      </div>
                                      <div class="col-sm-1">

                                        <div class="form-check form-check-inline">
                                           <input type="checkbox" class="form-check-input" id="customCheck5">
                                        </div>

                                      </div>

                                    </div>

                                  </div>
                                </div>

                                <div class="row" id="email_general_setting_save_btn" style="margin:0px!important;padding:0px!important;margin-top:20px!important;">

                                  <?php

                                    echo getSubmitBtn('Save');

                                  ?>

                                </div>

                            </form>

                          </div>
                          <div class="tab-pane fade" id="pills-profile1" role="tabpanel"
                              aria-labelledby="pills-profile-tab1">

                              <div class="row">

                                <div class="col-sm-12 mb-3">

                                     <a href="javascript:void(0)" id="add_template_" data-head="Add Template" class="btn btn-sm btn-primary" style="float:right!important">Add Template</a>

                                </div>
                                <div class="col-sm-12">

                                  <div class="table-responsive">
                                 <table id="myDataTable" class="table">
                                    <thead>
                                       <tr>
                                          <th>#</th>
                                          <th>Title</th>
                                          <th>Subject</th>
                                          <th>Template</th>
                                          <th>Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                         <td>1</td>
                                         <td>Title</td>
                                         <td>Subject</td>
                                         <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</td>
                                         <td>
                                           <span class="actions-icons">
                                             <a href="javascript:void(0)" class="action-icons edit_template_" data-head="Edit Template" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                               <i class="fa fa-pencil"></i>
                                             </a>
                                             <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Template" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                               <i class="fa-solid fa-trash"></i>
                                             </a>
                                           </span>
                                         </td>
                                      </tr>

                                      <tr>
                                         <td>1</td>
                                         <td>Title</td>
                                         <td>Subject</td>
                                         <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</td>
                                         <td>
                                           <span class="actions-icons">
                                             <a href="javascript:void(0)" class="action-icons edit_template_" data-head="Edit Template" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                               <i class="fa fa-pencil"></i>
                                             </a>
                                             <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Template" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                               <i class="fa-solid fa-trash"></i>
                                             </a>
                                           </span>
                                         </td>
                                      </tr>

                                    </tbody>
                                 </table>
                              </div>

                                </div>
                              </div>
                          </div>
                      </div>

                    </div>
                </div>

            </div>
         </div>
      </div>
   </div>
</div>



<?php
include(APPPATH.'views/modals/delete-modal.php');
include(APPPATH.'views/settings/add_template_modal.php');
?>
