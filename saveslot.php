<?php
include ("connection.php");
$connect=mysql_connect($servername,$username,$password);
$select_db=mysql_select_db($databasename);




$strquery="INSERT INTO slot_table SET s_number= '" . $_GET['s_number'] . "',s_type= '" . $_GET['s_type'] . "' ";
if($results=mysql_query ($strquery)){

header( 'Location:appartment.php' ) ;}

else {
	echo '<script language="javascript">';
	echo 'alert("Area Number Already Exist!");';
	echo 'window.location="appartment.php#openModal18";';
	echo '</script>';
}
?>


