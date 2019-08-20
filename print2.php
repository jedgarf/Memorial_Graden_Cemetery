<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) || $role!="admin"){
      header('Location: index.php?err=2');
    }
?>

<?php
$type = $_GET['type'];
$search = $_GET['search'];
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		td{
			text-align: center;
		}
		table {
          width: 100%;
          color:#000000;
        }
                    table, th, td{
    border: 1px solid gray;
    border-collapse: collapse;
  height: 33px;
   font-family: bold;
  }
  #header2, #gapan, #logo{
	display: inline-block;
}
	</style>
</head>
<script type="text/javascript">
	window.print();
</script>
<body>
<div >
	<center>
<div id="logo" style="margin-right: 20px;">
	<img src="images/cemetery.png" style="width: 60px; height: 60px;">
</div>
<div id="header2">

<h2>
<B style="font-size: 15px;">Republic of the Philippines</B><br>
	Gapan Memorial Garden Cemetery

	<br><span style="font-size: 15px;">
	 Km. 92 Mangino St, Gapan City 3105, Nueva Ecija<br>
	 	Tel. No. (044) 486-0806
	 </span>
	</h2>

</div>
<div id="gapan" style="margin-left: 20px;">
	<img src="images/gapan.png" style="width: 60px; height: 60px;">
</div>
</center>
</div><br><br>
<b style="color:black;">Date:</b>
		<?php include('current-date.php'); ?><br>
		<br>
<?php
$sql = "select * from appartment_table where $type = '$search' union all
				select * from museleo_table where $type = '$search' union all
				select * from familylot_table where $type = '$search'";
		$result = $conn->query($sql);
		echo "<table width='100%'>";
		echo "<tr>";
		echo "<th>";
		echo "Area Number";
		echo "</th>";
		echo "<th>";
		echo "Slot Number";
		echo "</th>";
		echo "<th>";
		echo "Name";
		echo "</th>";
		echo "<th>";
		echo "Date Of Birthdate";
		echo "</th>";
		echo "<th>";
		echo "Date of Death";
		echo "</th>";
		echo "<th>";
		echo "Type";
		echo "</th>";
		echo "</tr>";
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>";
			echo $row['D_area_number'];
			echo "</td>";
			echo "<td>";
			echo $row['D_slot_number'];
			echo "</td>";
			echo "<td>";
			echo $row['D_firstname']." ".$row['D_middle']." ".$row['D_lastname'];
			echo "</td>";
			echo "<td>";
			echo $row['D_dateofbirth'];
			echo "</td>";
			echo "<td>";
			echo $row['D_dateofdeath'];
			echo "</td>";
			echo "<td>";
			echo $row['D_type'];
			echo "</td>";
			echo "</tr>";
		}
		echo "</table>";
?><br><br>
<div align="right">
<b style="color:blue; font-size:15px;">
Prepared By: </b><?php
    include("config.php");
   
?> <?php 
                                        $result = mysqli_query($mysqli,"SELECT * FROM users WHERE username ='".$_SESSION['sess_username']."'");
    while($row = mysqli_fetch_array($result))
    {
         echo"{$row['firstname']} {$row['lastname']}";
        }?></div>
</body>
<script type="text/javascript">
	window.location = "print_success.php";
</script>

</html>