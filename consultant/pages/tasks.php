<? session_start(); ?>
<div id="refresh1">
<table class="tab" width="100%" cellspacing="0" cellpadding="0" border="0" bordercolor="#0000FF">
<tr>
<td>

<table width="100%" >
    <tr>
        <td width="691">
<?php  session_start();
require_once('class.php');
$call = new globalm;
$user= $_SESSION['log'];
$to = $user;
 				  $SqL = "SELECT * FROM  `process_task_allocation` WHERE  `allocated_to` =  '$user' GROUP BY task_all_id DESC";
				  $Query = mysql_query( $SqL ) or die(mysql_error());
 ?>
<div class="post">
<div class="entry"><h2 class="title"><a href="#" style="color: #0000FF; text-decoration: underline; font: Helvetica, Arial, sans-serif;">Tasks </a></h2>
<p><?php if( isset($_SESSION['msg']) ){echo '<span id="contact_form_session">'. $_SESSION['message'].'</span>'; unset($_SESSION['msg']);}?></p>

<div class="present">
    <p><?php if (isset($_SESSION['message'])) {
                    echo '<span id="msg">' . $_SESSION['message'] . '</span>';
                    unset($_SESSION['message']);
                }
                if (isset($_SESSION['error'])) {
                    echo '<span id="error">' . $_SESSION['error'] . '</span>';
                    unset($_SESSION['error']);
                } ?></p>
<form method="post" action="delete_msg.php">
<table width="100%"  cellpadding="3" cellspacing="3" border="0">
      <tr>
          <td height="47" colspan="3"><a href="index.php?page=task" onClick="loadPage( 'show_task', 'task_allocation.php','none' );"><b style="background-color: #0066FF; color: white; border:1px solid white;">Add Task</b></a>  <a href="index.php?page=show_task" onClick="loadPage( 'show_task', 'tasks.php','none' );"><b style="background-color: #0066FF; color: white; border:1px solid white;">refresh</a></td>
      </tr> 
      <tr>
          <td class="tad" width="199"><em><strong style="color: #0000FF;">From</strong></em></td>
          <td class="tad" width="449"><em><strong style="color: #0000FF;">Task</strong></em></td>
          <td class="tad" width="230"><em><strong style="color: #0000FF;">sent time</strong></em></td>
      </tr>
 <?php $t = 0; while( $row = mysql_fetch_array( $Query ) ) { 
                    if( $row['status'] == 0 ){          
  ?>     
      <tr>
          <td class="tad"><?php echo $row['allocated_by'];?></td>
          <td class="tad">
           <?php echo strip_tags( substr($row['allocated_task'],0,35));?><a style="color: #0000FF;" href="index.php?page=view&id=<?php echo $row['task_all_id'];?>" onClick="loadPage( 'view', 'view_task.php', '<?php echo $row['task_all_id'];?>' );">...read more</a>
          </td>
          <td class="tad"><?php echo $row['date_allocated'];?></td>
      </tr>
  <?php    } elseif( $row['status'] == 1 ) { ?>
      <tr bgcolor="#D8D8D8">
          <td class="tad"><b><?php echo $row['allocated_by'];?></b></td>
          <td class="tad">
           <b class="tad"><?php echo strip_tags( substr($row['allocated_task'],0,35));?><a style="color: #0000FF;" href="index.php?page=view&id=<?php echo $row['task_all_id'];?>" onClick="loadPage( 'view', 'view_task.php', '<?php echo $row['task_all_id'];?>' );">...read more</a></b>
          </td>
          <td class="tad"><b><?php echo $row['date_allocated'];?></b></td>
      </tr>     
  <?php 	}
   $t++;} ?>    
      <tr>
          <td align="center" colspan="3"><?php if( $t == 0 ){ ?> <a href="#" style="color: #0000FF;">You have no tasks </a><?php } ?> </td>
      </tr>
</table>
</form>
</div>
</div>
</div>
      <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p></td>
</tr>
</table>

</td>
</tr>
</table>
</div>