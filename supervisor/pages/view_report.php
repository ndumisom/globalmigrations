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
</style>
<table class="tab" width="100%" cellspacing="0" cellpadding="0" border="0" bordercolor="#0000FF">
    <tr><td>
            <h2 class="title" style="color: #0000FF; text-align: center;><a href="#" style="color: #0000FF; text-decoration: underline; font: Helvetica, Arial, sans-serif;"> Reports </a></h2>
    <center>
        <?php
        $corporate = trim($_POST['corporate']);
        $permit_status = trim($_POST['permit_status']);
        $start_date = trim($_POST['start_date']);
        $end_date = trim($_POST['end_date']);
        $none = " ";
        $objConnect = mysql_connect("localhost", "root", "") or die(mysql_error());
        $objDB = mysql_select_db("globalmigration_db");

        if ($corporate && $permit_status && $start_date && $end_date) {
            //None corporate
            if ($corporate == "None") {
                $strSQL = "SELECT * FROM client_details, permit_applications WHERE client_details.corporate =  '$none' AND permit_applications.permit_status =  '$permit_status' AND expiry_date>=('$start_date') AND expiry_date<=('$end_date') AND client_details.clientID=permit_applications.clientID ORDER BY file_no ASC";
                $objQuery = mysql_query($strSQL);
            } else if ($corporate != "None") {
                $strSQL = "SELECT * FROM client_details, permit_applications WHERE client_details.corporate =  '$corporate' AND permit_applications.permit_status =  '$permit_status' AND expiry_date>=('$start_date') AND expiry_date<=('$end_date') AND client_details.clientID=permit_applications.clientID ORDER BY file_no ASC";
                $objQuery = mysql_query($strSQL);
            }
        } else if ($corporate && $permit_status) {
            //None corporate
            if ($corporate == "None") {
                $strSQL = "SELECT * FROM client_details, permit_applications WHERE client_details.corporate =  '$none' AND permit_applications.permit_status =  '$permit_status' AND client_details.clientID=permit_applications.clientID ORDER BY file_no ASC";
                $objQuery = mysql_query($strSQL);
            } else if ($corporate != "None") {
                $strSQL = "SELECT * FROM client_details, permit_applications WHERE client_details.corporate =  '$corporate' AND permit_applications.permit_status =  '$permit_status' AND client_details.clientID=permit_applications.clientID ORDER BY file_no ASC";
                $objQuery = mysql_query($strSQL);
            }
        } 
        
        
        else if ($corporate && $start_date && $end_date) {
            // None corporate
            if ($corporate == "None") {
                $strSQL = "SELECT * FROM client_details, permit_applications WHERE client_details.corporate =  '$none' AND expiry_date>=('$start_date') AND expiry_date<=('$end_date') AND client_details.clientID=permit_applications.clientID ORDER BY file_no ASC";
                $objQuery = mysql_query($strSQL);
            } elseif ($corporate != "None") {

                $strSQL = "SELECT * FROM client_details, permit_applications WHERE client_details.corporate =  '$corporate' AND expiry_date>=('$start_date') AND expiry_date<=('$end_date') AND client_details.clientID=permit_applications.clientID ORDER BY file_no ASC";
                $objQuery = mysql_query($strSQL);
            }
        } 
        
        else if ($permit_status && $start_date && $end_date) {
            $strSQL = "SELECT * FROM client_details, permit_applications WHERE permit_applications.permit_status =  '$permit_status' AND expiry_date>=('$start_date') AND expiry_date<=('$end_date') AND client_details.clientID=permit_applications.clientID ORDER BY file_no ASC";
            $objQuery = mysql_query($strSQL);
        } else if ($start_date && $end_date) {
            $strSQL = "SELECT * FROM client_details, permit_applications WHERE expiry_date>=('$start_date') AND expiry_date<=('$end_date') AND client_details.clientID=permit_applications.clientID ORDER BY file_no ASC";
            $objQuery = mysql_query($strSQL);
        } 
        
        else if ($corporate) {
            //None corporate
            if ($corporate == 'None') {
                $strSQL = "SELECT * FROM client_details, permit_applications WHERE client_details.corporate =  '$none' AND client_details.clientID=permit_applications.clientID ORDER BY file_no ASC";
                $objQuery = mysql_query($strSQL);
            } else if ($corporate != 'None') {
                $strSQL = "SELECT * FROM client_details, permit_applications WHERE client_details.corporate =  '$corporate' AND client_details.clientID=permit_applications.clientID ORDER BY file_no ASC";
                $objQuery = mysql_query($strSQL);
            }
        }
        
        else if ($permit_status) {
            $strSQL = "SELECT * FROM client_details, permit_applications WHERE permit_applications.permit_status =  '$permit_status' AND client_details.clientID=permit_applications.clientID ORDER BY file_no ASC";
            $objQuery = mysql_query($strSQL);
        } else {
            $strSQL = "SELECT * FROM client_details, permit_applications WHERE client_details.clientID=permit_applications.clientID ORDER BY file_no ASC";
            $objQuery = mysql_query($strSQL);
        }


        $strSQL1 = "SELECT * FROM client_details, permit_applications WHERE client_details.corporate =  '$corporate' AND permit_applications.permit_status =  '$permit_status' AND client_details.clientID=permit_applications.clientID ORDER BY surname ASC";
        $objQuery1 = mysql_query($strSQL1);
        ?>     <center>
        <div class="container wrap_froms">
  <div class="row">
    <div class="offset0 span8 ">
            <form action="index.php?page=exporttoexcel" method="post" 
                  onsubmit='$("#datatodisplay").val( $("<div>").append( $("#ReportTable").eq(0).clone() ).html() )'>
                <div ali style="width: 900px; height: 500px; overflow: auto; padding: 10px; background-color: white;">

                    <table id="ReportTable" widht="100%" border="0" cellspacing="1" cellpadding="3" bgcolor="#353535" style="font-size: smaller;">

                        <tr class="header" align="left" valign="top">
                            <th> File no </th><th> Name </th><th> Surname </th><th> Corporate </th><th> Permit </th> <th> Permit Status </th><th> Expiry&nbsp;Date &nbsp;</th><th> Date&nbsp;Endorsed </th><th> Submission Office </th><th> Submission Date </th><th> Email </th><th>In care of Email </th>

                        </tr>
        <?php
        $numrows = mysql_num_rows($objQuery);
        while ($row = mysql_fetch_array($objQuery)) {
            echo "<tr>
       <td bgcolor='#FFFFFF'>" . $row['file_no'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['firstnames'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['surname'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['corporate'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['permit'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['permit_status'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['expiry_date'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['date_endorsed'] . " &nbsp;</td>
      <td bgcolor='#FFFFFF'>" . $row['submission_office'] ."</td>
      <td bgcolor='#FFFFFF'>" . $row['submission_date'] ."</td>
      <td bgcolor='#FFFFFF'>" . $row['email'] ."</td>
      <td bgcolor='#FFFFFF'>" . $row['in_care_email'] ."</td>  
    </tr >";
        }
        if ($numrows == 0) {

        ?>
            <tr><td colspan='13' bgcolor='#FFFFFF'><br/><b><div align='center'><font color='red'> <div class="bs-example">
    <div class="alert alert-danger fade in">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4>Oops no reports for that date!</h4>
      <p>click ok below to select different date or Cancel</p>
      <p>
        <button type="button" class="btn btn-danger"><a href= "index.php?page=reports">Ok</a></button>
        <button type="button" class="btn btn-default"><a href= "index.php">Cancel</a></button>
      </p>
    </div>
  </div>
</div></font></b><br/></td></tr>
        
       <?php
        }
        ?>

                    </table>

                </div>
                <input type="hidden" id="datatodisplay" name="datatodisplay" >
                <input type="submit" value="Export to Excel" class="login">
            </form> 
            </div>
            </div>
            </div>
                <p>&nbsp;</p>

            </td> </tr></table>