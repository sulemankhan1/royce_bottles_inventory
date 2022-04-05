<div class="row mt-5">
  <div class="col-sm-12 text-center">
      <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="img-thumbnail user-form-img" alt="...">
  </div>
  <div class="col-sm-12">

    <h5>Customer Details</h5>

    <div class="row mt-3 mb-3">

      <?php

        echo viewDetailsCol('Customer Name','John');
        echo viewDetailsCol('Shop Name','Shop1');
        echo viewDetailsCol('Shop Acronym','text');
        echo viewDetailsCol('Shop ID','Shop-12324');
        echo viewDetailsCol('Contact #','1123');
        echo viewDetailsCol('Email Address For E-Receipt','email@gmaill.com');
        echo viewDetailsCol('Email Address For SOA','SOA@gmail.com');
        echo viewDetailsCol('Category','<span class="badge rounded-pill bg-success">Cash</span>');
        echo viewDetailsCol('Salesperson','salesperson1');
        echo viewDetailsCol('Driver','driver1');
        echo viewDetailsCol('Days','Monday');

        echo viewDetailsCol('Shop Address','address' ,12);
        echo viewDetailsCol('Remarks','remarks' , 12);

      ?>

    </div>

  </div>
</div>
