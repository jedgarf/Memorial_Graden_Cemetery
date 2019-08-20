<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
   
?>
<?php
include("config.php");

$username = $_POST['username'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$sql = "UPDATE users SET lastname='$lastname', firstname='$firstname', address='$address', contact='$contact', username='$username'
WHERE username='".$_SESSION['sess_username']."'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Admin Info successfully updated!");';
	echo 'window.location="logout.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="index.php";';
	echo '</script>';
}
?>