<?php 
          session_start( );
		  require('class.php');
          $call = new globalm;
		  
	  if( isset( $_GET['id'] ) ) {
	       if( $call->isMSGdeleted( $_GET['id'] ) ) {
		         $_SESSION['message'] = "Your message has been deleted successfully.";
		         if(isset($_GET["page"])=="sent_msg"){
				 header("location:index.php?page=sent_msg");
                exit;}
                 elseif(isset($_GET["page"])=="msg"){
				 header("location:index.php?page=msg");
                exit;}
                 elseif(isset($_GET["page"])=="read_sent"){
				 header("location:index.php?page=read_sent");
                exit;}
                  elseif(isset($_GET["page"])=="read"){
				 header("location:index.php?page=read");
                exit;}

		   } else {
		        $_SESSION['message'] = "Your message has been deleted successfully.";
				if(isset($_GET["page"])=="sent_msg"){
				 header("location:index.php?page=sent_msg");
                exit;}
                 elseif(isset($_GET["page"])=="msg"){
				 header("location:index.php?page=msg");
                exit;}
                 elseif(isset($_GET["page"])=="read_sent"){
				 header("location:index.php?page=read_sent");
                exit;}
                  elseif(isset($_GET["page"])=="read"){
				 header("location:index.php?page=read");
                exit;}
		   }
	  } else if( isset($_POST['del_mult']) ) {
	       if( $_POST['myCheckbox'] == null  ) {
		       $_SESSION['error'] = "<font color='#FF0000'> mark at least one checkbox and hit that button again.";
		        if(isset($_GET["page"])=="sent_msg"){
				 header("location:index.php?page=sent_msg");
                exit;}
                 elseif(isset($_GET["page"])=="msg"){
				 header("location:index.php?page=msg");
                exit;}
                 elseif(isset($_GET["page"])=="read_sent"){
				 header("location:index.php?page=read_sent");
                exit;}
                  elseif(isset($_GET["page"])=="read"){
				 header("location:index.php?page=read");
                exit;}
		   } else {
		     $isError = false;
		     $my_array = $_POST['myCheckbox'];
			 
			 for( $index = 0; $index < count($my_array); $index++ ) {
			      $del = $my_array[$index];
				 if( $call->isMSGdeleted( $del ) ) {
				     $isError = true;
					 break;
				 } 
			 }
			 
		   
		    if( !$isError ) {
		      $_SESSION['message'] = "Your message(s) has been deleted successfully.";
			   if(isset($_GET["page"])=="sent_msg"){
				 header("location:index.php?page=sent_msg");
                exit;}
                 elseif(isset($_GET["page"])=="msg"){
				 header("location:index.php?page=msg");
                exit;}
                 elseif(isset($_GET["page"])=="read_sent"){
				 header("location:index.php?page=read_sent");
                exit;}
                  elseif(isset($_GET["page"])=="read"){
				 header("location:index.php?page=read");
                exit;}
			}else{
			  $_SESSION['error'] = "<font color='#FF0000'>An error occured. We are working on it. Please retry later.";
				if(isset($_GET["page"])=="sent_msg"){
				 header("location:index.php?page=sent_msg");
                exit;}
                 elseif(isset($_GET["page"])=="msg"){
				 header("location:index.php?page=msg");
                exit;}
                 elseif(isset($_GET["page"])=="read_sent"){
				 header("location:index.php?page=read_sent");
                exit;}
                  elseif(isset($_GET["page"])=="read"){
				 header("location:index.php?page=read");
                exit;}
			}
		}
	  
	 } else {
	     header("location:index.php?page=msg");
				exit;
	 }	  
?>		  
	  	   