<?php
session_start();
require "database.php";
$userfinal=$_SESSION['session_name'];

// get the messages from the table.
$get_messages = mysql_query("SELECT message_id FROM messages WHERE to_user='$userfinal' ORDER BY message_id DESC") or die(mysql_error());
$get_messages2 = mysql_query("SELECT * FROM messages WHERE to_user='$userfinal' ORDER BY message_id DESC") or die(mysql_error());
$num_messages = mysql_num_rows($get_messages);
// display each message title, with a link to their content
echo '<ul>';
for($count = 1; $count <= $num_messages; $count++)
{

    $row = mysql_fetch_array($get_messages2);
    //if the message is not read, show "(new)" after the title, else, just show the title.
if($row['message_read'] == 0)
{
    echo '<a href="read_message.php?messageid=' . $row['message_id'] . '">' . $row['message_title'] . '</a>(New)<br>';
}else{
echo '<a href="read_message.php?messageid=' . $row['message_id'] . '">' . $row['message_title'] . '</a><br>';
}}
echo '</ul>';
echo '<form name="newmsgfrm" method="post" action="new_message.php">';
echo '<input type="submit" value="Send a New Message">';
echo '</form>';

echo '<form name="backfrm" method="post" action="index.php">';
echo '<input type="submit" value="Back to Home">';
echo '</form>';
?>
