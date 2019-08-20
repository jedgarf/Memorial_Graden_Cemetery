<?php
include("config.php");

$lot_number = $_GET['lot_number'];


$sql = "DELETE FROM lotnot_table WHERE lot_number='$lot_number'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record successfully deleted!");';
	echo 'window.location="lot.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="lot.php";';
	echo '</script>';
}
?>

<?php
include("config.php");

$lot_number = $_GET['lot_number'];


$sql = "DELETE FROM list WHERE lot_number='$lot_number'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record successfully deleted!");';
	echo 'window.location="lot.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="lot.php";';
	echo '</script>';
}
?>