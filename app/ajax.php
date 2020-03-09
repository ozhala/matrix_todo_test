<?php

require_once 'helpers.php';
sess_start('matrix_todo_test');


// Add new task
if (isset($_POST['type_add_new_task']))
{
    if (isset($_POST['add_token']) && isset($_SESSION['add_token']) && $_POST['add_token'] == $_SESSION['add_token'])
    {
        $DB = new DB(function () {
            require_once 'database_config.php';
        });
        $DB->create($_POST);
    }
}
