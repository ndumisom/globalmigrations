<?php
mysql_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ("globalmigration_db");
?>