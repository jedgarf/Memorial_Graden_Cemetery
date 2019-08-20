<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) || $role!="admin"){
      header('Location: index.php?err=2');
    }
?>

<html>
 
<head>
		<title>Memorial Garden Cemetry Mangino Gapan Nueva Ecija</title>
		
		</head>

		<style>
		@page { size: auto;  margin: 0mm; }
		
.container {
	width:75%;
	margin:auto;
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

@media print{
#print {
display:none;
}
}



#print {
	width: 90px;
    height: 30px;
    font-size: 18px;
    background: white;
    border-radius: 4px;
	margin-left:28px;
	cursor:hand;
}
#header2{
	margin-top: 50px;
}
span{
	font-size: 20px;
}
#header2, #gapan, #logo{
	display: inline-block;
}		
		</style>
<script>
function printPage() {
    window.print();
}
</script>
		


<body>
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
	<div class = "container">
		<div id = "header">
		<br/>
<button type="submit" id="print" onclick="printPage()">Print</button>
			<p style = "margin-left:30px; margin-top:50px; font-size:14pt; font-weight:bold;">Appartment Type</p>
        <div align="right">
		<b style="color:black;">Date:</b>
		<?php include('current-date.php'); ?>
        </div>			
		<br/>
<?php
					include ('database.php');
					$result = $database->prepare ("SELECT * FROM appartment_table ");
?>
						<table class="table table-striped">
						  <thead>
								<tr>
									<th>Name</th>
									<th>Area No</th>
									<th>Lot No.</th>
									<th>Date of Birth</th>
									<th>Date of Death</th>
								</tr>
						  </thead>   
						  <tbody>
<?php
					$result ->execute();
					for ($count=0; $row_member = $result ->fetch(); $count++){
					$id = $row_member['D_id'];
?>
							<tr>
								<td style="text-align:center;"><?php echo  $row_member['D_lastname'] ,",", $row_member['D_firstname'],",", $row_member['D_middle']; ?></td>
								<td style="text-align:center;"><?php echo $row_member['D_area_number']; ?></td>
								<td style="text-align:center;"><?php echo $row_member['D_slot_number']; ?></td>
								<td style="text-align:center;"><?php echo date("M d, Y ", strtotime ($row_member['D_dateofbirth'])); ?></td>
								<td style="text-align:center;"><?php echo date("M d, Y ", strtotime ($row_member['D_dateofdeath'])); ?></td>
							</tr>
							
							
							<?php 
							}					
							?>
						  </tbody> 
					  </table> 

<br />
<br />

<b style="color:blue; font-size:15px;">
Prepared By: </b><?php
    include("config.php");
   
?> <?php 
                                        $result = mysqli_query($mysqli,"SELECT * FROM users WHERE username ='".$_SESSION['sess_username']."'");
    while($row = mysqli_fetch_array($result))
    {
         echo"{$row['firstname']} {$row['lastname']}";
        }?>



			</div>
	
	
	
	

	</div>
</body>


</html>