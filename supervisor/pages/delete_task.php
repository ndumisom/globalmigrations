<?php

//session_start();
require('class.php');
$call = new globalm;

if (isset($_GET['id'])) {
    
    if (isTask($_GET['id'])) {
        $_SESSION['message'] = "Task has been completed and removed";
        header("location:index.php?page=show_task");
        exit;
    } else {
        $_SESSION['error'] = "Error task was not completed.";
        header("location:index.php?page=show_task");
        exit;
    }
} else {
    header("location:index.php?page=show_task");
    exit;
}
 function isTask($task_all_id) {

        $isUpdated = false;

        if (mysql_query(" update process_task_allocation set date_completed=NOW(), status = 2 where task_all_id = '$task_all_id' ")) {
            $isUpdated = true;
        }
         return TRUE;
    }
?>		  
