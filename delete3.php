<?php
include("config.php");

$id = $_GET['id'];


$sql = "DELETE FROM users WHERE id='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record successfully deleted!");';
	echo 'window.location="userlist.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="userlist.php";';
	echo '</script>';
}
?>