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
			

			<h3>Memorial Garden Cemetery Map</h3>

			<img src="cemme1.png" style="width: 100%;">
		




			</div>
	
	
	
	

	</div>
</body>


</html>