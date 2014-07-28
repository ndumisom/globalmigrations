<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
   require_once 'add_client_details.php';
//$_SESSION['file_no']= trim($_POST['file_no']);
//$_SESSION['firstname'] = ucfirst(trim($_POST['firstnames']));
$file_no = trim($_POST['file_no']);

$firstname = ucfirst(trim($_POST['firstnames']));
$id = mysql_query("select clientID from client_details where firstnames='$firstnames' and file_no ='$file_no' ");
$row = mysql_fetch_array($id);
$clientID = $row['clientID'];
$destination_country = $_POST['destination_country'];


if($destination_country == 'Botswana' ){
    
 

  header("location:index.php?page=botswana&id=$clientID");
    exit;
}
else if ($destination_country == 'Burundi') {
    
    header("location:index.php?page=burundi&id=$clientID");
    exit;

}
else if($destination_country == 'Ethiopia' ){
    
    header("location:index.php?page=ethiopia&id=$clientID");
    exit;
}
else if($destination_country == 'Kenya' ){
    
   header("location:index.php?page=kenya&id=$clientID");
    exit;
}
else if($destination_country == 'Malawi' ){
    
    header("location:index.php?page=malawi&id=$clientID");
    exit;
}
else if($destination_country == 'Mauritius' ){
    
   header("location:index.php?page=mauritius&id=$clientID");
    exit;
}
else if($destination_country == 'Mozambique' ){
    
   header("location:index.php?page=mozambique&id=$clientID");
    exit;
}
else if($destination_country == 'Rwanda' ){
    
  header("location:index.php?page=rwanda&id=$clientID");
    exit;
}
else if($destination_country == 'Tanzania' ){
    
   header("location:index.php?page=tanzania&id=$clientID");
    exit;
}
else if($destination_country == 'Uganda' ){
    
   header("location:index.php?page=uganda&id=$clientID");
    exit;
}
else if($destination_country == 'Zimbabwe' ){
    
   header("location:index.php?page=zimbabwe&id=$clientID");
    exit;
}
else if($destination_country == 'Zambia' ){
    
   header("location:index.php?page=zambia&id=$clientID");
    exit;
}

?>
