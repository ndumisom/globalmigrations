<style type="text/css">
  
   .form_header {
    border: 2px solid;
    border-radius: 5px;
    margin-left: auto;
    margin-left: auto;
    border: 1px solid #0088cc;
    border-radius: 3px;
    padding: 9px;
    max-width: 980px;
    max-height: 20px;
    background-color: #0088cc;
}

 .header_body {
    border-radius: 5px;
    margin-left: 450px;
    margin-top:-200; 
    border-radius: 3px;

   
    max-width: 980px;
}
</style>

<?php
include_once("class.php");
mysql_connect("localhost","root","");
mysql_select_db("globalmigration_db");

  $id = $_GET["id"];

  
	$strSQL = "SELECT *FROM updated, permit_applications WHERE updated.clientID = '$id' and  updated.permit_appID = permit_applications.permit_appID";
	$objQuery = mysql_query($strSQL);
  if($objQuery)
        $numrows = mysql_num_rows($objQuery);
	
        $strSQL1 = "SELECT * FROM client_details WHERE clientID = '$id' ";

        $objQuery1 = mysql_query($strSQL1);
        	
	$row1= mysql_fetch_array($objQuery1)
        
      
    
	
 
?>
<table class="tab" width="100%" cellpadding="0" cellspacing="0" border="0"  bordercolor="#0000FF">
<tr>
<td>
<div class="form_header">
    <div class="header_body"><b> <a href="#" style="color:#F5F5FA ; text-decoration:; font: Helvetica, Arial, sans-serif;">  Permit Status History for <?php echo $row1['firstnames'].' '.$row1['surname']; ?> </a></b></div><br/><br/><br/>
    </div> 
   <div>&nbsp;</div>
  <div class="style3" id="print_content"> <table class="table table-bordered" border="0" cellspacing="0" cellpadding="0" width="100%" align="center" bordercolor="#0000CC" class="table">
  <tr class="header" valign="top">
        <th> Permit</th> <th> Permit Status </th><th> Date&nbsp;Updated</th>      
    </tr>
 <?php
 while ($row= mysql_fetch_array($objQuery)){
     echo "<tr class=''>
      
      
      <td>".$row['permit']."</td>
      <td>".$row['permit_status_history']."</td>
    
      <td> ".$row['time_updated']."</td>
       </tr>";
 }if($numrows == 0) {
                   echo "<tr><td colspan='3' bgcolor='aliceblue'><br/><b><div align='center'> <font color='red'>No permit status History </div></font></b><br></td></tr>";
        }
 
 
         
 
	 ?>
    
    
  </table>
  </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <input type="button" value="< Back" onclick="goBack()" class="login btn btn-primary"/><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</td>
</tr>
</table>