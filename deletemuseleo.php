<?php
include("config.php");

$D_id = $_GET['D_id'];


$sql = "DELETE FROM museleo_table WHERE D_id='$D_id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record successfully deleted!");';
	echo 'window.location="museleo.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="museleo.php";';
	echo '</script>';
}
?>