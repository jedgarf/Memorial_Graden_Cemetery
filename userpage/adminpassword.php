<?php 

    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) || $role!="user"){
      header('Location: ../index.php?err=2');
    }
?>
<?php
    include("../config.php");
   
?>
<?php 
    $conn_db = mysql_connect("localhost","root","") or die();
    $sel_db = mysql_select_db("loginaccess",$conn_db) or die();
    if(isset($_POST['change_pwd']))
    {
    $old_password=md5($_POST['old_password']);
    $new_password=$_POST['new_password'];
    $enctpass = md5($_POST['new_password']);
    $con_password=$_POST['con_password'];
    $chg_pwd=mysql_query("select * from users where username='".$_SESSION['sess_username']."'");
    $chg_pwd1=mysql_fetch_array($chg_pwd);
    $data_pwd=$chg_pwd1['password'];
    if($data_pwd==$old_password){
    if($new_password==$con_password){
        $update_pwd=mysql_query("update users set password='$enctpass' where username='".$_SESSION['sess_username']."'");
       echo '<script language="javascript">';
    echo 'alert("Password successfully Change!");';
    echo 'window.location="logout.php";';
    echo '</script>';
     }
     else{
         echo '<script language="javascript">';
    echo 'alert("Your new and Retype Paasword is not match");';
    echo 'window.location="adminpassword.php";';
    echo '</script>';
      
     }
    }
    else
    {
        echo '<script language="javascript">';
    echo 'alert("Your old Password is wrong");';
    echo 'window.location="adminpassword.php";';
    echo '</script>';
     
    }}
?>
<html>
<head>
<title>cemetery</title>
<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scale=0"/>
<script src="../script/jquery-3.2.1.min"></script>
<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
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
	background-image:url(../4.jpg);
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

fieldset{
    width:500px; 
    height: 250px;
    border:1px solid black;
    margin:0 auto;
    border-radius:5px;
  background: -moz-linear-gradient(#fff, #10170e);
  background: -webkit-linear-gradient(#fff, #10170e);
  background: -o-linear-gradient(#fff, #10170e);
    padding: 10px 10px;
    margin-top: 50px;
    }
.error{ 
color:red;
}
legend{
    color: blue;
    font-family: Pristina;
 font-size: 27px;
 text-shadow: 1px 2px black;
}
p{
    height: 50px;
    
    
}
dl{
    width:450px; 
    float:left;
color: white;
 font-family: Pristina;
 font-size: 20px;
 text-shadow: 1px 2px black;
}
dt{
    width:150px;
    float:left;
    
}
dd{
    width:200px;
    float:left;
    }
dd input{
    color: black;
    width:300px;
    height:40px;
    border-radius: 10px;
    padding:5px;
    background: #e0dcdc;
    border: 1px solid black;
    }

input[type=text]{
    width: 300px;
    height: 40px;
    background-color: white;
    border: 1px solid gray;
    border-radius: 5px;
    color: #d2768a;
    font-family: 'Exo', sans-serif;
    font-size: 20px;
    font-weight: 400;
    padding: 10px;
}
input[type=password]{
    width: 300px;
    height: 40px;
    background-color: white;
    border: 1px solid gray;
    border-radius: 5px;
    color: #d2768a;
    font-family: 'Exo', sans-serif;
    font-size: 20px;
    font-weight: 400;
    padding: 10px;
}
input[type=submit]{
    width: 300px;
    height: 40px;
    background-color: blue;
    left: 30%;
    border-radius: 5px;
    color: white;
     font-family: courier;
    font-size: 16px;
    font-weight: 400;
    padding: 10px;
    margin-left: 100px;
}
h2{
    font-family: bold;
    font-size: 20px;
}
.span2{
    color:red;
    font-size: 20px;
  font-family: Pristina;
}
span{
    color:blue;
  font-family: Vivaldi;
}
.warning{
width: 50%;
height:2%;
left:28%;

padding: 10px 10px;
padding-top: 2px;
border-radius: 5px;
}
.h2size{
    color: white;
    font-family: Pristina;
     text-shadow: 1px 2px black;
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
.mo{
  color: black;
}
</style>

<body>

<div id="header">
	<div class="logo"><a href="">Memorial<span>Garden</span></a></div>
	<div class="logoadmin"><h2><b><img src="user.png" alt="homepage" class="admin-logo" />
                            
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
			
      <li><a href="userpage.php" ><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i>&nbsp; Museleo</a></li>
      <li><a href="appartment.php" ><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i>&nbsp; Appartment</a></li>
      <li><a href="family.php"><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i>&nbsp; Family Lot</a></li>
    <li><a  href="printsearch.php"><i class="fa fa-search fa-fw" aria-hidden="true"></i>&nbsp; Search/Print</a></li>
      <li><a href="map.php"><i class="fa fa-map fa-fw" aria-hidden="true"></i>&nbsp; Map</a></li>
      
      <li><a class="selected" href="adminprofile.php"><i class="fa fa-user-md fa-fw" aria-hidden="true"></i>&nbsp; Profile</a></li>
     
      <li><a href="#openModal2"  ><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp; Logout</a></li>


			   <div id="openModal2" class="modalDialog2">
  <div>
    <a href="#close2" title="Close" class="close2">X</a>
    <h2 class="mo">Are You Sure to Logout??</h2><br>
       <a href="logout.php" class="logoutmodal">YES</a>
        <a href="#close2" title="Close" class="closelog">NO</a>


    </div>
    </div> 
</script>
		</ul>
	</div>

	<div class="content">
        <div id="dash">
		<h1>User Password</h1></div>
		<hr>
        
          
                            <fieldset>
<legend>Change Password</legend>

<form method="post">
<dl><dt>Old Password</dt>
<dd><input type="password" name="old_password"  value="" required ></dd></dl><br><br><br>
<dl><dt>New Password</dt>
<dd><input type="password" name="new_password"  value=""  required></dd></dl><br><br><br>
<dl><dt>Retype New Password</dt>
<dd><input type="password" name="con_password"  value="" required ></dd></dl><br><br><br>
<p align="center"><input type="submit" value="Change" name="change_pwd"></p>
</form>
</fieldset>
<br>

<div class="warning">
<h2 class="h2size">Note:<span class="span2">Warning if you change password its automatically logout!!</span></h2>
      </div>     
        
</div>

</body>
</html>
