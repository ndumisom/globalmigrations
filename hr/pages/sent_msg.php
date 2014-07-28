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
                        <span class="icon-trash"></span> <a class="label label-info" href="index.php?page=delete_msg" alt="Delete"/>Delete</a> <span class="icon-pencil"></span> <a class="label label-info" href="index.php?page=compose" alt="write new message"/>Compose</a>  <span class="icon-ok"></span><a class="label label-info" href="index.php?page=msg"  alt="View sent messages" /> Inbox </a><span class="icon-refresh"></span> <a class="label label-info" href="index.php?page=sent_msg" onClick="loadPage( 'msg', 'msg.php');" >refresh</a></td>
           </td></tr>
                <tr >
                    
                        <?php
                        //session_start();
                        require_once('class.php');
                        include("nicePaging1.php");
                        $call = new globalm;
                        $paging = new nicePaging;
                        $rowsPerPage = 10;
                        $user = $_SESSION['log'];
                        $to = $user;

                        $Query = $paging->pagerQuery("SELECT * FROM  `message` WHERE  `sender` = '$user' and del=0 ORDER BY msg_id DESC", $rowsPerPage) or die(mysql_error());
                        $zero = mysql_num_rows($Query);
                        ?>
                       
           </tr>
                <tr><td>
                       
                      <p><?php
                        if (isset($_SESSION['message'])) {
                            echo '<span id="msg">' . $_SESSION['message'] . '</span>';
                            unset($_SESSION['message']);
                        }
                        if (isset($_SESSION['error'])) {
                            echo '<span id="error">' . $_SESSION['error'] . '</span>';
                            unset($_SESSION['error']);
                        }
                        ?></p>
                         <h2 class="title" style="color: #0000FF; font: Helvetica, Arial, sans-serif;text-align:center;">Sent Messages </h2>
          <form method="post" action="index.php?page=delete_msg">
                                        <table cellpadding="2" cellspacing="2" border="0">
                                            <tr>
                                                <td height="47" colspan="3"><div class='cssmenu'>
                                                        <ul>
                                                            <li><input type="submit" name="del_mult" id="search-submit"  value="delete" class="login btn btn-primary"/></li><li> <a href="index.php?page=compose" alt="Write new message" >Compose</a></li><li> <a href="index.php?page=msg"  alt> Inbox </a></li></ul></div><br /></td>
                                            </tr> 
                                            <tr>
                                                <td class="tad" width="199"><em><strong style="color: #0000FF;">To</strong></em></td>
                                                <td class="tad" width="449"><em><strong style="color: #0000FF;">Subject</strong></em></td>
                                                <td class="tad" width="230"><em><strong style="color: #0000FF;">sent time</strong></em></td>
                                            </tr>
                                            <tr>
                                                <?php if ($zero == null) { ?> <br/><a style="color: #FF0000;" href="#">You have no sent messages</a> <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><?php } else { ?>
                                                </tr>
                                                <?php
                                                
                                                while ($row = mysql_fetch_array($Query)) {
                                                    if ($row['del'] == 0) {
                                                        ?>     
                                                        <tr>
                                                            <td class="tad"><input type="checkbox" name="myCheckbox[]" id="myCheckbox" value="<?php echo $row['msg_id']; ?>" /><?php echo $row['to']; ?></td>
                                                            <td class="tad">
                                                                <?php echo strip_tags(substr($row['subject'], 0, 35)); ?><a style="color: #0000FF;" href="index.php?page=read_sent&id=<?php echo $row['msg_id']; ?>" onClick="loadPage( 'read_sent', 'include_files.php', '<?php echo $row['msg_id']; ?>' );">...read more</a>
                                                            </td>
                                                            <td class="tad"><?php echo $row['msg_date']; ?></td>
                                                        </tr>
                                                    <?php } else  ?>

                                                    <?php
                                                   
                                                }
                                                ?>    <tr><td align="center"><div align="center"><?php
                                            $link = "index.php?page=sent_msg";

                                            $paging->setMaxPages(4);
                                            echo $paging->createPaging($link);
                                                }?></div></td></tr>
                                              
                                        </table>
                                    </form>
                                     </div>
                            </div>
                        </div>
                        <p>&nbsp;</p></td>
                </tr>
            </table>
            <table>
                
                <tr></tr>
            </table>

        </td>
    </tr>
</table>
<div align="right">&nbsp;&nbsp;&nbsp;&nbsp; </div>

