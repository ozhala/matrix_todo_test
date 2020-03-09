<?php
  sess_start('matrix_todo_test');
  include_once 'forms/add_task.php';


  // pre(get_data());
?>

<!-- Add Button trigger modal -->
<div class="float-left mb-3">
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#add_task_wrapper_model">
    <i class="fas fa-plus-circle"></i> 
    Add new task
  </button>
</div>


<?php if( !empty($stats = get_statistics()) ): ?>
    <div class="form-row float-right">

      <div class="col-auto">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">Total</div>
          </div>
          <div class="form-control" id="total"><?php echo $stats["total"] ?></div>
        </div>
      </div>

      <div class="col-auto">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">Completed</div>
          </div>
          <div class="form-control" id="completed"><?php echo $stats["completed"] ?></div>
        </div>
      </div>

      <div class="col-auto">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">Remaining</div>
          </div>
          <div class="form-control" id="remaining"><?php echo $stats["remaining"] ?></div>
        </div>
      </div>

    </div>
<?php endif; ?>

          
<table class="table">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Task Name</th>
      <th scope="col">Type</th>
      <th scope="col">Status</th>
      <th scope="col">Updated at</th>
      <th scope="col">Created at</th>

    </tr>
  </thead>
  <tbody>


  <?php if( count(get_data()) > 0 ): ?>
      <?php foreach(get_data() as $val): ?>
        <tr>
            <th scope="row"><?= $val['id']; ?></th>
            <td><?= $val['title']; ?></td>
            <td><?= $val['type']; ?></td>
            <td><?= change_status($val['status']); ?></td>
            <td><?= change_date_format($val['updated_at'], "/"); ?></td>
            <td><?= change_date_format($val['created_at'], "/"); ?></td>

        </tr>
      <?php endforeach; ?>
    <?php endif; ?>


  </tbody>
</table>


<?php if( count(get_data()) == 0 ): ?>
  <div class="alert alert-danger" role="alert">
    No content to show...
  </div>
<?php endif; ?>
