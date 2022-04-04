<div class="modal fade" id="UserViewDetailsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-body">

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="float:right!important"></button>

          <div class="container">

                <div class="row mt-5">
                  <div class="col-sm-12 text-center">
                      <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="img-thumbnail user-form-img" alt="...">
                  </div>
                  <div class="col-sm-12">

                    <h5>Basic Information</h5>

                    <div class="row mt-3 mb-3">

                      <?php

                        echo viewDetailsCol('Name','Demo');

                        echo viewDetailsCol('Email','Demo@gmail.com');

                        echo viewDetailsCol('Username','Demo123');

                        echo viewDetailsCol('Contact #','Demo@gmail.com');

                        echo viewDetailsCol('Date Of Birth','15-12-2001');

                      ?>

                    </div>

                    <h5>Additinal Information</h5>

                    <div class="row mt-3">

                      <?php

                        echo viewDetailsCol('City','City');

                        echo viewDetailsCol('Country','Country');

                        echo viewDetailsCol('Zip Code','21818');

                        echo viewDetailsCol('Address','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',12);

                      ?>

                    </div>

                  </div>
                </div>

          </div>
        </div>
    </div>
</div>
</div>
