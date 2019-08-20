<?php
include ("connection.php");
$connect=mysql_connect($servername,$username,$password);
$select_db=mysql_select_db($databasename);

include "connectionview.php";
$D_slot_number = $_GET['D_slot_number'];
 


  $q = mysqli_query($con,"SELECT * from museleo_table where D_slot_number='$D_slot_number'");
                     $num_rows = mysqli_num_rows($q);
                        
                         if ($num_rows > 4){
                        	echo '<script language="javascript">';
	echo 'alert("This Slot is already full!!");';
	echo 'window.location="museleo.php";';
	echo '</script>';
                        }
                        else{
                        	
$D_dateofdeath = $_GET['D_dateofdeath'];
$D_dateofbirth = $_GET['D_dateofbirth'];

if ($D_dateofdeath < $D_dateofbirth) {
        echo '<script language="javascript">';
	echo 'alert("Invalid Date Format");';
	echo 'window.location="museleo.php";';
	echo '</script>';
    }
    else{





$strquery="INSERT INTO museleo_table SET D_lastname= '" . $_GET['D_lastname'] . "', D_dateofdeath= '". $_GET['D_dateofdeath'] ."', D_dateofbirth= '". $_GET['D_dateofbirth'] ."', D_firstname= '". $_GET['D_firstname'] ."', D_slot_number= '". $_GET['D_slot_number'] ."', D_type= '". $_GET['D_type'] ."', D_address= '". $_GET['D_address'] ."' , D_area_number= '". $_GET['D_area_number'] ."', D_middle= '". $_GET['D_middle'] ."', D_extension_name= '". $_GET['D_extension_name'] ."', D_id= '". $_GET['D_id'] ."'";
$results=mysql_query ($strquery);




header( 'Location:museleo.php' ) ;

}

}

?>