<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) || $role!="admin"){
      header('Location: index.php?err=2');
    }
?>
<?php
    include("config.php");
   
?>

<html>
<head>
<title>cemetery</title>
<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scale=0"/>
<script src="script/jquery-3.2.1.min"></script>
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
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
	margin-top: 10px;
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
	font-size: 2.7em;
	color: #d3d5d6;
	font-family: Vivaldi;
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
 background: -moz-linear-gradient(#fff, #10170e);
  background: -webkit-linear-gradient(#fff, #10170e);
  background: -o-linear-gradient(#fff, #10170e);
	float: left;
	
    
}
.content{
	width: auto;
	margin-left: 200px;
	height: 100%;
	background-image:url(4.jpg);
    background-size: cover;
	padding: 15px;	
padding-top: 30px;
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
	color:black;
	display: block;
	padding: 15px;
	font-size: 1.2em;
   font-family: Pristina;
	border-bottom: 1px solid #0A0A0A;
	-webkit-transition: 0.2s;
	-moz-transition: 0.2s;
	-o-transition: 0.2s;
	transition: 0.2s;
}
ul#nav li a:hover{
	background-color: #07849e;
	color: white;
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
	width: 30px;
	height: 30px;
    border-radius: 50%;
}
h1{
  color: #f32929;
  font-family: Pristina;
   text-shadow: 1px 2px black;
   font-size: 40px;

}
span{
    color:blue;
  font-family: Vivaldi;
}

.panelimage{
    width: 400px;
    height: 400px;
  background: -moz-linear-gradient(#fff, #10170e);
  background: -webkit-linear-gradient(#fff, #10170e);
  background: -o-linear-gradient(#fff, #10170e);
   border: 1px solid black;
    margin-top: 30px;
    border-radius: 5px;
}
.panelinfo{
    margin-top: 89px;
width: 40%;
height:470px;
left:74%;
border: 1px solid black;
 background: -moz-linear-gradient(#fff, #10170e);
  background: -webkit-linear-gradient(#fff, #10170e);
  background: -o-linear-gradient(#fff, #10170e);
 border-radius: 5px;
    top: 48%;
position: absolute;
padding: 10px 25px;
transform: translateX(-50%) translateY(-50%);
box-shadow: 20px;
    border-collapse: collapse;
     font-family: Pristina;
     font-size: 20px;
    
}
.adminpic{
    border-radius: 50%;
    margin-top: 50px;
}
h3{
    font-size: 28px;
    color: white;
      text-shadow: 1px 2px black;
     font-family: Pristina;
     font-size: 30px;

}
.acc{
    background-color: white;
    font-size: 28px;
    color: black;
      text-shadow: 1px 2px white;
}
input[type=text]{
    width: 300px;
    height: 40px;
    background-color: rgba(0,0,0,0.0);
    border: 1px solid rgba(0,0,0,0.0);
    border-radius: 5px;
    color: black;
    font-family: 'Exo', sans-serif;
    font-size: 20px;
    font-weight: 400;
    padding: 10px;
    
}
button[type=submit]{
    width: 100px;
    height: 40px;
    background-color: blue;
    border: 1px solid blue;
    border-radius: 5px;
    color: white;
    font-family: 'Exo', sans-serif;
    font-size: 15px;
    font-weight: 400;
    padding: 10px;
}

.modalDialog2 {
  position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0,0,0,0.8);
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}
.modalDialog2:target {
  opacity:1;
  pointer-events: auto;
}

.modalDialog2 > div {
  width: 300px;
  position: relative;
  margin: 10% auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
  background: -moz-linear-gradient(#fff, #999);
  background: -webkit-linear-gradient(#fff, #999);
  background: -o-linear-gradient(#fff, #999);
}
.close2 {
  background: #606061;
  color: #FFFFFF;
  line-height: 25px;
  position: absolute;
  right: -12px;
  text-align: center;
  top: -10px;
  width: 24px;
  text-decoration: none;
  font-weight: bold;
  -webkit-border-radius: 12px;
  -moz-border-radius: 12px;
  border-radius: 12px;
  -moz-box-shadow: 1px 1px 3px #000;
  -webkit-box-shadow: 1px 1px 3px #000;
  box-shadow: 1px 1px 3px #000;
}


.close2:hover { background: #00d9ff; }

.no{
  width: 50px;
  height: 50px;
}
.mo{
  color: black;
}
.closelog{
  width: 200px;
 padding-left: 20px;
 padding-right: 20px;
 padding-top: 10px;
 padding-bottom: 10px;
  height: 20px;
  background-color: green;
  color: white;
  border-radius: 5px;
}
.logoutmodal{
  width: 200px;
 padding-left: 20px;
 padding-right: 20px;
 padding-top: 10px;
 padding-bottom: 10px;
  height: 20px;
  background-color: red;
  color: white;
  border-radius: 5px;
}
.changepassword{
  color: blue;
  font-size: 27px;
   
   margin-left: 340px;
}
label{
  color: #55c1bd;
   text-shadow: 1px 1px black;
}
.adin{
  color: #6c74d8;
  font-size: 30px;
}
</style>

<body>

<div id="header">
	<div class="logo"><a href="">Memorial<span>Garden</span></a></div>
	<div class="logoadmin"><h2><b><img src="admin1.png" alt="homepage" class="admin-logo" />
                            
                        </b><?php 
                                        $result = mysqli_query($mysqli,"SELECT * FROM users WHERE username ='".$_SESSION['sess_username']."'");
    while($row = mysqli_fetch_array($result))
    {
         echo"{$row['firstname']}";
        }?><h2></div>
</div>

<div id="container">
	<div class="sidebar">
		<ul id="nav">
			<li><a  href="adminpage.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a></li>
     <li><a href="appartment.php"><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i>&nbsp; Appartment</a></li>
      <li><a href="museleo.php"><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i>&nbsp; Museleo</a></li>
      <li><a href="family.php"><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i>&nbsp; Family Lot</a></li>
     <li><a  href="printsearch.php"><i class="fa fa-search fa-fw" aria-hidden="true"></i>&nbsp; Search/Print</a></li>
      <li><a href="map.php"><i class="fa fa-map fa-fw" aria-hidden="true"></i>&nbsp; Map</a></li>
      <li><a href="userlist.php"><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Account</a></li>
      <li><a class="selected" href="adminprofile.php"><i class="fa fa-user-md fa-fw" aria-hidden="true"></i>&nbsp; Profile</a></li>
      <li><a href="backupdata.php"><i class="fa fa-database fa-fw" aria-hidden="true"></i>&nbsp; Backup</a></li>
      <li><a href="#openModal2"  ><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp; Logout</a></li>


       <div id="openModal2" class="modalDialog2">
  <div>
    <a href="#close2" title="Close" class="close2">X</a>
    <h2 class="mo">Are You Sure to Logout??</h2><br>
       <a href="logout.php" class="logoutmodal">YES</a>
        <a href="#close2" title="Close" class="closelog">NO</a>


    </div>
    </div>
			   

		</ul>
	</div>

	<div class="content">
        <div id="dash">
		<h1>Admin Profile</h1></div>
		<hr>
        
    <div class="panelimage">
    <center>
        <img src="admin1.png" alt="homepage" class="adminpic" /><br>
        <h3>   <?php 
                                        $result = mysqli_query($mysqli,"SELECT * FROM users WHERE username ='".$_SESSION['sess_username']."'");
    while($row = mysqli_fetch_array($result))
    {
         echo"{$row['firstname']}";
        }?></h3><br>
       <h3 class="acc">
            Admin Account
        </h3>
        </center>
    </div>
      <div class="panelinfo">
      <h1 class="adin">Admin Info</h1>
          <form action="updateadmin.php" method="POST">
 
  <?php
    $result = mysqli_query($mysqli,"SELECT * FROM users WHERE username ='".$_SESSION['sess_username']."'");
    while($row = mysqli_fetch_array($result))
    {
        echo"<label><b>First Name</b><br>";
   echo"<input type='text'  name='firstname' value='{$row['firstname']}' required> <hr>";
    echo"<label><b>Lastname</b><br>";
    echo"<input type='text' name='lastname' value='{$row['lastname']}' required> <hr>";

    echo"<label><b>Address</b><br>";
    echo"<input type='text'  name='address' value='{$row['address']}' required> <hr>";
    echo"<label><b>Contact</b><br>";
    echo"<input type='text'  name='contact' value='{$row['contact']}' required> <hr>";


    echo"<label><b>Username</b><br>";
    echo"<input type='text'  name='username' value='{$row['username']}' required><hr>";
    
    echo"<div class='clearfix'>";
    echo"<br>";
    echo"<button type='submit' class='signupbtn'>Update</button>";
    echo"</div>";
    }?>
 
    <a href="adminpassword.php" class="changepassword">Change Password???</a>
   

  </div>
</form>

        
</div>

</body>
</html>
