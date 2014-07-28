<style type="text/css">
    .cssmenu ul{
        margin:0;
        padding:0;
        list-style-type:none;
        width:auto;
        position:relative;
        display:block;
        height:25px;
        background:transparent url('images/blue.jpg') repeat-x top left;

    }
    .cssmenu li{
        display:block;
        float:left;
        margin:0;
        pading:0;
        border-right:1px solid #ffffff;
    }
    .cssmenu li a{
        display:block;
        float:left;
        color:#ffffff;
        text-decoration:none;
        padding:6px 16px 0 20px;
        height:15px;
        height:15px;
    }
    .cssmenu li input{
        display:block;
        float:left;
        color:#ffffff;
        font-weight: bolder;
        text-decoration:none;


    }
  .wrap_froms {
    border: 2px solid;
    border-radius: 5px;
    margin-left: auto;
    margin-left: auto;
    border: 1px solid #0088cc;
    border-radius: 3px;
    padding: 9px;
    max-width: 980px;
    style=""
}
.compse_menu{
background-color: #0088cc; color: #FFF;


}</style>
<table class="tab" width="100%" cellspacing="0" cellpadding="0" border="0" bordercolor="#0000FF">
<tr>
<td align="center">
<div class="post">
<div class="container wrap_froms">
  <div class="row">
    <div class="offset3 span4 ">
<h2 class="title" style="color: #0000FF; text-align: center;"><a href="#" style="color: #0000FF; text-align: center; font: Helvetica, Arial, sans-serif;">Text Message</a></h2>
<div class="entry">
<p>
  
 <?php 
 include_once 'class.php';
 $call = new globalm; 
 if( $call->markMSGasRead( $_GET['id'] ) ){} 
    if( $row = $call->showMSGById( $_GET['id'] ) ) { 
  ?>
  
    <div class=""><b><a  href="index.php?page=reply&id=<?php echo $row['msg_id'];?>" id="search-submit" onClick="loadPage( 'reply', 'reply.php');" >
    <b style="background-color: #0066FF; color: white; border:1px solid white; text-decoration:none;"> &nbsp;&nbsp; Reply&nbsp;&nbsp;  </b> </a>&nbsp;&nbsp;
  <b><a href="index.php?page=delete_msg&id=<?php echo $row['msg_id'];?>" id="search-submit" onclick="return confirm('Are you sure you want to delete?')" > <b style="background-color: #0066FF; color: white; border:1px solid white; text-decoration:none;"> &nbsp;&nbsp; Delete&nbsp;&nbsp;  </b></a></b>  </div>
  <p><br />
    <b>From &nbsp;&nbsp; : </b><a style="color: #0000FF;" href="#"><?php echo $row['sender'].'';?></a> 
    </p>
  <p><b>Subject : </b><a style="color: #0000FF;" href="#"><?php echo $row['subject'].'';?></a></p>
  <p>
    <b> Date&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;: </b><a style="color: #0000FF;" href="#"><?php echo $row['msg_date'].'';?></a>
  </p>
  </div>
  <div style="background-color: #0066FF; color: white; border:1px solid white; text-decoration:none;"><b>Message</b></div><br /></b>
 <?php echo nl2br(strip_tags($row['text']));?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
  </div>
</div>
 <?php } ?>
</p>
     
</div>
</div> 
<p>&nbsp;</p>
</td>
</tr>
</table>

