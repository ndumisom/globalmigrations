<?php 
          //session_start( );
		  
		  require( 'class.php' );
		  $call = new globalm;
		  $_SESSION["log"]="consultant";
		 echo $msg_id = 0;
         echo $id = $_GET["msg_id"];
		 echo  $sender = $_SESSION["log"];
		 echo $subject = $_GET["subject"];
		 echo  $text = $_GET["msg"];
		  echo $to = $_GET["sender"];
		  echo $from = $call->getEmail($_SESSION['log']);
		 echo  $status = 1;
		   
	  if( isset( $_GET["reply"] ) ) {
	         
			 if( $subject == null ) 
			 	$subject = '( no subject )';
			 
	         if( $text == '' ) {
			     $_SESSION['error'] = "Please enter your text message.";
				 header("location:index.php?page=p_reply");
				 exit;
			 } else if (getUsername($to) == '' || getUsername($to) == NULL) {
                                $_SESSION['error'] = "The username does not exit.";
                                header("location:index.php?page=p_reply&id=".$id);
                                exit;
                               }  else if(send_message( $msg_id, $sender, $subject, $text, $msg_date, $to, $from, $status ) ) {
			     $_SESSION['message'] = "You have replied successfully.";
				 header("location:index.php?page=msg");
				 exit;
			 } else { 
			     $_SESSION['error'] = "An error occured. We are working on it. Please retry later.";
				 header("location:index.php?page=p_reply&id=".$id);
				 exit;
			 }
	  
	  
	  }	  

	function getUsername($username) {

        $user = '';

        if ($row = mysql_fetch_array(mysql_query(" select * from users where username = '$username' "))) {
            $user = $row['username'];
        }


        return $user;
    }
 function send_message($msg_id, $sender, $subject, $text, $msg_date, $to, $from, $status) {

        $isSent = false;

        if (mysql_query(" insert into message values( '$msg_id', '$sender', '$subject', '$text', NOW(), '$to', '$from', '$status' ,0) ")) {
            $isSent = true;
        }


        return $isSent;
    }
		  
		  
		  
?>