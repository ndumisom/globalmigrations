<?php
if(isset($_GET['page'])){
if ($_GET['page'] == 'process_add_user') {
    require("pages/process_add_user.php");
}else if($_GET['page'] == 'exporttoexcel') {
    require("pages/exporttoexcel.php");
}
else if ($_GET['page'] == 'search_results') {
    require("pages/results_of_search.php");
}
else if($_GET['page'] == 'p_edit_task_request') {
    require("pages/p_edit_task_request.php");
}else if($_GET['page'] == 'add') {
    require("pages/add_user.php");
}  else if($_GET['page'] == 'update_client_details') {
    require("pages/update_client_details.php");
} else if($_GET['page'] == 'add_new_permit') {
    require("pages/add_new_permit.php");
}

else if($_GET['page'] == 'e_permit') {
    require("pages/edit_permit.php");
} 
else if($_GET['page'] == 'e_permit') {
    require("pages/edit_permit.php");
}
else if ($_GET['page'] == 'client_details') {
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
}else if ($_GET['page'] == 'message') {
    require("pages/msg.php");
} 

else if ($_GET['page'] == 'seach') {
    require("pages/seach.php");
} else if ($_GET['page'] == 'change_p') {
    require 'pages/change_password.php';
}else if ($_GET['page'] == 'read_sent') {
    require("pages/read_sent.php");
}

 else if ($_GET['page'] == 'reply') {
    require("pages/reply.php");
} else if ($_GET['page'] == 'alter_permit') {
    require'pages/alter_permtapp.php';
} else if ($_GET['page'] == 'edit_client') {
    require("pages/edit_client.php");
} else if ($_GET['page'] == 'e_task') {
    require 'pages/edit_task';
} else if ($_GET['page'] == 'e_permit') {
    require 'pages/edit_permit.php';
} else if ($_GET['page'] == 'show_task') {
    require 'pages/tasks.php';
} 
//Search function
else if (isset($_GET['name'])) {
    require 'pages/search2.php';
} else if ($_GET['page'] == 'view_clients') {
    require 'pages/view_client1.php';
} else if ($_GET['page'] == 'edit_client') {
    require 'pages/edit_client.php';
} else if ($_GET['page'] == 'redirect') {
    require 'pages/redirect.php';
} else if ($_GET['page'] == 'send_memo') {
    require 'pages/send_memo.php';
} else if ($_GET['page'] == 'permit_status') {
    require 'pages/permit_status.php';
} else if ($_GET['page'] == 'view') {
    require 'pages/view_task.php';
} else if ($_GET['page'] == 'update_client') {
    require '';
} else if ($_GET['page'] == 'sent_task') {
    require 'pages/sent_task.php';
} else if ($_GET['page'] == 'new_permit') {
    require 'pages/new_permit.php';
} else if ($_GET['page'] == 'sent_msg') {
    require 'pages/sent_msg.php';
} else if ($_GET['page'] == 'view_users') {
    require 'pages/view_users.php';
} else if ($_GET['page'] == 'view_permit') {
    require 'pages/view_permit.php';
} else if ($_GET['page'] == 'activity') {
    require 'pages/client_activity_sheet.php';
} else if ($_GET['page'] == 'cas') {
    require 'pages/cas.php';
}
else if ($_GET['page'] == 'p_cas') {
    require 'pages/p_cas.php';
}
 else if ($_GET['page'] == 'e_c_permit') {
    require 'pages/edit_c_permit.php';
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
 } else if($_GET['page']=='update_task_request'){
            require 'pages/update_task_request.php';
 } 

 else if($_GET['page']=='task_request'){
            require 'pages/list_request.php';
 }
 else if($_GET['page']=='request'){
            require 'pages/task_request.php';
} else if ($_GET['page'] == 'edit_request') {
    require 'pages/edit_task_request.php';
} else if($_GET['page'] == 'upload_file'){
    require 'pages/upload_file.php';
} 
else if($_GET['page'] == 'view_file'){
    require 'pages/view_file.php';
} 
//Permits in countries
else if($_GET['page'] == 'botswana'){
    require 'pages/permit_countries/botswana.php';
} else if($_GET['page'] == 'burundi'){
    require 'pages/permit_countries/burundi.php';
} else if($_GET['page'] == 'ethiopia'){
    require 'pages/permit_countries/ethiopia.php';
} else if($_GET['page'] == 'kenya'){
    require 'pages/permit_countries/kenya.php';
} else if($_GET['page'] == 'malawi'){
    require 'pages/permit_countries/malawi.php';
} else if($_GET['page'] == 'mozambique'){
    require 'pages/permit_countries/mozambique.php';
} else if($_GET['page'] == 'rwanda'){
    require 'pages/permit_countries/rwanda.php';
} else if($_GET['page'] == 'tanzania'){
    require 'pages/permit_countries/tanzania.php';
} else if($_GET['page'] == 'uganda'){
    require 'pages/permit_countries/uganda.php';
} else if($_GET['page'] == 'zimbabwe'){
    require 'pages/permit_countries/zimbabwe.php';
 
} else if($_GET['page'] == 'zambia'){
    require 'pages/permit_countries/zambia.php';
 
}else if($_GET['page'] == 'e_a_permit'){
    require 'pages/edit_african_permit.php';
 
}else if($_GET['page'] == 'add_permit'){
    require 'pages/add_permitapp.php';
    
}else if($_GET['page'] == 'updates'){
    require 'pages/updates.php';
}
else if($_GET['page'] == 'pr_pending'){
    require 'pages/pr_pending.php';
}else if($_GET['page'] == 'trp_pending'){
    require 'pages/trp_pending.php';
}
else if($_GET['page'] == 'history'){
    require 'pages/status_history.php';
}else if($_GET['page'] == 'empty_fields'){
    require 'pages/empty_field_report.php';
}
else if($_GET['page'] == 'view_empty'){
    require 'pages/view_empty_report.php';
}else if($_GET['page'] == 'file_opened'){
    require 'pages/file_opened_report.php';
}else if($_GET['page'] == 'view_file_opened'){
    require 'pages/view_file_opened_report.php';
}else if($_GET['page'] == 'ministerial'){
    require 'pages/ministerial.php';
}else if($_GET['page'] == 'edit_ministerial'){
    require 'pages/edit_ministerial.php';
}else if($_GET['page'] == 'ministerial_report'){
    require 'pages/ministerial_report.php';
}else if($_GET['page'] == 'view_ministerial_report'){
    require 'pages/view_ministerial_report.php';
}else if($_GET['page'] == 'invoice'){
    require 'pages/invoice.php';
}else if($_GET['page'] == 'view_invoice'){
    require 'pages/view_invoice.php';
}else if($_GET['page'] == 'add_client_details'){
    require 'pages/add_client_details.php';
}if ($_GET['page'] == 'delete_msg') {
    require("pages/delete_msg.php");
}
if ($_GET['page'] == 'client') {
    require("pages/client_details.php");
}

}else {

    require("pages/client_details.php");
}
?>
