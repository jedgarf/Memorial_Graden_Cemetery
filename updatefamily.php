<?php
include("config.php");

$D_dateofdeath = $_POST['D_dateofdeath'];
$D_dateofbirth = $_POST['D_dateofbirth'];

if ($D_dateofdeath < $D_dateofbirth) {
        echo '<script language="javascript">';
	echo 'alert("Invalid Date Format");';
	echo 'window.location="museleo.php";';
	echo '</script>';
    }
    else{


$D_id = $_POST['D_id'];
$D_lastname = $_POST['D_lastname'];
$D_firstname = $_POST['D_firstname'];
$D_dateofdeath = $_POST['D_dateofdeath'];
$D_dateofbirth = $_POST['D_dateofbirth'];
$D_address = $_POST['D_address'];
$D_type = $_POST['D_type'];
$D_middle = $_POST['D_middle'];
$sql = "UPDATE familylot_table SET D_lastname='$D_lastname',D_dateofbirth='$D_dateofbirth',D_dateofdeath='$D_dateofdeath', D_firstname='$D_firstname', D_type='$D_type', D_address='$D_address', D_middle='$D_middle'
WHERE D_id='$D_id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record successfully updated!");';
	echo 'window.location="family.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="family.php";';
	echo '</script>';
}}
?>
