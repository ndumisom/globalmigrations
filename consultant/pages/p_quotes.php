<?php

// session_start();
/*
 * Created by Masande November 2012
 * Quote generator
 */
include_once 'class.php';
include_once 'email_quotes.php';
include_once 'tut2.php';
$call = new globalm;
mysql_connect("localhost","root","");
mysql_select_db("globalmigration");

if (isset($_POST['Submit'])) {
    
    $f_name = $_POST['f_name'];
    $surname = $_POST['surname'];
    $date = $_POST['date'];
    $address_to = $_POST['address_to'];
    $quote_no = $_POST['quote_no'];
    $invoice_no = $_POST['invoice_no'];
    $email_to = $_POST['email_to'];
    $consultant = $_POST['consultant'];
    $service = $_POST['service'];
    $payment_terms = $_POST['payment_terms'];
    $description =  $_POST['description'];
    $professional_fees = $_POST['professional_fees'];
    $saqa_dha_fee = $_POST['saqa_dha_fees'];
    $line_total = $_POST['line_total'];
    $subtotal1 = $_POST['subtotal1'];
    $subtotal2 = $_POST['subtotal2'];
    $subtotal3 = $_POST['subtotal3'];
    $vat = $_POST['vat'];
    //$discount = $_POST['discount'];
    $total = $_POST['total'];
    $comments = $_POST['comments'];
    
    /*/Back end validation
    if($f_name == null || $f_name == ""){
        $_SESSION['error'] = 'Error please enter First name';
       header('location:index.php?m=quote');
    }
      if($surname == null || $surname == ""){
        $_SESSION['error'] = 'Error please enter Surname';
       header('location:index.php?m=quote');
    }
      if($quote_date == null || $quote_date == ""){
        $_SESSION['error'] = 'Error enter date';
       header('location:index.php?m=quote');
    }
      if($email_to == null || $email_to == ""){
        $_SESSION['error'] = 'Error  please enter Email';
       header('location:index.php?m=quote');
    }
      if($consultant == null || $consultant == ""){
        $_SESSION['error'] = 'Error  please select Consultant ';
       header('location:index.php?m=quote');
    }
    if($description == null || $description == ""){
        $_SESSION['error'] = 'Error please select/enter Description';
       header('location:index.php?m=quote');
    }
    */
    // quote description loop
    $des = insert_quote_des($quote_no, $description, $professional_fees, $saqa_dha_fee, $line_total);
  
    //quote
    $quotes = insert_quote($f_name, $surname, $date, $address_to,  $quote_no, $invoice_no,  $email_to,  $consultant,  $service, $payment_terms, $subtotal1, $subtotal2, $subtotal3, $vat, $discount, $total, $comments);
    
   
    if ($quotes &&  $des ) {
        //Send email
     send_quote( $f_name, $surname, $date, $address_to,  $quote_no, $invoice_no, $email_to, $consultant,  $service, $payment_terms, $description, $professional_fees, $saqa_dha_fee, $line_total, $subtotal1, $subtotal2, $subtotal3, $vat, $discount, $total, $comments);
    
    
    $_SESSION['message'] = 'Your quote has been processed';
       //header('location:index.php?m=quote');
	   printf("<script>location.href='index.php?page=quotes'</script>");
    } else {
       $_SESSION['error'] = 'Error the quote was not processed';
       //header('location:index.php?m=quote');
	   printf("<script>location.href='index.php?page=quotes'</script>");
    }
}


    function insert_quote($f_name, $surname, $date, $address_to, $quote_no, $invoice_no, $email_to, $consultant, $service, $payment_terms, $subtotal1, $subtotal2, $subtotal3, $vat, $discount, $total, $comments) {
        return mysql_query("insert into quotes values(0, '$f_name', '$surname', '$date', '$address_to', '$quote_no', '$invoice_no', '$email_to', '$consultant', '$service', '$payment_terms', '$subtotal1', '$subtotal2', '$subtotal3', '$vat', '$discount', '$total', '$comments')");
    }
  function insert_quote_des($quote_id, $description, $professional_fees, $saqa_dha_fee, $line_total) {

        for ($i = 0; $i < count($description); $i++) {

            if (!empty($description[$i])) {

                $sql = mysql_query("insert into quote_description values(0, $quote_id, '" . mysql_real_escape_string(is_array($description[$i]) ? implode(',', $description[$i]) : $description[$i]) . "', '$professional_fees[$i]', '$saqa_dha_fee[$i]', '$line_total[$i]')");
                // echo mysql_error() . "";
                //echo $quote_no.' '.$description[$i].' '. $professional_fees[$i].' '. $saqa_dha_fee[$i].' '. $line_total[$i].'<br/>';
            }
        }
        return $sql;
    }

    

?>
