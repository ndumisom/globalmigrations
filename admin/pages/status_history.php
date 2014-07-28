<?
include_once("class.php");
mysql_connect("localhost","root","");
mysql_select_db("globalmigration_db");

        $id = $_GET["id"];
	$strSQL = "SELECT *FROM updated, permit_applications WHERE updated.clientID = '$id' and  updated.permit_appID = permit_applications.permit_appID";
	$objQuery = mysql_query($strSQL);
        
        $numrows = mysql_num_rows($objQuery);
	
        $strSQL1 = "SELECT *FROM client_details WHERE clientID = '$id' ";
	$objQuery1 = mysql_query($strSQL1);
	$row1= mysql_fetch_array($objQuery1);
        $destination_country = $row1['country_of_origin'];
       
	
 
?>
<table class="tab" width="100%" cellpadding="0" cellspacing="0" border="0"  bordercolor="#0000FF">
<tr>
<td>

    <a href="#" style="color: #0000FF; text-align: center; font: Helvetica, Arial, sans-serif;"> <h3> Permit Status History for <? echo $row1['firstnames'].' '.$row1['surname']; ?> </h3></a>
    
   
   <table class="table table-bordered" border="0" cellspacing="0" cellpadding="0" width="100%" align="center" bordercolor="#0000CC" class="table">
   <tr class="header" valign="top"> 
    
    <tr class="header">
        <th> Permit</th> <th> Permit Status </th><th> Date&nbsp;Updated</th>      
    </tr>
 <?
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
    <input type="button" value="< Back" onclick="goBack()" class="login btn btn-primary"/><p>&nbsp;</p>
</td>
</tr>
</table>

