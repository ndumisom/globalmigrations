<?php
include_once("class.php");
if( isset( $_GET["id"])){
   $id = $_GET["id"];
	$objConnect = mysql_connect("localhost","root","") or die(mysql_error());
	$objDB = mysql_select_db("globalmigration_db");
	$strSQL = "SELECT *FROM permit_applications WHERE clientID = '$id' ";
	$objQuery = mysql_query($strSQL);
	
        $strSQL1 = "SELECT *FROM client_details WHERE clientID = '$id' ";
	$objQuery1 = mysql_query($strSQL1);
	$row1= mysql_fetch_array($objQuery1);
	
 
?>
<table class="tab" width="100%" cellpadding="0" cellspacing="0" border="0"  bordercolor="#0000FF">
<tr>
<td>

    <h3 style="color: #0000FF; text-align: center; font: Helvetica, Arial, sans-serif;"> <a href="#" style="color: #0000FF; text-decoration: ; font: Helvetica, Arial, sans-serif;">
    <b>Permit Application for <?php echo $row1['firstnames'].' '.$row1['surname']; ?> </b></a></h3>
  <br/>
<?php include_once 'view_current_permit.php'; ?>
  <?php
}
  ?>
    
 

  <?php echo ' <div class="style3" id="print_content"> <table class="table table-bordered" border="0" cellspacing="0" cellpadding="0" width="100%" align="center" bordercolor="#0000CC" class="table">';
echo '<tr class="header" valign="top">';?>
    <tr class="header">
      <th> Service</th><th> Permit</th> <th> Permit Status </th><th> Permit No </th><th> Submission Office </th><th> Submission Date </th><th> Expiry Date </th><th> Date Endorsed </th><th> DHA Reference No </th><th> DHA Case No</th><th> Comments</th>
      
    </tr>
 <?php
 while ($row= mysql_fetch_array($objQuery)){
     echo "<tr>
      
      <td>".$row['service']."</td>
      <td>".$row['permit']."</td>
      <td>".$row['permit_status']."</td>
      <td>".$row['permit_no']."</td>
      <td>".$row['submission_office']."</td>
      <td>".$row['submission_date']."</td>  
      <td>".$row['expiry_date']."</td>
      <td>".$row['date_endorsed']."</td>      
      <td>".$row['dha_refrence_no']."</td>
      <td>".$row['dha_case_no']."</td>
      <td> ".$row['comments']."</td>
    </tr>";
 }
 
 
         
 
	 ?>
    
    
  </table>
  <input type="button" class="btn btn-primary" value="< Back" onclick="goBack()" class="login"/>
</div>
    <p>&nbsp;</p>
    
    


</td>
</tr>
</table>
<?php mysql_close($objConnect); ?>
