<?php //session_start(); ?>
<div id="refresh1">

<?php  //session_start();
require_once('class.php');
$call = new globalm;
$user= $_SESSION['log'];
$to = $user;
 				  $SqL = "SELECT * FROM  `process_task_allocation` WHERE  `allocated_to` =  '$user' GROUP BY task_all_id DESC";
				  $Query = mysql_query( $SqL ) or die(mysql_error());
 ?>
<div class="post">
<div class="entry">
<p><?php if( isset($_SESSION['msg']) ){echo '<span id="contact_form_session">'. $_SESSION['message'].'</span>'; unset($_SESSION['msg']);}?></p>
<h2 class="title"><a href="#"> </a></h2>

<div class="present">
<form method="post" action="index.php?page=delete_msg">
<table class="table table-bordered"  width="100%" >
                <tr style="background-color: #0088cc; color: #FFF;">
        <td height="47" colspan="3"><span class="icon-refresh"></span><a class="label label-info" href="index.php?page=show_task" onClick="loadPage( 'show_task', 'include_files.php' );"><b >refresh</a></td>
      </tr> 
      <tr>
          <td width="199"><em><strong>From</strong></em></td>
          <td width="449"><em><strong>Task</strong></em></td>
          <td width="230"><em><strong>sent time</strong></em></td>
      </tr>
 <?php $t = 0; while( $row = mysql_fetch_array( $Query ) ) { 
                    if( $row['status'] == 0 ){          
  ?>     
      <tr>
          <td><?php echo $row['allocated_by'];?></td>
          <td>
           <?php echo strip_tags( substr($row['allocated_task'],0,35));?><a href="admin_index.php?page=view&id=<?php echo $row['task_all_id'];?>" onClick="loadPage( 'view', 'include_files.php', '<?php echo $row['task_all_id'];?>' );">...read more</a>
          </td>
          <td><?php echo $row['date_allocated'];?></td>
      </tr>
  <?php    } else { ?>
      <tr bgcolor="#D8D8D8">
          <td><b><?php echo $row['allocated_by'];?></b></td>
          <td>
           <b><?php echo strip_tags( substr($row['allocated_task'],0,35));?><a href="admin_index.php?page=view&id=<?php echo $row['task_all_id'];?>" onClick="loadPage( 'view', 'include_files.php', '<?php echo $row['task_all_id'];?>' );">...read more</a></b>
          </td>
          <td><b><?php echo $row['date_allocated'];?></b></td>
      </tr>     
  <?php 	}
   $t++;} ?>    
      <tr>
          <td align="center" colspan="3" style="color: #FF0000; text-align:center;"><?php if( $t == 0 ){ ?> <a style="color: #FF0000; text-align:center;" href="#">You have no Tasks </a><?php } ?> </td>
      </tr>
</table>
</form>
</div>
</div>
</div>
      
</tr>
</table>

</td>
</tr>
