<?php
header('Content-Type: application/force-download');
header('Content-Type: application/vnd.ms-excel;');                 // This should work for IE & Opera 
header("Content-type: application/x-msexcel");

header('Content-disposition: attachment; filename=Report.xls');
// Fix for crappy IE bug in download.
header("Expires: ");
header("Pragma: ");
header("Cache-Control: ");
header("Content-Transfer-Encoding: none ");
echo $_REQUEST['datatodisplay'];
?>
