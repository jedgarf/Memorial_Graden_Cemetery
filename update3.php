<?php
include("config.php");

$id = $_POST['id'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$username = $_POST['username'];
$role = $_POST['role'];
$password = $_POST['password'];
$sql = "UPDATE users SET lastname='$lastname', firstname='$firstname', username='$username', password='$password', role='$role'
WHERE id='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record successfully updated!");';
	echo 'window.location="home.php?page=users";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="home.php?page=list";';
	echo '</script>';
}
?>