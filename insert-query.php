<?php
require_once ('databasenew.php');

if (isset($_POST['btn_submit'])) {

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];
$role = $_POST['role'];

if ($password != $re_password) {
	echo "<script>alert('Your Password does not match . . .'); window.location = 'userlist.php' </script>";
}	else

{
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$insert_query = "INSERT INTO tbl_user (first_name, last_name, email, password, re_password, role)
VALUES (?, ?, ?, ?, ?, ?)";

$insert = $database->prepare($insert_query);
$insert->execute(array($first_name, $last_name, $email, $password, $re_password, $role));

echo "<script>alert('Account successfully added!'); window.location='userlist.php'</script>";
}
}
?>