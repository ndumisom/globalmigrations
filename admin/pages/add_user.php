<style>
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

a {
color: #151516;
text-decoration: none;
}
</style>
<div class="container wrap_froms">
 
    <div class="offset0 span2 ">
<table class="tab" width="100%" cellspacing="0" cellpadding="0" border="0" bordercolor="#0000FF">
<tr><td>
<center>
<form name="add_user" action="index.php?page=process_add_user" method="post" class="uniForm" onsubmit="return validateAdd();">
   <!-- <h3> <a href="#" style="color: #0000FF; text-decoration: ; font: Helvetica, Arial, sans-serif;"> <a/></h3> -->
    <table width="50%" border="0" cellspacing="3" cellpadding="0">
<tr>
      <td width="33%"> </td>
      <td width="67%"><?php

if( isset($_SESSION['msg']) ){echo '<span id="msg">'. $_SESSION['msg'].'</span>'; unset($_SESSION['msg']);}
if( isset($_SESSION['error']) ){echo '<span id="error">'. $_SESSION['error'].'</span>'; unset($_SESSION['error']);}
 

       
  ?><p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="33%">First&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td width="67%"><input type="text" name="fname" id="fname" /></td>
    </tr>
    <tr>
      <td>Surname</td>
      <td><input type="text" name="surname" id="surname" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="email" id="email" /></td>
    </tr>
    <tr>
      <td>Cell&nbsp;number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td><input type="text" name="cell_no" id="cell_no" /></td>
    </tr>
    <tr>
      <td>Level</td>
      <td><select name="level" id="level">
        <option value="">--user level--</option>
		<option value="2">Consultant</option>
		<option value="3">Staff</option>
		
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit" class="login btn btn-primary" onclick="return validateAdd();" /></td>
    </tr></form></center>
  </table>
  </table>

  </div>
  </div>
  </div>

  
  

 <p>&nbsp;</p> <p>&nbsp;</p>


</td></tr>

