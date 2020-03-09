<!-- Modal -->
<div class="modal fade" id="add_task_wrapper_model" tabindex="-1" role="dialog" aria-labelledby="add_task_wrapper_model" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add new task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body" id="add_task_wrapper">
        
        <main>
          <div class="container">
            <div class="row mt-3">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    Add your new task
                  </div>
                  <div class="card-body">
                    <form action="" method="POST" novalidate="novalidate" autocomplete="off" id="form_add_new_task">
                      <input type="hidden" id="add_token" name="add_token" value="<?= csrf_token("add_token"); ?>">
                      <input type="hidden" id="type_add_new_task" name="type_add_new_task" value="type_add_new_task">

                      <div class="form-group">
                        <label for="title"><span class="text-danger">*</span> Title:</label>
                        <input value="" type="text" id="title" name="title" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="type"><span class="text-danger">*</span> Type:</label>
                        <select id="type" name="type" class="form-control">
                          <option value="0">Choose...</option>
                          <option value="Task">Task</option>
                          <option value="Feature">Feature</option>
                          <option value="Bug">Bug</option>
                        </select>
                      </div>


                      <div class="form-group">
                        <label for="article"><span class="text-danger">*</span> Article:</label>
                        <textarea class="form-control" id="article" name="article" id="article" rows="7"></textarea>
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
        <button type="button" id="close_add_new_task" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="add_new_task" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
