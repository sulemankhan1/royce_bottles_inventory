<div class="row mt-5">
  <div class="col-sm-12 text-center">
      <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="img-thumbnail user-form-img" alt="...">
  </div>
  <div class="col-sm-12">

    <h5>Evidence Details</h5>

    <div class="row mt-3 mb-3">

      <?php

        echo viewDetailsCol('Shop Name','Shop1');
        echo viewDetailsCol('Added By','Driver');
        echo viewDetailsCol('Added At','03-03-2022,04:02 PM');

        echo viewDetailsCol('Comment','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' ,12);

      ?>

    </div>

  </div>
</div>
