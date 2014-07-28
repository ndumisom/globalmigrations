<?php //session_start(); 
                        require_once('class.php');
                        include("nicePaging1.php");
                        $call = new globalm;
                        $paging = new nicePaging;
                        $rowsPerPage= 10;
                        $user = $_SESSION['log']='consultant';
                        $to = $user;
                      
                        $Query = $paging->pagerQuery("SELECT * FROM  `message` WHERE  `to` = '$user' and (status = 3 or status = 0 or status = 1)  ORDER BY msg_id DESC", $rowsPerPage) or die(mysql_error());
                        $zero = mysql_num_rows($Query);
                        ?>
<style>
   
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
}
</style>


            <table class="table table-bordered"  width="100%" >
                <tr style="background-color: #0088cc; color: #FFF;">
                    <td >
                        <span class="icon-trash"></span> <a class="label label-info" href="index.php?page=msg" alt="Delete"/>Delete</a> <span class="icon-pencil"></span> <a class="label label-info" href="index.php?page=compose" alt="write new message"/>Compose</a>  <span class="icon-ok"></span><a class="label label-info" href="index.php?page=sent_msg"  alt="View sent messages" /> Sent </a><span class="icon-refresh"></span> <a class="label label-info" href="index.php?page=msg" onClick="loadPage( 'msg', 'msg.php');" >refresh</a></td>
           </td></tr>
                <tr><td>
                       
                                <?php if (isset($_SESSION['message'])) {
                    echo '<p><span id="msg">' . $_SESSION['message'] . '</span></p>';
                    unset($_SESSION['message']);
                }
                if (isset($_SESSION['error'])) {
                    echo '<p><span id="error">' . $_SESSION['error'] . '</span></p>';
                    unset($_SESSION['error']);
                } ?>
                            
                                    <form method="post" action="index.php?page=p_reply1">
                                      
                                        <table  width="100%" cellpadding="2" cellspacing="2" border="0">
                                            <tr>
                                                <td>
                                     </tr> 
                                            <tr >
                                               
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="3"><?php if($zero == null) { ?> <br/><a style="color: #FF0000;" href="#">You have no messages</a> <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><?php } else{ ?> </td>
                                             </tr>
                                            
<?php
while ($row = mysql_fetch_array($Query)) {
    if ($row['status'] == 0 || $row['status'] == 3) {
        ?>     
                                                    <tr>
                                                        <td class="tad"></td>
                                                        <td class="tad">

            <ol class="message_list">
    <?php



         $reponse = $paging->pagerQuery("SELECT * FROM  `message` WHERE  `to` = '$user' and (status = 3 or status = 0 or status = 1)  ORDER BY msg_id DESC", $rowsPerPage) or die(mysql_error());
         $i = 0;
         while ($rowAllmsgData = mysql_fetch_array($reponse) ) {
    ?>
    <li id="li-<?php echo ++$i; ?>">
        <p class="message_head"><cite><strong><?php echo $rowAllmsgData['sender'].'';?>:</strong></cite> 
         <span class="timestamp"><?php echo $rowAllmsgData['msg_date'].'';?></span>
         <br/><span class="intro"><?php echo substr($rowAllmsgData['text'], 0, 70).'';?> ...</span>
        </p>
        <div class="message_body">
            <p><?php echo $rowAllmsgData['subject'].'';?><br /><br />
                <?php echo $rowAllmsgData['text'].'';?>
            </p>


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
        <?php //echo strip_tags(substr($row['subject'], 0, 10)); ?>
                           
    <?php } elseif ($row['status'] == 1 || $row['status'] == 3) { ?>
                                                
    <?php }

} ?>    <tr><td align="center"><div align="center"><?php
                                                    $link="index.php?page=msg";

$paging->setMaxPages(4);
echo $paging->createPaging($link); } ?></div></td></tr>
                                           
                                        </table>
                                    </form>
                                </div>
                       
                       
                        <p>&nbsp;</p></td>
                </tr>
            </table>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="message/jquery.js"></script>

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
<style type="text/css">
* {
    margin: 0;
    padding: 0;
}
body {
    margin: 10px auto;
    width: 570px;
    font: 75%/120% Arial, Helvetica, sans-serif;
}
p {
    padding: 0 0 1em;
}
/* message display page */
.message_list {
    list-style: none;
    margin: 0;
    padding: 0;
    width: 383px;
}
.message_list li {
    padding: 0;
    margin: 0;
    background: url(images/message-bar.gif) no-repeat;
}
.message_head {
    padding: 5px 10px;
    cursor: pointer;
    position: relative;
}
.message_head .timestamp {
    color: #666666;
    font-size: 95%;
    position: absolute;
    right: 10px;
    top: 5px;
}
.message_head cite {
    font-size: 100%;
    font-weight: bold;
    font-style: normal;
}
.message_body {
    padding: 5px 10px 15px;
}
.collapse_buttons {
    text-align: right;
    border-top: solid 1px #e4e4e4;
    padding: 5px 0;
    width: 383px;
}
.collapse_buttons a {
    margin-left: 15px;
    float: right;
}
.show_all_message {
    background: url(images/tall-down-arrow.gif) no-repeat right center;
    padding-right: 12px;
}
.show_recent_only {
    display: none;
    background: url(images/tall-up-arrow.gif) no-repeat right center;
    padding-right: 12px;
}
.collpase_all_message {
    background: url(images/collapse-all.gif) no-repeat right center;
    padding-right: 12px;
    color: #666666;
}
</style>
