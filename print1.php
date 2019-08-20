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
		<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
		
		</head>

		<style>
		@page { size: auto;  margin: 0mm; }
		
.container {
	width:75%;
	margin:auto;
}
		
.table {
    width: 100%;
    margin-bottom: 20px;
}	

.table-striped tbody > tr:nth-child(odd) > td,
.table-striped tbody > tr:nth-child(odd) > th {
    background-color: #f9f9f9;
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
		
		</style>
<script>
function printPage() {
    window.print();
}
</script>
		


<body>
<center>
<div id="header2">
<h2>
	Memorial Garden Cemetery

	<br><span>
		Mangino Gapan Nueva Ecija</span>
	</h2>
</div>
</center>
	<div class = "container">
		<div id = "header">
		<br/>
<button type="submit" id="print" onclick="printPage()">Print</button>
			<p style = "margin-left:30px; margin-top:50px; font-size:14pt; font-weight:bold;"></p>
        <div align="right">
		<b style="color:blue;">Date Prepared:</b>
		<?php include('current-date.php'); ?>
        </div>			
		<br/>
<?php
$D_id = $_GET['id'];
					include ('database.php');
					$result = $database->prepare ("SELECT * FROM appartment_table WHERE D_id='$D_id'");
?>
						<table class="table table-striped">
						  <thead>
								<tr>
									<th>Name</th>
									<th>Area No.</th>
									<th>Lot No.</th>
									<th>Type</th>
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
									<td style="text-align:center;"><?php echo $row_member['D_type']; ?></td>
								<td style="text-align:center;"><?php echo date("M d, Y ", strtotime ($row_member['D_dateofbirth'])); ?></td>
								<td style="text-align:center;"><?php echo date("M d, Y ", strtotime ($row_member['D_dateofdeath'])); ?></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
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