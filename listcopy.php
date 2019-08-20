<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) || $role!="admin"){
      header('Location: index.php?err=2');
    }
?>
<?php
    
    
    if(isset($_POST['search']))
    {
        $valueToSearh = $_POST['valueToSearh']; 
        $query = "SELECT * FROM list WHERE firstname LIKE '%".$valueToSearh."%' OR lastname LIKE '%".$valueToSearh."%' OR lot_number LIKE '%".$valueToSearh."%'";
        $result = filterRecord($query);
    }
   
    
    function filterRecord($query)
    {
        include("config.php");
        $filter_result = mysqli_query($mysqli, $query);
        return $filter_result;
    }
?>
<html>
<head>
<title>cemetery</title>
<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scale=0"/>
<script src="script/jquery-3.2.1.min"></script>

</head>
<style type="text/css">
	*{
		margin:0;
		padding: 0;
	}
body{
	font-family: 'Open Sans';
}
a{
	text-decoration: none;
}
div#header{
	width: 100%;
	height: 70px;
	background-color: #2c3e50;
	margin: 0 auto;
}
.logo{
	float: left;
	margin-top: 20px;
	margin-left: 30px;
  text-shadow: 3px 4px #000002;
}
.logo, .logoadmin{
	position: inline-block;
}
.logoadmin{
	padding-top: 25px;
float: right;
padding-right: 20px; 
}
h2{
	font-size: 20px;
	color:#b7bee2;
}
.logo a{
	font-size: 2.3em;
	color:#d3d5d6;
	font-family: Impact;
}
span{
    color:blue;
  font-family: Impact;
}
.logo a span{
	font-weight: 300;
}
div#container{
	width: 100%;
	margin: 0 auto;
}
.sidebar{
	width: 200px;
	height: 100%;
	background-color: #171717;
	float: left;
	
}
.content{
	width: auto;
	margin-left: 200px;
	height: 100%;
	background-image:url(4.jpg);
    background-size: cover;
	padding: 15px;	
}
.content p{
	color: #424242;
	font-size: 1.2em;
}
ul#nav{

}
ul#nav li{
	list-style: none;
}
ul#nav li a{
	color:#ccc;
	display: block;
	padding: 15px;
	font-size: 1.1em;
	border-bottom: 1px solid #0A0A0A;
	-webkit-transition: 0.2s;
	-moz-transition: 0.2s;
	-o-transition: 0.2s;
	transition: 0.2s;
}
ul#nav li a:hover{
	background-color: #07849e;
	color: #fff;
	padding-left: 30px;
}
ul#nav li a.selected{
	background-color: #07849e;
	color: #fff;
}


@media only screen and (max-width: 320px){
.sidebar{
	width: 100%;
}
.content{
	margin-left: none;
}
}
@media only screen and (min-width: 320px)
{
	.mobile{
		display: none;
	}
	.sidebar{
		height: 100%;
	}
.admin-logo{
	width: 20px;
	height: 20px;
}
h1{
	color: #05fdff;
}

input[type=search]{
    left:50px;
    width: 300px;
    height: 40px;
    background-color: white;
    border: 1px solid gray;
    border-radius: 5px;
    color: gray;
     font-family: courier;
    font-size: 16px;
    font-weight: 400;
    padding: 10px;
}
button[type=submit]{
    left:50px;
    width: 100px;
    height: 40px;
    background-color: blue;
    border: 1px solid gray;
    border-radius: 5px;
    color: white;
     font-family: courier;
    font-size: 16px;
    font-weight: 400;
    padding: 10px;
}
.link2{
 width: 180px;
    height: 70px;
    
    background:  #f76d6d;
    border: 1px solid gray;
    border-radius: 4px;
    color: white;
     font-family: courier;
    font-size: 12px;
    font-weight: 400;
    padding: 4px;
}
.link1{
 width: 180px;
    height: 70px;
    
    background: rgba(222, 18, 18, 0.95);
    border: 1px solid gray;
    border-radius: 4px;
    color: white;
     font-family: courier;
    font-size: 12px;
    font-weight: 400;
    padding: 4px;
}
.link3{
 width: 250px;
    height: 70px;
    
    background: #6ef76e;
    border: 1px solid gray;
    border-radius: 4px;
    color: white;
     font-family: courier;
    font-size: 12px;
    font-weight: 400;
    padding: 4px;
}
.button {
  text-decoration: none;
 width: 300px;
    height: 40px;
    background-color: #ea506e;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
     font-family: courier;
    font-size: 16px;
    font-weight: 400;
    padding: 10px;
}
.button2 {
  text-decoration: none;
  left:90%;
 width: 300px;
    height: 40px;
    background-color: #39a8e6;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
     font-family: courier;
    font-size: 16px;
    font-weight: 400;
    padding: 10px;
}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #c6d8f4;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 25%;
    height: 86%;
    border-radius: 5px;
}

/* The Close Button */
.close {
    color:red;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
button{
    top:20%;
    width: 200px;
    height: 40px;
    background-color: #065c69;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
     font-family: courier;
    font-size: 16px;
    font-weight: 400;
    padding: 10px;
}
input[type=text]{
    width: 300px;
    height: 40px;
    background-color: white;
    border: 1px solid gray;
    border-radius: 5px;
    color: gray;
     font-family: courier;
    font-size: 16px;
    font-weight: 400;
    padding: 10px;
}
.styled-select select {
   background: white;
   width: 268px;
   padding: 5px;
   font-size: 16px;
   line-height: 1;
   border: 2;
   font-family: courier;
   border-radius: 3;
   height: 34px;
   color: gray;
   border: 1px solid gray;
   }

   .styled-select1 select {
   background: white;
   width: 150px;
   padding: 5px;
   font-size: 16px;
   line-height: 1;
   border: 2;
   font-family: courier;
   border-radius: 3;
   height: 34px;
   color: gray;
   border: 1px solid gray;
   }
   input[type=submit]{
    left:50px;
    width: 300px;
    height: 40px;
    background-color: blue;
    border: 1px solid gray;
    border-radius: 5px;
    color: white;
     font-family: courier;
    font-size: 16px;
    font-weight: 400;
    padding: 10px;
}
table {
    border-collapse: separate;
  background-color: #FFFFFF;
    border-spacing: 0;
    width: 100%;
  color: #666666;
    text-shadow: 0 1px 0 #FFFFFF;
  border: 1px solid #CCCCCC;
  box-shadow: 0 5px 5px -5px rgba(0, 0, 0, 0.3);
  margin: 0 auto;
  font-family: arial;
  margin-top: 20px;
}
table thead tr th {
    background: none repeat scroll 0 0 #EEEEEE;
    color: #222222;
    padding: 10px 14px;
    text-align: left;
  border-top: 0 none;
  font-size: 12px;
}
table tbody tr td{
    background-color: #FFFFFF;
  font-size: 11px;
    text-align: left;
  padding: 10px 14px;
  border-top: 1px solid #DDDDDD;
}
#pagination {
  text-align: center;
  margin-top: 20px;
}
#pagination a {
  border: 1px solid #CCCCCC;
  padding: 5px 10px;
  font-family: arial;
  text-decoration: none;
  background: none repeat scroll 0 0 #EEEEEE;
  color: #222222;
}
#pagination a:hover {
  background-color: #FFFFFF;
}
a#active{
  background-color: #FFFFFF;
}

</style>

<body>

<div id="header">
	<div class="logo"><a href="">Memorial<span>Garden</span></a></div>
	<div class="logoadmin"><h2><b><img src="admin1.png" alt="homepage" class="admin-logo" />
                            
                        </b><?php echo $_SESSION['sess_username'];?><h2></div>
</div>

<div id="container">
	<div class="sidebar">
		<ul id="nav">
			<li><a href="adminpage.php">DashBoard</a></li>
			<li><a class="selected" href="list.php">List</a></li>
			<li><a href="">Lot Table</a></li>
			<li><a href="">Map</a></li>
			<li><a href="">Account</a></li>
			<li><a href="">Profile</a></li>
			<li><a href="">Buckups</a></li>
			<li><a onclick="myFunction()" href="">Logout</a></li>
			       <script>
function myFunction() {
    var txt;
    var r = confirm("Are You Sure To Logout?");
    if (r == true) {
       <?php
       echo 'window.location="logout.php";';
       ?>
    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>
		</ul>
	</div>
	<div class="content">
		<h1>Decease</h1>
		<hr>
		<br>
		<br>
		 <a href="print_all.php" target="blank" class="button">Print All</a>
                <a href="#" target="blank" class="button2">Old Client</a>
                 <button id="myBtn" >Add New Client</button>
<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="add">
<h2 style="color:black">Add New</h2>
<form id="add" name="add" method="get" action="save2.php">
 
 <div class="styled-select">
 <select name="type" required>
 <option value="">Type of Lot</option>
 <option value="Appartment">Apartment</option>
 <option value="Musileyo">Musileyo</option>
 <option value="Family lot">Family Lot</option>
 </select></div><br>

  <div class="styled-select1">
   <select name="lot_number" required>
    <option value="">Lot No.</option>
  <?php
  include("connection3.php");
        $q = mysqli_query($con,"SELECT * from lot_table");
                                while($row=mysqli_fetch_array($q)){
                                    echo '<option value="'.$row['lot_number'].'">'.$row['lot_number'].'</option>';
                                }
                            ?>
</select>                           
 </div><br>


<input name="dateofdeath" type="text" id="dateofdeath" class="form-control" placeholder="Date Of Death" required><br><br>

<input name="dateofbirth" type="text" id="dateofbirth" class="form-control" placeholder="Date Of Birth" required><br><br>

<input name="lastname" type="text" id="lastname" class="form-control" placeholder="Lastname" required><br><br>

<input name="firstname" type="text" id="firstname" placeholder="Firstname" required><br><br>

<input name="address" type="text" id="address" placeholder="Address" required><br><br>

<input name="price" type="text" id="price" placeholder="Price" required><br><br>
</label>
<p>
<label>
<input type="submit" name="Submit" value="SAVE" class="btn btn-default"/>
</label>
</p>
</form>
</div>
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




<br><br>

		<center>
<form action="" method="POST">
<input type="search" name="valueToSearh" placeholder="Search">
<button type="submit" class="signupbtn" name="search" >Search</button>
</center><br>
</form>
<center>

<?php

 
echo "<table border='1'>
<thead'>
     <th colspan='11'>Record List</th>
<tr>
<th font color='blue'>Lot Number</th>
<th>First Name</th>
<th>Last Name</th>
<th>Address</th>
<th>Date Of Death</th>
<th>Date Of Birth</th>
<th>Price</th>
<th>Type</th>
<th>Update</th>
<th>Delete</th>
<th>Print</th>
</tr>
</thead>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td bgcolor='#c7d0cf'>" . $row['lot_number'] . "</td>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['dateofdeath'] . "</td>";
echo "<td>" . $row['dateofbirth'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['type'] . "</td>";

echo "<td><a href='edit2.php?buried_id=".$row['buried_id']."' style='text-decoration:none' class='link3' >Edit</a></td>";
echo "<td><a href='delete2.php?buried_id=".$row['buried_id']."' style='text-decoration:none' class='link1'>Delete</a></td>";

echo "<td><a href='print.php?buried_id=".$row['buried_id']."' style='text-decoration:none' class='link2'>Print</a></td>";
echo "</tr>";
}
echo "</table>";

?>
</center>

	</div>
</div>

</body>
</html>
