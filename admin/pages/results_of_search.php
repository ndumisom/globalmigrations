<?php

$host = "localhost";
$uname = "root";
$pass = "";
$database = "globalmigration_db";

$connection = mysql_connect($host, $uname, $pass) or die("connection in not ready <br>");
$result = mysql_select_db($database) or die("database cannot be selected <br>");

if (isset($_GET['name'])) {

    $q = $_GET['name'];


    $sql = mysql_query('SELECT  * FROM client_details WHERE CONCAT(firstnames, " ", surname) LIKE "%' . $q . '%" OR surname LIKE "%' . $q . '%" OR file_no LIKE "%' . $q . '%"');
    $no = mysql_num_rows($sql);
echo ' <div class="style3" id="print_content"> <table class="table table-bordered" border="0" cellspacing="0" cellpadding="0" width="100%" align="center" bordercolor="#0000CC" class="table">';
echo '<tr class="header" valign="top"><th>File no</th><th>Title&nbsp;</th><th>Firstnames</th><th>Surname</th><th>Application&nbsp;Type</th><th>Passport&nbsp;No</th><th>Business&nbsp;Unit</th><th>Contact&nbsp;no</th><th>Email</th><th>Action&nbsp;&nbsp;&nbsp;<a href="javascript:window.print()"><div class="icon-print"></div></a></th></tr>';


$rowsPerPage = 5; // Rows per page
// Pager query
while ($data = mysql_fetch_assoc($sql)) {
    // Display row
        echo '<tr class="r"><td>' . $data['file_no'] . '</td><td>' . $data['title'] . '</td><td>' . $data['firstnames'] . '</td><td>' . $data['surname'] . '</td><td>' . $data['application_type'] . '</td><td >' . $data['passport_no'] . '</td><td>' . $data['business_unit'] . '</td><td>' . $data['contact_no'] . '</td><td>' . $data['email'] . '</td><td>
<div class="btn-group">
    <button class="btn btn-small dropdown-toggle btn-primary" data-toggle="dropdown">
      Action
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="">Send Memo</a></li>
    <li><a href="index.php?page=edit_client&id=' . $data['clientID'] . '">Details</a></li>
    <li><a href="index.php?page=view_permit&id=' . $data['clientID'] . '">Permit</a></li>
    <li><a href="index.php?page=activity&id=' . $data['clientID'] . '">Activity</a></li>
    <li><a href="index.php?page=request&id=' . $data['clientID'] . '">Request</a></li>
    <li><a href="index.php?page=history&id=' . $data['clientID'] . '">History</a></li>
    </ul>
  </div>        
</td></tr>';
}
echo '</table>';
}
?>