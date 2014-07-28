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
    style=""
}
.compse_menu{
background-color: #0088cc; color: #FFF;


}
</style>

<td>
<div class="post">

<div class="entry ">
<p>
<table >

               
<div class="container wrap_froms">
  <div class="row">
    <div class="offset4 span4 ">
    <div class="container">
                            
                               
                                
                                <a href="index.php?page=msg"><i class=" icon-inbox"></i> <b>Inbox</b></a>
                                <a href="index.php?page=sent_msg"><i class="icon-ok"></i> <b>Sent</b></a>
                                

                            
                        </div>

<form class="form-horizontal" role="form" method="post" action="index.php?page=send_msg" name="compose" onSubmit="return send_message( this );">
  <h2 style="color: #0000FF;">Text Message </h2>
  <div class="form-group">
  <?php
                if (isset($_SESSION['message'])) {
                    echo '<span id="msg">' . $_SESSION['message'] . '</span>';
                    unset($_SESSION['message']);
                }
                if (isset($_SESSION['error'])) {
                    echo '<span id="error">' . $_SESSION['error'] . '</span>';
                    unset($_SESSION['error']);
                }
                ?>
    <label class="col-sm-2 control-label">To</label>
    <div class="col-sm-10">
      <input type="text" name="to" id="search-text" value=""/>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">subject</label>
    <div class="col-sm-10">
      <input type="text" name="subject" id="search-text" value=""/>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Text Message</label>
    <div class="col-sm-10">
      <textarea name="msg" rows="8" cols="35"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input name="text-msg" type="submit" id="search-submit" class = "btn btn-primary" onclick="overlay( )" value="send message" class="login"/>
    </div>
  </div>
</form>
 </div>
  </div>
</div>
</p>

</div>
</div>
</td>
</tr>
</table> 