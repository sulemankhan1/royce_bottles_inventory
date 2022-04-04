<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0" style="margin-top:20px!important;">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title"><?= $page_head ?></h4>
               </div>
            </div>
            <div class="card-body">
              <form class="row g-3 needs-validation" novalidate>
                <div class="row mt-4">

                    <div class="col-sm-12">

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

                                          <div class="col-sm-1">
                                            <div class="form-check form-switch form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="switch1" />
                                                <label class="form-check-label pl-2" for="switch1"></label>
                                            </div>
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

                                          <div class="col-sm-1">
                                            <div class="form-check form-switch form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="switch1" />
                                                <label class="form-check-label pl-2" for="switch1"></label>
                                            </div>
                                          </div>

                                        </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                    </div>

                </div>

               </form>
            </div>
         </div>
      </div>
   </div>
</div>
