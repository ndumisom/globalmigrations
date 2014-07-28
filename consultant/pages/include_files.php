<?php


   if($_GET['page']== 'add')
  {
   require("add_user.php");
   }
   
  else if($_GET['page']== 'client'){
   require("client_details.php");
  }
  
   else if($_GET['page']== 'task'){
   require("task_allocation.php");
   }
   
  else if($_GET['page']== 'permit'){
   require("permit_application.php");
   
   }
 
   
   else if($_GET['page']=='profile'){
       require 'profile.php';
   }
   else if ($_GET['page']== 'msg') {
       require("msg.php");
    }
    else if ($_GET['page']== 'compose') {
       require("compose.php");
    }
	 else if ($_GET['page']== 'read') {
       require("read_message.php");
    }
	 else if ($_GET['page']== 'seach') {
       require("seach.php");
    }
    
    else if($_GET['page'] == 'send_memo'){
    require 'send_memo.php';
    
}
else if($_GET['page'] == 'status'){
    require 'permit_status.php';
    
}
	
	else if ($_GET['page']== 'reply') {
       require("reply.php");
    }
	else if ($_GET['page']== 'edit_c') {
	   require("edit_client.php");
	}
        else if($_GET['page']=='show_task'){
	       require 'tasks.php';
	
	}
        
        else if($_GET['page']=='view'){
	       require 'view_task.php';
	
	}
        else if($_GET['page'] == 'edit_client'){
    require 'edit_client.php';
    
}
else if($_GET['page']=='view_permit'){
            require 'view_permit.php';
            
       }
//Search function set by Masande	
 else if ($_GET['name']) {
        require 'search2.php';
    
} 

  else if($_GET['page']=='change_p'){
       require 'change_password.php';
  }
  else if($_GET['page']=='sent_msg'){
            require 'sent_msg.php';
        }
 else if($_GET['page']=='activity'){
            require 'client_activity_sheet.php';
 }
 
 else if($_GET['page']=='cas'){
            require 'cas.php';
 }
  else if($_GET['page']=='read_sent'){
            require 'read_sent.php';
 }
 else if($_GET['page']=='expiry'){
            require 'expiry_dates.php';
 }else if($_GET['page']=='view_request'){
            require 'view_task_request.php';
 }
 else if($_GET['page']=='show_request'){
            require 'show_task_request.php';
 }
  else if($_GET['page']=='p_task'){
            require 'p_task_request.php';
 }
  else if($_GET['page']=='update_task'){
            require 'update_task_request.php';
 } else if($_GET['page']=='task_request'){
            require 'list_request.php';
 }
 else if($_GET['page']=='request'){
            require 'task_request.php';
} else if ($_GET['page'] == 'edit_request') {
    require 'edit_task_request.php';
}else if($_GET['page'] == 'history'){
    require 'status_history.php';
}else if($_GET['page'] == 'search'){
    require '/../bootstrap-autocomplete/allcountry.php';
}
 else{
   require("view_client1.php");
 
  }
 

?>
