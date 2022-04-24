<div class="row mt-5">
  <div class="col-sm-12 text-center">

      <?php

        $folder = strtolower($type);

        if (@getimagesize(base_url('uploads/'.$folder.'/'.$customer->img)) && !empty($customer->img))
        {
            echo '<img src="'. base_url('uploads/'.$folder.'/'.$customer->img) .'" class="img-thumbnail user-form-img" alt="...">';
        }
        else
        {
            echo '<img src="'. base_url('assets/images/avatars/01.png') .'" class="img-thumbnail user-form-img" alt="...">';
        }

       ?>
  </div>
  <div class="col-sm-12">

    <h5>Customer Details</h5>

    <div class="row mt-3 mb-3">

      <?php

        echo viewDetailsCol('Customer Name',$customer->name);
        echo viewDetailsCol('Shop Name',$customer->shop_name);
        echo viewDetailsCol('Shop Acronym',$customer->shop_acronym);
        echo viewDetailsCol('Shop ID',$customer->shop_id);
        echo viewDetailsCol('Primary Contact',$customer->primary_contact);
        echo viewDetailsCol('Secondary Contact',$customer->secondary_contact);
        echo viewDetailsCol('Email Address For E-Receipt',$customer->e_receipt_email);
        echo viewDetailsCol('Email Address For SOA',$customer->soa_email);
        echo viewDetailsCol('Category',$customer->cat_type == 'Cash'?'<span class="badge rounded-pill bg-success">Cash</span>':'<span class="badge rounded-pill bg-warning">Credit</span>');
        echo viewDetailsCol('Salesperson',$salesperson->name);
        echo viewDetailsCol('Driver',$driver->name);
        echo viewDetailsCol('Days',$customer->day);

        echo viewDetailsCol('Shop Address',$customer->address,12);
        echo viewDetailsCol('Remarks',$customer->remarks, 12);

      ?>

    </div>

  </div>
</div>
