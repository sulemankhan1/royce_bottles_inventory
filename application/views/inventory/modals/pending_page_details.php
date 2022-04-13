<?php if ($type == 'driver'): ?>

<div class="row mt-2">
    <div class="col-sm-12">

      <h3>Pending Request Details</h3>

      <div class="row mt-3">

          <div class="col-sm-8">
            <div class="row">

              <div class="col-sm-12 mb-2">
                <h6>Driver details</h6>
              </div>

          <?php

            echo viewDetailsCol('Name','Driver');
            echo viewDetailsCol('Email','demo@gmail.com');
            echo viewDetailsCol('Contact #','11111111');
            echo viewDetailsCol('Added By','Demo');
            echo viewDetailsCol('Added At ', '03-04-2022 03:03 PM','6');

          ?>

            </div>
          </div>
          <div class="col-sm-4 text-center">
              <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="img-thumbnail user-form-img" alt="...">
          </div>

        <div class="col-sm-12">
        <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Product</th>
            <th>Quantity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Product1</td>
            <td>100</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Product1</td>
            <td>100</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Product1</td>
            <td>100</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Product1</td>
            <td>100</td>
          </tr>
        </tbody>
      </table>
        </div>
      </div>

    </div>
</div>



<?php else: ?>


  <div class="row mt-2">
      <div class="col-sm-12">

        <h3>Pending Request Details</h3>

        <div class="row mt-3">

            <div class="col-sm-12">
              <div class="row">

                <div class="col-sm-12 mb-2">
                  <h6>Customer details</h6>
                </div>

            <?php

              echo viewDetailsCol('Name','Customer');
              echo viewDetailsCol('Email','customer@gmail.com');
              echo viewDetailsCol('Contact #','11111111');
              echo viewDetailsCol('Address','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',12);

            ?>

              </div>
              <div class="row">

                <div class="col-sm-12 mb-2">
                  <h6>Driver details</h6>
                </div>

            <?php

              echo viewDetailsCol('Name','Driver');
              echo viewDetailsCol('Day','Monday');
            ?>

              </div>
            <div class="row">

              <div class="col-sm-12 mb-2">
                <h6>Call Order details</h6>
              </div>
              <?php

              echo viewDetailsCol('Added By','Demo');
              echo viewDetailsCol('Added At ', '03-04-2022 03:03 PM','6');

              ?>
            </div>


            </div>
          </div>

          <div class="col-sm-12">
          <table class="table">
          <thead>
            <tr>
              <th style="width:3%;">#</th>
              <th>Product</th>
              <th style="width:10%;">Quantity</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Product1</td>
              <td>100</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Product1</td>
              <td>100</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Product1</td>
              <td>100</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Product1</td>
              <td>100</td>
            </tr>
          </tbody>
        </table>
          </div>
        </div>

      </div>
  </div>



<?php endif; ?>
