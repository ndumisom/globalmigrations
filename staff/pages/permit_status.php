


<?php
// Include class
include("nicePaging1.php");

// Configuration file
include("config.php");

// Connect to database
$con=mysql_connect($host, $user, $password);
mysql_select_db($database, $con);

// Create instance
$paging=new nicePaging($con);

// Create table
// Create table
echo '<div class="style3" id="print_content"><table class="tb" border="0" cellspacing="0" cellpadding="0" width="100%" align="center" bordercolor="#0000CC" class="table">';
	echo '<tr class="header" valign="top"><th>File no</th><th>Title&nbsp;</th><th>Firstnames</th><th>Surname</th><th>Application Type</th><th>Passport No</th><th>Permit</th><th>Permit Status</th><th>Expiry&nbsp;Date</th><th valign="top">Action &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:window.print()"><img title="print" src="images/Print.png" alt="print" width="40" height="27" /></a></th></tr>';
	
	$rowsPerPage=10; // Rows per page
	
	// Pager query
	$result=$paging->pagerQuery("SELECT *FROM client_details,permit_applications WHERE client_details.clientID=permit_applications.clientID", $rowsPerPage);
	while($data=mysql_fetch_assoc($result)){
		// Display row
		echo '<tr class="r"><td>' .$data['file_no']. '</td><td>' .$data['title']. '</td><td>'.$data['firstnames']. '</td><td>' .$data['surname'].'</td><td>'.$data['application_type']. '</td><td >'.$data['passport_no'].'</td><td>'.$data['permit'].'</td><td>'.$data['permit_status'].'</td><td>'.$data['expiry_date'].'</td><td><a style="color: #0000FF;" href="index.php?m=edit_client&id='.$data['clientID'].'"> <b>Details</b></a> |<a style="color: #0000FF;" href="index.php?m=view_permit&id='.$data['clientID'].'"> <b>Permit</b></a> | <a style="color: #0000FF;" href="index.php?m=activity&id='.$data['clientID'].'"><b>Activity </b></a>| <a style="color: #0000FF;" href="index.php?m=request&id=' . $data['clientID'] . '"><b>request</b></a> </td></tr>';
	}
echo '</table></div>';

$link="index.php?m=status"; // Page name

$paging->setMaxPages(4); // Number of paging links that will be displayed per page

// Create links for paging
echo $paging->createPaging($link);
// Close database connection
mysql_close($con);
?>
