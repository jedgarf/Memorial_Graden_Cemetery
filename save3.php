

<?php



include ("connection.php");


$connect=mysql_connect($servername,$username,$password);
$select_db=mysql_select_db($databasename);

if($_GET['password']!==$_GET['confirmpassword']) {

 echo '<script language="javascript">';
	echo 'alert("Password Not Match");';
	echo 'window.location="userlist.php#openModal";';
	echo '</script>';

}	else
{
$enctpass = md5($_GET['password']);
$strquery="INSERT INTO users SET firstname= '" . $_GET['firstname'] . "', lastname= '". $_GET['lastname'] ."', username= '". $_GET['username'] ."', password= '". $enctpass ."', role= '". $_GET['role'] ."', address= '". $_GET['address'] ."', contact= '". $_GET['contact'] ."', question= '". $_GET['quest'] ."', answer= '". $_GET['ans'] ."' ";
if($results=mysql_query ($strquery))
{

	 echo '<script language="javascript">';
	echo 'alert("New Account Created");';
	echo 'window.location="userlist.php";';
	echo '</script>';
}
else {

	echo '<script language="javascript">';
	echo 'alert("Username Already Exist");';
	echo 'window.location="userlist.php#openModal";';
	echo '</script>';
}}
?>
