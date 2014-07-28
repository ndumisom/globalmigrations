<?php
include_once("class.php");
if( isset( $_GET["id"])){
        $id = $_GET["id"];
  $objConnect = mysql_connect("localhost","root","") or die(mysql_error());
  $objDB = mysql_select_db("globalmigration_db");
  $strSQL = "SELECT *FROM permit_applications WHERE clientID = '$id' ";


  $objQuery = mysql_query($strSQL);

        
        $numrows = mysql_num_rows($objQuery);
  
        $strSQL1 = "SELECT *FROM client_details WHERE clientID = '$id' ";
  $objQuery1 = mysql_query($strSQL1);
  $row1= mysql_fetch_array($objQuery1);
        $destination_country = $row1['country'];
       
  
 
?>
<table class="tab" width="100%" cellpadding="0" cellspacing="0" border="0"  bordercolor="#0000FF">
  <?php
}
  ?>

<tr>
<td>

    <a href="#" style="color: #0000FF; text-align: center; font: Helvetica, Arial, sans-serif;"> <h3> Permit Application for <?php echo $row1['firstnames'].' '.$row1['surname']; ?> </h3></a>
    <br/>
    <?php 
$SQL = "SELECT *FROM current_permit WHERE clientID = '$id' ";
$current_permit_results =mysql_query($SQL);
if(mysql_num_rows($current_permit_results)>0)
   include_once 'view_current_permit.php'; 
?>
    <?php //include_once 'view_ministerial.php'; ?>
    <br/> 
 <?php if($destination_country == 'Botswana' || $destination_country == 'Burundi' || $destination_country == 'Ethiopia' || $destination_country == 'Kenya' || $destination_country == 'Malawi' || $destination_country == 'Mauritius' || $destination_country == 'Mozambique' || $destination_country == 'Rwanda' || $destination_country == 'Tanzania' || $destination_country == 'Uganda' || $destination_country == 'Zimbabwe' || $destination_country == 'Zambia' ){ ?>
    <br/>
              <?php include_once 'view_african_permit.php';}else{ ?>

 <table class="table table-bordered" border="0" cellspacing="0" cellpadding="0" bordercolor="#0000FF" >
    
    <tr class="header">
        <th> Service</th><th> Permit</th> <th> Permit Status </th><th> Permit No </th><th> Submission Office </th><th> Submission Date </th><th> Expiry&nbsp;Date </th><th> Date&nbsp;Endorsed </th><th> DHA Reference No </th><th> DHA Case No</th><th> Fee</th><th> Invoice No </th> <th> J&nbsp;Invoice No </th><th> </th><th>Edit</th>
      
    </tr>
  <?php
 while ($row= mysql_fetch_array($objQuery)){
     echo "<tr class=''>
      
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
      <td>". $row['fee']."</td>
      <td>".$row['invoice_no']."</td>
      <td>".$row['j_invoice_no']."</td>
      <td> ".$row['comments']."</td>";
    

    echo'<td>
<div class="btn-group">
    <button class="btn btn-small dropdown-toggle btn-primary" data-toggle="dropdown">
      Action
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      
  <li><a href="index.php?page=e_permit&id=' . $row['permit_appID'] . '">Edit</a></li>
  <li><a href="index.php?page=new_permit&id=' . $row['clientID'] . '">New </a></li>

    </ul>
  </div>        
</td></tr>';
 }if($numrows == 0) {
                   echo "<tr><td colspan='14' bgcolor='aliceblue'><br/><b><div align='center'> <font color='red'>No permit </div></font></b><br></td><td><a style='color: #0000FF;' href='index.php?page=new_permit&id=".$row1['clientID']."'> <b> New </b></a></td></tr>";
        }
 
 
         
 
   ?>
    
    
  </table>
  
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <input type="button" value="< Back" onclick="goBack()" class="login btn btn-primary"/><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
 <?php }?>
</td>
</tr>
</table>
 <?php  mysql_close($objConnect); ?>
