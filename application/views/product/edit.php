<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Products','url' => 'products'],
          ['label'=>'Edit Product']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h3 class="card-title"><?= $page_head ?></h3>
               </div>
            </div>
            <div class="card-body">
              <?= getHiddenField('getCategoryPrice',base_url('AjaxController/getCategoryPrice')); ?>
              <form class="row g-3 needs-validation" novalidate action="<?= site_url('save_product') ?>" method="post" enctype="multipart/form-data">
                <div class="row mt-4">

                    <div class="col-sm-2">


                        <?php

                          //check image is exist in folder or not
                          if (@getimagesize(base_url('uploads/product/'.$product->img)) && !empty($product->img))
                          {
                              echo getImgField([
                                'img_url' => base_url('uploads/product/'.$product->img)
                              ]);
                          }
                          else
                          {
                              echo getImgField();
                          }

                         ?>


                    </div>
                    <div class="col-sm-6 form-col-padding">
                      <div class="row">

                        <?php

                        echo getHiddenField('ID',$product->id);
                        echo getHiddenField('old_img',$product->img);

                        echo getInputField([
                          'label' => 'Product Name',
                          'name' => 'name',
                          'column' => 'sm-12',
                          'value' => $product->name
                        ]);
                        echo getInputField([
                          'label' => 'Product Code',
                          'name' => 'product_code',
                          'column' => 'sm-12',
                          'value' => $product->code
                        ]);
                        echo getInputField([
                          'label' => 'SKU',
                          'name' => 'sku',
                          'column' => 'sm-12',
                          'value' => $product->sku
                        ]);
                        echo getSelectField([
                          'label' => 'Product Category',
                          'name' => 'cat_id',
                          'column' => 'sm-12',
                          'data' => $categories,
                          'selected' => $product->cat_id
                        ]);
                        echo getInputField([
                          'label' => 'Price',
                          'name' => 'price',
                          'type' => 'number',
                          'column' => 'sm-12',
                          'attr' => 'readonly',
                          'value' => $product->price
                        ]);
                        echo getTextareaField([
                          'label' => 'Description',
                          'name' => 'description',
                          'column' => 'sm-12',
                          'required' => false,
                          'value' => $product->description
                        ]);

                            echo getSubmitBtn('Update Product');

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
