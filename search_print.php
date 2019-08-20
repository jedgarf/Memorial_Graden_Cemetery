 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: white;
		}
		td{
			text-align: center;
		}
		input[type=button]{
			height: 30px;
			width: 100px;
			background-color: blue;
			color: white;
			border-radius: 5px;
		}
		td{
			font-style: Bell Mt;
			font-size: 17px;
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
	</style>
</head>
<body>
<?php
	if (isset($_POST['sub'])) {

		require 'connect.php';

		$type = $_POST['type'];
		$search = $_POST['search'];

		$sql = "select * from appartment_table where $type = '$search' union all
				select * from museleo_table where $type = '$search' union all
				select * from familylot_table where $type = '$search'";
		$result = $conn->query($sql);

		echo "<table width='100%'>";

		if ($result->num_rows == 0) {
		echo "<tr>";
		echo "<th>";
		echo "0 Result";
		echo "</th>";
		echo "</tr>";
		}else{
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
		echo "<tr>";
		echo "<td colspan = '6'>";
		echo"<br><br>";
		echo "<a href=\"print2.php?type=$type&search=$search\" ><input type='button' value='Print'></a>";
		echo "</td>";
		echo "</tr>";
		}
		echo "</table>";
	}
?>
</body>
</html>