<!-- Modal -->
<div class="modal fade" id="edit_task_wrapper_model" tabindex="-1" role="dialog" aria-labelledby="edit_task_wrapper_model" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body" id="edit_task_wrapper">
        
        <main>
          <div class="container">
            <div class="row mt-3">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    Edit your task
                  </div>
                  <div class="card-body">
                    <form action="" method="POST" novalidate="novalidate" autocomplete="off" id="form_edit_task">
                      <input type="hidden" id="edit_token" name="edit_token" value="<?= csrf_token("edit_token"); ?>">
                      <input type="hidden" id="edit_id" name="edit_id" value="">
                      <input type="hidden" id="type_edit_task" name="type_edit_task" value="type_edit_task">

                      <div class="form-group">
                        <label for="edit_title"><span class="text-danger">*</span> Title:</label>
                        <input value="" type="text" id="edit_title" name="edit_title" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="edit_type"><span class="text-danger">*</span> Type:</label>
                        <select id="edit_type" name="edit_type" class="form-control">
                          <option value="-1">Choose...</option>
                          <option value="Task">Task</option>
                          <option value="Feature">Feature</option>
                          <option value="Bug">Bug</option>
                        </select>
                      </div>

                        <div class="form-group">
                          <label for="edit_status"><span class="text-danger">*</span> Status:</label>
                          <select id="edit_status" name="edit_status" class="form-control">
                            <option value="-1">Choose...</option>
                            <option value="1">Done</option>
                            <option value="0">Pending</option>
                          </select>
                        </div>

                      <div class="form-group">
                        <label for="edit_article"><span class="text-danger">*</span> Article:</label>
                        <textarea class="form-control" id="edit_article" name="edit_article" id="edit_article" rows="7"></textarea>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>


      </div>
      <div class="modal-footer">
        <button type="button" id="close_edit_task" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="edit_task" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
