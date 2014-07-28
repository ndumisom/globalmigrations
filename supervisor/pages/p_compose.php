<?php

//session_start();



mysql_connect("localhost","root","");
mysql_select_db("globalmigration_db");
     function getUsername($username) {

        $user = '';

        if ($row = mysql_fetch_array(mysql_query(" select * from users where username = '$username' "))) {
            $user = $row['username'];
        }


        return $user;
    }
        function getEmail($userID) {

        $email = '';

        if ($row = mysql_fetch_array(mysql_query(" select * from users where username = '$userID' "))) {
            $email = $row['email'];
        }


        return $email;
    }

       function send_message($msg_id, $sender, $subject, $text, $msg_date, $to, $from, $status) {

        $isSent = false;

        if (mysql_query(" insert into message values( '$msg_id', '$sender', '$subject', '$text', NOW(), '$to', '$from', '$status' ,0) ")) {
            $isSent = true;
        }


        return $isSent;
    }


require( 'class.php' );
$call = new globalm;

if (isset($_POST["text-msg"])) {

$msg_id = 0;
$sender = $_SESSION['log'];
$subject = $_POST["subject"];
$text = $_POST["msg"];
$to = $_POST["to"];
$from = $call->getEmail($_SESSION['log']);
$status = 1;



    if ($subject == null)
        $subject = '( no subject )';
    if ($to == '') {
        $_SESSION['error'] = "<font color='#FF0000'>Please enter a recipient.";
        header("location:index.php?page=compose");
        exit;
    } else if ($text == '') {
        $_SESSION['error'] = "Please enter your text message.";
        header("location:index.php?page=compose");
        exit;
    } else if (getUsername($to) == '' || getUsername($to) == NULL) {
        $_SESSION['error'] = "The username does not exit.";
        header("location:index.php?page=compose");
    } else if (send_message($msg_id, $sender, $subject, $text, $msg_date, $to, $from, $status)) {
        $_SESSION['message'] = "Your text message has been sent successfully.";
        header("location:index.php?page=compose");
        exit;
    } else {
        $_SESSION['error'] = "An error occured. We are working on it. Please retry later.";
        header("location:index.php?page=compose");
        exit;
    }
}
?>