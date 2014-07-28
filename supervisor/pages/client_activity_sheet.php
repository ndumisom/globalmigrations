<script >
var xmlHttp;
function showUser(str)
{ 
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
 {
 alert ("Browser does not support HTTP Request");
 return;
 }
var url="cas.php";
url=url+"?id=";
xmlHttp.onreadystatechange=stateChanged;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
}
function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 { 
 document.getElementById("txtHint").innerHTML=xmlHttp.responseText;
 } 
}
function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 //Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}

</script>
<?php
//print msg here
if( isset($_SESSION['msg']) ){echo '<span id="msg"><b>'. $_SESSION['msg'].'</b></span><br/><br/>'; unset($_SESSION['msg']);}
if( isset($_SESSION['error']) ){echo '<span id="error"><b>'. $_SESSION['error'].'</b></span><br/><br/>'; unset($_SESSION['error']);}
// Include class

include_once("classes/database.php");
$con = new Database();
$con->mysqlConnect();
$clientID = $_GET["id"];



$result = mysql_query("SELECT * FROM client_details where client_details.clientID = '$clientID' ");
$result1 = mysql_query("SELECT * FROM  client_activity_sheet, client_details where client_details.clientID = '$clientID' AND client_activity_sheet.clientID ='$clientID'");



$row = mysql_fetch_array($result);



// echo '<table class="tb" border="1" cellspacing="0" cellpadding="0" width="100%" align="center" bordercolor="#0000CC">';
// 	echo '<tr class="header row"><th>File no</th><th>Title&nbsp;</th><th>Firstnames</th><th>Surname</th></tr>';
  
//   echo '<tr class="row"><td>' .$row['file_no']. '</td><td>' .$row['title']. '</td><td>'.$row['firstnames']. '</td><td>' .$row['surname'].'</td></tr>';
echo ' <div class="style3" id="print_content"> <table class="table table-bordered" border="0" cellspacing="0" cellpadding="0" width="100%" align="center" bordercolor="#0000CC" class="table"><tr class="header" valign="top">
    <tr class="header row"><th>File no</th><th>Title&nbsp;</th><th>Firstnames</th><th>Surname</th></tr>
    <tr class="row"><td>' .$row['file_no']. '</td><td>' .$row['title']. '</td><td>'.$row['firstnames']. '</td><td>' .$row['surname'].'</td></tr>
  </table>
</div>';

echo '</table><br/>';

// echo '<div align="center"><b> Client Activity Sheet</b></div> <table class="tb" border="1" cellspacing="0" cellpadding="0" width="100%" align="center" bordercolor="#0000CC" class="table">';
// echo '<tr class="header row"><th>Date</th><th>Name</th><th>Description</th></tr>';
 echo'<div align="center"><b> Client Activity Sheet</b></div> <div class="style3" id="print_content"> <table class="table table-bordered" border="0" cellspacing="0" cellpadding="0" width="100%" align="center" bordercolor="#0000CC" class="table"><tr class="header" valign="top"><tr class="header row"><th>Date</th><th>Name</th><th>Description</th></tr>';
while($row1 = mysql_fetch_array($result1))
  {
  echo '<tr class="row"><td>'.$row1['date']. '</td><td >'.$row1['username'].'</td><td>'.$row1['description'].'</td></tr>';

  }
  
   echo'</table>
</div>';

 
  ?><tr><td></td><td valign="top">
      
<a style="color: #0000FF;" href="#" onClick="showUser(this.value)"><b>Add</b></a>
</td><td>
<form name="client" action="p_cas.php?id=<?php echo $clientID; ?>" method="post" onsubmit="return validateClient()">
    <input type="hidden" name="username" value="<?php echo $_SESSION['log'];?>"/>
        <input type="hidden" name="clientID" value="<?php echo $clientID;?>"/>
<div id="txtHint"></div>
</form>
</td>
</tr>

<?php echo '</table><br/>'; ?>