


<?php
// Include class
include("nicePaging.php");

// Configuration file
include("config.php");

// Connect to database
$con=mysql_connect($host, $user, $password);
mysql_select_db($database, $con);

// Create instance
$paging=new nicePaging($con);

// Create table
echo '<table border="1" cellspacing="0" cellpadding="0" width="100%" align="center" bordercolor="#0000CC" class="table">';
	echo '<tr class="header"><th>File no</th><th>Title&nbsp;</th><th>Firstnames</th><th>Surname</th><th>Application Type</th><th>Passport No</th><th>Business Unit</th><th>Contact no</th><th>Email</th><th>Action</th></tr>';
	
	$rowsPerPage=5; // Rows per page
	
	// Pager query
	$result=$paging->pagerQuery("SELECT *FROM client_details ORDER BY file_no", $rowsPerPage);
	while($data=mysql_fetch_assoc($result)){
		// Display row
		echo '<tr class="row"><td>' .$data['file_no']. '</td><td>' .$data['title']. '</td><td>'.$data['firstnames']. '</td><td>' .$data['surname'].'</td><td>'.$data['application_type']. '</td><td >'.$data['passport_no'].'</td><td>'.$data['business_unit'].'</td><td>'.$data['contact_no'].'</td><td>'.$data['email'].'</td><td><a href="index.php?page=edit_client&id='.$data['clientID'].'"> <b>Details</b></a> |<a href="index.php?page=e_permit&id='.$data['clientID'].'"> <b>Permit</b></a>  </td></tr>';
	}
echo '</table>';

$link="index.php"; // Page name

$paging->setMaxPages(4); // Number of paging links that will be displayed per page

// Create links for paging
echo $paging->createPaging($link);
// Close database connection
mysql_close($con);
?>
