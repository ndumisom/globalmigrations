<table class="tab" width="100%" cellspacing="0" cellpadding="0" border="0" bordercolor="#0000FF">
    <tr><td>
            <h2 class="title" style="color: #0000FF; text-align: center;"><a href="#" style="color: #0000FF; text-decoration: ; font: Helvetica, Arial, sans-serif;"> Reports </a></h2>
    <center>
        <?php
        include_once 'database.php';
        $firstname = getFirstname($_SESSION['log']);
   
                $strSQL = "SELECT *FROM client_details, permit_applications WHERE (corporate = '$firstname' or business_unit = '$firstname')and client_details.clientID=permit_applications.clientID ORDER BY surname";
                $objQuery = mysql_query($strSQL);
         
        ?>     <center>
            <form action="index.php?page=exporttoexcel" method="post" 
                  onsubmit='$("#datatodisplay").val( $("<div>").append( $("#ReportTable").eq(0).clone() ).html() )'>
                <div ali style="width: 900px; height: 500px; overflow: auto; padding: 10px; background-color: white;">

                    <table id="ReportTable" widht="100%" border="0" cellspacing="1" cellpadding="3" bgcolor="#353535" style="font-size: smaller;" class="table table-bordered"  width="100%">

                        <tr class="header" align="left" valign="top" style="background-color: #0088cc; color: #FFF;">
                  
                            <th> File no </th><th> Name </th><th> Surname </th><th> Passport No </th><th> Passport Expiry&nbsp;Date </th><th> Corporate </th><th> Business Unit</th><th> Processed By</th><th> Permit </th><th> Permit Status </th><th> Expiry&nbsp;Date &nbsp;</th><th> Date&nbsp;Endorsed </th><th>Eligible&nbsp;For&nbsp;PR</th><th> Submission Office </th><th> Submission Date </th> <th> pre_submission_date </th><th> memo_issue_date </th><th>Contact Number</th><th>Mobile Number</th><th> Email </th><th>In&nbsp;care&nbsp;of&nbsp;Email </th><th>Consultant</th><th>Comments</th><th>Date&nbsp;captured</th><th>Invoice&nbsp;No</th>

                        </tr>
<?php
if($objQuery){
$numrows = mysql_num_rows($objQuery);
while ($row = mysql_fetch_array($objQuery)) {

    echo "<tr>
       <td bgcolor='#FFFFFF'>" . $row['file_no'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['firstnames'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['surname'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['passport_no'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['passport_expiry_date'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['corporate'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['business_unit'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['process_by'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['permit'] . " &nbsp;</td>      
      <td bgcolor='#FFFFFF'>" . $row['permit_status'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['expiry_date'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['date_endorsed'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['eligible_for_pr'] . " &nbsp;</td>    
      <td bgcolor='#FFFFFF'>" . $row['submission_office'] . "</td>
      <td bgcolor='#FFFFFF'>" . $row['submission_date'] . "</td>
      <td bgcolor='#FFFFFF'>" . $row['pre_submission_date'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['memo_issue_date'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['contact_no'] . " &nbsp;</td>	  
      <td bgcolor='#FFFFFF'>" . $row['mobile_no'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['email'] . "</td>
      <td bgcolor='#FFFFFF'>" . $row['in_care_email'] . "</td>  
      <td bgcolor='#FFFFFF'>" . $row['consultant'] . "</td>
      <td bgcolor='#FFFFFF'>" . $row['comments'] . "</td>
      <td bgcolor='#FFFFFF'>" . $row['date_captured'] . "</td>
      <td bgcolor='#FFFFFF'>" . $row['invoice_no'] . "</td>
    </tr >";
}
if ($numrows == 0) {
    echo "<tr><td colspan='17' bgcolor='#FFFFFF'><br/><b><div align='center'><font color='red'> No results &nbsp;&nbsp;&nbsp;<a style='color: #0000FF;' href='index.php?page=reports'> go back</a></div></font></b><br/></td></tr>";
}
}else
echo "<tr><td colspan='17' bgcolor='#FFFFFF'><br/><b><div align='center'><font color='red'> No results &nbsp;&nbsp;&nbsp;<a style='color: #0000FF;' href='index.php?page=reports'> go back</a></div></font></b><br/></td></tr>";
?>


                    </table>

                </div>
                <p>&nbsp;</p>
                <input type="hidden" id="datatodisplay" name="datatodisplay" >
                <input type="submit" value="Export to Excel" class="login">
            </form> 

            </td> </tr></table>


            <?

              function getFirstname($username) {

        $firstname = '';

        if ($row = mysql_fetch_array(mysql_query(" select * from users where username = '$username' "))) {
              $firstname = $row['firstname'];
            
        }


        return $firstname;
    }

            ?>