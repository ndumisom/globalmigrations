<?php
// Database Connection
include("configPDO.php");
// Query to get the usable suggestions
	$likeString = '%' . $_GET['term'] . '%';

// We Will prepare SQL Query
    //$STM = $dbh->prepare("SELECT DISTINCT  firstnames FROM client_details WHERE firstnames LIKE :likeString limit 15");
	$STM = $dbh->prepare('SELECT * FROM client_details WHERE corporate LIKE :likeString OR firstnames LIKE :likeString OR surname LIKE :likeString OR CONCAT(firstnames, " ", surname) LIKE :likeString OR file_no LIKE :likeString limit 30');
// bind parameters, Named parameters always start with colon(:)
    $STM->bindParam(':likeString', $likeString);
// For Executing prepared statement we will use below function
    $STM->execute();
// we will fetch records like this and use foreach loop to show multiple Results
    $STMrecords = $STM->fetchAll();
	$Category_array = array();
    foreach($STMrecords as $row)
        {
		  
		   $result = $row["firstnames"];
		  
		   
	array_push($Category_array, $result);
		}
		
		 $json = json_encode($Category_array);
    echo $json;          
?>