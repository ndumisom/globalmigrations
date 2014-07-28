<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Collapsible Message Panels</title>
<script type="text/javascript" src="jquery.js"></script>
<!--  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
<!--    // <script src="scripts/jquery.min.js"></script>
   // <script src="bootstrap/js/bootstrap.min.js"></script> -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <style type="text/css">
</style>
<script type="text/javascript">

$(document).ready(function(){

	
	//hide message_body after the first one
	$(".message_list .message_body:gt(0)").hide();

	$('#li-1').find('.intro').hide();
	$('#li-1').find('.intro').addClass('introHide');
	
	//hide message li after the 5th
	$(".message_list li:gt(4)").hide();

	
	//toggle message_body
	$(".message_head").click(function(){
		$(this).next(".message_body").slideToggle(100);
		$(".intro").addClass('introShow');
		$(this).find(".intro").hide();
		$(this).find(".intro").removeClass('introShow');
		$(this).find('.intro').addClass('introHide');
		$(".introHide").hide();

		return false;
	});

	//collapse all messages
	$(".collpase_all_message").click(function(){
		$(".message_body").slideUp(500)
		return false;
	});

	//show all messages
	$(".show_all_message").click(function(){
		$(this).hide()
		$(".show_recent_only").show()
		$(".message_list li:gt(4)").slideDown()
		return false;
	});

	//show recent messages only
	$(".show_recent_only").click(function(){
		$(this).hide()
		$(".show_all_message").show()
		$(".message_list li:gt(4)").slideUp()
		return false;
	});

});
</script>

</head>
<body>

 <form method="get" action="index.php?page=p_reply1"> 
  
 <?php 
 mysql_connect("localhost","root","");
 mysql_select_db("globalmigration_db");

if( $row = showMSGById( $_GET['id']) ) { ?>
  
    <div class=""><b><a href="index.php?page=delete_msg&id=<?php echo $row['msg_id'];?>" id="search-submit" onclick="return confirm('Are you sure you want to delete?')"> <b style="background-color: #0066FF; color: white; border:1px solid white; text-decoration:none;"> &nbsp;&nbsp; Delete&nbsp;&nbsp;  </b></a></b>  </div>
  <p><br />

 <?php } ?>
</p>
     
</div>
</div> 
<p>&nbsp;</p>
</td>
</tr>
</table>
<ol class="message_list">
	<?php



		 $reponse = showAllMSGB();
		 $i = 0;
		 while ($rowAllmsgData = mysql_fetch_array($reponse) ) {
	?>
	<li id="li-<?php echo ++$i; ?>">
		<p class="message_head"><cite><?php echo $rowAllmsgData['sender'].'';?>:</cite> 
		 <span class="timestamp"><?php echo $rowAllmsgData['msg_date'].'';?></span>
		 <br/><span class="intro"><?php echo substr($rowAllmsgData['text'], 0, 70).'';?> ...</span>
		</p>
		<div class="message_body">
			<p><?php echo $rowAllmsgData['subject'].'';?><br /><br />
				<?php echo $rowAllmsgData['text'].'';?>
			</p>
		
        <input type="hidden" name="page" value="p_reply1" />
		<input type="hidden" name="subject" value="<?php echo 'RE : '.$row['subject'];?>" />


 <?php $text =$row['text'];  ?>

 <textarea name="msg" rows="8" cols="35">
 




 </textarea>
 <br /><br />
 <input type="submit" name="reply" value="Reply" class="login" id="search-submit" />
                         <input type="hidden" name="sender" value="<?php echo $row['sender'];?>"  />
                         <input type="hidden" name="msg_id" value="<?php echo $row['msg_id'];?>"  />
                         <br /><br />
  </div>
</div>
	</li>
	</div>
	<?php
	  }
	?>
</ol>
<p class="collapse_buttons"><a href="#" class="show_all_message">Show all message (9)</a> <a href="#" class="show_recent_only">Show 5 only</a> <a href="#" class="collpase_all_message">Collapse all</a></p>
</form>
</body>
</html>



<?php
    function showMSGById($msg_id) {

        return mysql_fetch_array(mysql_query(" select * from message where msg_id = '$msg_id' "));
    }

    function markMSGasRead($msg_id) {

        $isUpdated = false;

        if (mysql_query(" update message set status = 0 where msg_id = '$msg_id' ")) {
            $isUpdated = true;
        }
        return $isUpdated;
    }

    function showAllMSGB() {

        return mysql_query(" select * from message where msg_id=".$_GET['id']);
    }
?>