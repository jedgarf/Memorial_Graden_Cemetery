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
<?php
    include("config.php");
    $lot_number = $_GET['lot_number'];
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
#header{
   position: fixed;
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
  color: #d3d5d6;
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
   position: fixed;
   margin-top: 70px;
  
}
.content{
  width: auto;
  margin-left: 200px;
  height: 100%;
  background-image:url(4.jpg);
    background-size: cover;
  padding: 15px;  
   background-attachment: fixed;
 background-repeat: no-repeat;
  height: 1000px;
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
  color: #05fdff;
}

span{
    color:blue;
  font-family: Impact;
}
input[type=text]{
    width: 300px;
    height: 40px;
    background-color: white;
    border: 1px solid gray;
    border-radius: 5px;
    color: red;

     font-family: courier;
    font-size: 16px;
    font-weight: 400;
    padding: 10px;
}
#containeredit{
  padding-left: 100px;
  padding-right: 20px;
  padding-top: 20px;
  margin-top: 20px;
  margin-left: 300px;
  width: 400px;
  height: 520px;
  background-color: rgba(0,0,0,0.8);
  border: 1px solid white;
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
label{
  color:white;

}
h5{font-size: 30px;
font-family: ;
color: blue;

}
.styled-select select {
   background: white;
   width: 300px;
   padding: 5px;
   font-size: 16px;
   line-height: 1;
   border: 2;
   font-family: courier;
   border-radius: 3;
   height: 40px;
   color: gray;
   border: 1px solid gray;
   }

   #dash{
    margin-top: 70px;
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
      <li><a href="lot.php">Lot Table</a></li>
      <li><a href="">Map</a></li>
      <li><a href="userlist.php">Account</a></li>
      <li><a href="adminprofile.php">Profile</a></li>
      <li><a href="backupdata.php">Backup</a></li>
        <li><a href="#openModal2"  >Logout</a></li>


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
    <h1>Decease</h1></div>
    <hr>

      <!-- Row -->
              <div id="containeredit">
              <h5>Update</h5><br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<form action="update2.php" method="POST">
 
  <?php
    $result = mysqli_query($mysqli,"SELECT * FROM list WHERE lot_number ='lot_number'");
    while($row = mysqli_fetch_array($result))
    {

    echo"<input type='hidden' name='lot_number' value='{$row['lot_number']}' required>";
    echo"<input type='hidden' name='type' value='{$row['type']}' required>";

     echo"<label><b>Lastname</b><br>";
    echo"<input type='text' placeholder='First name' name='lastname'  required><br>";
     echo"<label><b>Firstname</b><br>";
    echo"<input type='text' placeholder='Middle name' name='firstname'  required><br>";
    
    echo"<label><b>Address</b><br>";
    echo"<input type='text' name='address' required><br>";
     echo"<label><b>Date Of Birth</b><br>";
    echo"<input type='text' name='dateofbirth' required><br>";
   echo"<label><b>Date Of Death</b><br>";
    echo"<input type='text' name='dateofdeath' required><br>";
     echo"<br>";
   
    echo"</label>";
    echo"<div class='clearfix'>";
    echo"<button type='submit' class='signupbtn'>Update</button>";
    echo"</div>";
   }
    ?>
  </div>
</form>

    
</div>

</body>
</html>
