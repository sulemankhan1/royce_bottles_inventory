<div class="row mt-5">
  <?php if ($type != 'Rights'): ?>
    <div class="col-sm-12 text-center">
        <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="img-thumbnail user-form-img" alt="...">
    </div>
    <div class="col-sm-12">

      <h5>Basic Information</h5>

      <div class="row mt-3 mb-3">

        <?php

          if($type == 'Admin')
          {

            echo viewDetailsCol('Name','Demo');
            echo viewDetailsCol('Email','Demo@gmail.com');
            echo viewDetailsCol('Username','Demo123');
            echo viewDetailsCol('Contact #','11111');
            echo viewDetailsCol('Status','<span class="badge rounded-pill bg-success">Active</span>');

          }
          else if($type == 'Driver' || $type == 'Other_user' || $type == 'Production')
          {

            echo viewDetailsCol('Name','Demo');
            echo viewDetailsCol('Email','Demo@gmail.com');
            echo viewDetailsCol('Username','Demo123');
            echo viewDetailsCol('Contact #','11111');
            echo viewDetailsCol('License #','11111');
            echo viewDetailsCol('FIN #','222');
            echo viewDetailsCol('Car Plate','xyz-122');
            echo viewDetailsCol('Status','<span class="badge rounded-pill bg-success">Active</span>');

          }

        ?>

      </div>

      <h5>Additinal Information</h5>

      <div class="row mt-3">

        <?php

          if($type == 'Admin' || $type == 'Driver' || $type == 'Other_user' || $type == 'Production')
          {

            echo viewDetailsCol('Date Of Birth','15-12-2001');
            echo viewDetailsCol('Country','country');
            echo viewDetailsCol('City','city');
            echo viewDetailsCol('Zip code','111233');
            echo viewDetailsCol('Residential Address','address',12);

          }

        ?>

      </div>

    </div>
  <?php else: ?>
    <div class="col-sm-12">

      <div class="row mb-4">
        <div class="col-sm-12">
          <h5>Rights Details</h5>
        </div>
      </div>
      <div class="accordion" id="accordionExample">
          <div class="accordion-item">
              <h4 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Categories
                  </button>
              </h4>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">

                    <div class="row">

                      <div class="col-sm-11">

                        <p><i class="fa-solid fa-star"></i> Can view categories</p>

                      </div>

                      <div class="col-sm-1 text-center">
                        <i class="fa-regular fa-circle-check" style="color:green!important;"></i>
                      </div>

                    </div>

                  </div>
              </div>
          </div>
          <div class="accordion-item">
              <h4 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Products
                  </button>
              </h4>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="row">

                      <div class="col-sm-11">

                        <p><i class="fa-solid fa-star"></i> Can view products</p>

                      </div>

                      <div class="col-sm-1 text-center">
                          <i class="fa-regular fa-circle-xmark" style="color:red!important;"></i>
                      </div>

                    </div>
                  </div>
              </div>
          </div>
      </div>

    </div>
  <?php endif; ?>
</div>
