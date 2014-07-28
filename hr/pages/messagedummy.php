<?php
$host="localhost";
$username="root";
$password="";
$db_name="globalmigration_db";
$tbl_name="student";
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$user = $_SESSION["log"];
$sql="SELECT * FROM  `message` WHERE  `to` = 'admin' ORDER BY msg_id DESC";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
?>
<script language="javascript">
function validate()
{
var chks = document.getElementsByName('checkbox[]');
var hasChecked = false;
for (var i = 0; i < chks.length; i++)
{
if (chks[i].checked)
{
hasChecked = true;
break;
}
}
if (hasChecked == false)
{
alert("Please select at least one.");
return false;
}
return true;
}
</script>
<table width="600" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="form1" method="post" action="index.php?page=delete_msg" onSubmit="return validate();">
<table width="500" border="0" cellpadding="3" cellspacing="1" bgcolor="#ddd">
<tr>
<td>&nbsp;</td>
<td colspan="4"><strong>Delete Multiple Records using Checkbox in PHP</strong> </td>
</tr>
<tr><td></td></tr>
<tr>
<td></td>
<td style=" width:10%"><strong>Id</strong></td>
<td style=" width:30%"><strong>Name</strong></td>
<td style=" width:20%"><strong>Class</strong></td>
<td style=" width:40%"><strong>Email</strong></td>

</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td><input name="checkbox[]" type="checkbox" id="checkbox[]" 
value="<?php echo $rows['msg_id']; ?>"></td>
<td><?php echo $rows['msg_id']; ?></td>
<td><?php echo $rows['sender']; ?></td>
<td><?php echo $rows['subject']; ?></td>
<td><?php echo $rows['msg_date']; ?></td>
</tr>

<?php
}
?>

<tr>
<td><input name="delete" type="submit" id="delete" value="Delete"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>



<?php
$host="localhost";
$username="root";
$password="";
$db_name="globalmigration_db";
$tbl_name="student";
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
?>


<?php

// Check if delete button active, start this
if(isset($_POST['delete'])){
for($i=0;$i<count($_POST['checkbox']);$i++){
$del_id=$_POST['checkbox'][$i];
$sql = "delete from message where msg_id = '$del_id' ";
$result = mysql_query($sql);
}
// if successful redirect to delete_multiple.php
if($result)
{
header("location:index.php?page=msg");
}
}
mysql_close();
?>
