<?php
if ($_GET['page'] == 'add') {
    require("pages/add_user.php");
} else if ($_GET['page'] == 'client') {
    require("pages/client_details.php");
} else if ($_GET['page'] == 'task') {
    require("pages/task_allocation.php");
} else if ($_GET['page'] == 'permit') {
    require("pages/permit_application.php");
} else if ($_GET['page'] == 'profile') {
    require 'pages/profile.php';
} else if ($_GET['page'] == 'msg') {
    require("pages/msg.php");
} else if ($_GET['page'] == 'compose') {
    require("pages/compose.php");
} else if ($_GET['page'] == 'read') {
    require("pages/read_message.php");
} else if ($_GET['page'] == 'seach') {
    require("pages/seach.php");
} else if ($_GET['page'] == 'send_memo') {
    require 'pages/send_memo.php';
} else if ($_GET['page'] == 'status') {
    require 'pages/permit_status.php';
} else if ($_GET['page'] == 'reply') {
    require("pages/reply.php");
} else if ($_GET['page'] == 'edit_c') {
    require("pages/edit_client.php");
} else if ($_GET['page'] == 'show_task') {
    require 'pages/tasks.php';
} else if ($_GET['page'] == 'view') {
    require 'pages/view_task.php';
} else if ($_GET['page'] == 'edit_client') {
    require 'pages/edit_client.php';
} else if ($_GET['page'] == 'view_permit') {
    require 'pages/view_permit.php';
}//Search function set by Masande	
 else if ($_GET['name']) {
        require 'pages/search2.php';    
}  else if ($_GET['page'] == 'change_p') {
    require 'pages/change_password.php';
} else if ($_GET['page'] == 'sent_msg') {
    require 'pages/sent_msg.php';
} else if ($_GET['page'] == 'activity') {
    require 'pages/client_activity_sheet.php';
} else if ($_GET['page'] == 'cas') {
    require 'pages/cas.php';
} else if ($_GET['page'] == 'read_sent') {
    require 'pages/read_sent.php';
} else if ($_GET['page'] == 'reports') {
    require 'pages/reports.php';
} else if ($_GET['page'] == 'view_report') {
    require 'pages/view_report.php';
} else if($_GET['page']=='expiry'){
            require 'pages/expiry_dates.php';
 }else if($_GET['page']=='view_request'){
            require 'pages/view_task_request.php';
 }
 else if($_GET['page']=='show_request'){
            require 'pages/show_task_request.php';
 }
  else if($_GET['page']=='p_task'){
            require 'pages/p_task_request.php';
 }
  else if($_GET['page']=='update_task'){
            require 'pages/update_task_request.php';
 } else if($_GET['page']=='task_request'){
            require 'pages/list_request.php';
 }
 else if($_GET['page']=='request'){
            require 'pages/task_request.php';
} else if ($_GET['page'] == 'edit_request') {
    require 'pages/edit_task_request.php';
}else if($_GET['page'] == 'history'){
    require 'pages/status_history.php';
} else if($_GET['page'] == 'quote'){
    require 'pages/quotes.php';
} else if($_GET['page'] == 'list_quote'){
    require 'pages/list_quotes.php';
} else if($_GET['page'] == 'view_quote'){
    require 'pages/view_quotes.php';
} else {
    require("pages/view_client1.php");
}
?>