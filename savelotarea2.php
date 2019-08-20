<?php
include ("connection.php");
$connect=mysql_connect($servername,$username,$password);
$select_db=mysql_select_db($databasename);




$strquery="INSERT INTO area2_table SET slot_no= '" . $_GET['slot_no'] . "' ";
$results=mysql_query ($strquery);

header( 'Location:list.php#openModal6' ) ;


?>
