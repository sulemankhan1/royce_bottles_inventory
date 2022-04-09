
<div class="modal fade" id="AddTemplateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?= site_url('email_setting') ?>" method="post" class="row g-3 needs-validation" novalidate>
          <div class="modal-body">

              <div class="container">

                <h3 id="template_action_head">Add Template</h3>

                <div class="row mt-3">

                  <?php

                    echo getInputField([
                      'label' => 'Title',
                      'name' => 'title',
                      'column' => 'sm-12'
                    ]);
                    echo getInputField([
                      'label' => 'Subject',
                      'name' => 'subject',
                      'column' => 'sm-12'
                    ]);
                    echo getTextareaField([
                      'label' => 'Template',
                      'name' => 'template',
                      'column' => 'sm-12'
                    ]);

                  ?>

                </div>
              </div>

          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-sm btn-primary" style="text-transform:capitalize!important">Submit</button>
              <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
  </div>
</div>
