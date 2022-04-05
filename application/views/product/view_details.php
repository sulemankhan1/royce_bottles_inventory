<div class="row mt-5">
  <div class="col-sm-12 text-center">
      <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="img-thumbnail user-form-img" alt="...">
  </div>
  <div class="col-sm-12">

    <h5>Product Details</h5>

    <div class="row mt-3 mb-3">

      <?php

      echo viewDetailsCol('Product Name','Product1');
      echo viewDetailsCol('Product Code','P1223');
      echo viewDetailsCol('sku','sku-123');
      echo viewDetailsCol('Description','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' , 12);

      ?>
    </div>

  </div>
</div>
