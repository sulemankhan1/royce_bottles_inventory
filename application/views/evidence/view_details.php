<div class="row mt-5">
  <div class="col-sm-12 text-center">

      <?php

        $folder = strtolower($type);

        if (@getimagesize(base_url('uploads/'.$folder.'/'.$evidence->img)) && !empty($evidence->img))
        {
            echo '<img src="'. base_url('uploads/'.$folder.'/'.$evidence->img) .'" class="img-thumbnail user-form-img" alt="...">';
        }
        else
        {
            echo '<img src="'. base_url('assets/images/evidence_demo.png') .'" class="img-thumbnail user-form-img" alt="...">';
        }

     ?>

  </div>
  <div class="col-sm-12">

    <h5>Evidence Details</h5>

    <div class="row mt-3 mb-3">

      <?php

        echo viewDetailsCol('Shop Name',$evidence->shop_name);
        echo viewDetailsCol('Added By',$evidence->added_by_name);
        echo viewDetailsCol('Added At',date('d-m-Y,H:i a',strtotime($evidence->added_at)));

        echo viewDetailsCol('Comment',$evidence->comment,12);

      ?>

    </div>

  </div>
</div>
