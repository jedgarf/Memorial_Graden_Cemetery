<?php
include ("connection.php");
$connect=mysql_connect($servername,$username,$password);
$select_db=mysql_select_db($databasename);




$strquery="INSERT INTO area_table SET a_number= '" . $_GET['a_number'] . "' ";
if($results=mysql_query ($strquery)){
echo '<script language="javascript">';
	echo 'alert("Succesful Added Area No!");';
	echo 'window.location="museleo.php";';
	echo '</script>';
}

 else {
	echo '<script language="javascript">';
	echo 'alert("Area Number Already Exist!");';
	echo 'window.location="museleo.php#openModal1";';
	echo '</script>';
}


?>
