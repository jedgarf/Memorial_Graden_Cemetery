<?php
include ("connection.php");
$connect=mysql_connect($servername,$username,$password);
$select_db=mysql_select_db($databasename);




$strquery="INSERT INTO list SET lastname= '" . $_GET['lastname'] . "', dateofdeath= '". $_GET['dateofdeath'] ."', dateofbirth= '". $_GET['dateofbirth'] ."', firstname= '". $_GET['firstname'] ."', lot_number= '". $_GET['lot_number'] ."', price= '". $_GET['price'] ."', type= '". $_GET['type'] ."', address= '". $_GET['address'] ."' ";
$results=mysql_query ($strquery);




header( 'Location:list.php' ) ;


?>