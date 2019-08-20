<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) || $role!="admin"){
      header('Location: index.php?err=2');
    }
?>

<html>
<head>
<title>cemetery</title>
<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scale=0"/>
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script> 
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
		<div id="search">
        <label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
</div>   
<br /> 
  
      <table border="1" cellpadding="0" cellspacing="0" id="resultTable">
          <thead>
            <tr>
              <th> <strong>Name</strong> </th>
              <th> <strong>Address</strong> </th>
              <th> <strong>Date</strong> </th>
        <th> <strong>Price</strong> </th>
          <th> <strong>Type</strong> </th>
            </tr>
          </thead>
          <tbody>
<?php
include("connectionsearch.php");
$sql = "SELECT * from list" ;

//echo $sql . "<br />";
$select = mysql_query($sql);

while($row = mysql_fetch_assoc($select))
{
    echo "<tr>";
    echo "<td> " . $row["lastname"] . ", " . $row["firstname"] . "</td>";
  echo "<td> " . $row["address"]. "</td>";
  echo "<td> " . $row["dateofbirth"] . "</td>";
  echo "<td> " . $row["price"] . "</td>";
  echo "<td> " . $row["type"] . "</td>";
    echo "</tr>";
  
}
?>
        </tbody>
       </table>
       </div> 
       </center>   
</div>

</body>
</html>
