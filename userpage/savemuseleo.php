<?php
include ("../connection.php");
$connect=mysql_connect($servername,$username,$password);
$select_db=mysql_select_db($databasename);

$D_dateofdeath = $_GET['D_dateofdeath'];
$D_dateofbirth = $_GET['D_dateofbirth'];

if ($D_dateofdeath < $D_dateofbirth) {
        echo '<script language="javascript">';
	echo 'alert("Invalid Date Format");';
	echo 'window.location="userpage.php#openModal2";';
	echo '</script>';
    }
    else{


$strquery="INSERT INTO museleo_table SET D_lastname= '" . $_GET['D_lastname'] . "', D_dateofdeath= '". $_GET['D_dateofdeath'] ."', D_dateofbirth= '". $_GET['D_dateofbirth'] ."', D_firstname= '". $_GET['D_firstname'] ."', D_slot_number= '". $_GET['s_number'] ."', D_address= '". $_GET['D_address'] ."' , D_area_number= '". $_GET['D_area_number'] ."', D_middle= '". $_GET['D_middle'] ."',D_type= '". $_GET['D_type'] ."',D_extension_name= '". $_GET['D_extension_name'] ."'";
$results=mysql_query ($strquery);




header( 'Location:userpage.php' ) ;


?>
<?php
include("../config.php");

$s_number = $_GET['s_number'];


$sql = "DELETE FROM slot_table WHERE s_number='$s_number'";
if(mysqli_query($mysqli, $sql)){
    header( 'Location:userpage.php' ) ;
}}
?>






