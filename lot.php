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
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script> 
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
#header{
  position: fixed;
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
  font-family: Pristina;
	color:#ccc;
	display: block;
	padding: 15px;
	font-size: 1.2em;
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
	color:#f32929;
  font-family: Pristina;
  font-size: 40px;
   text-shadow: 1px 2px black;
}

span{
    color:blue;
  font-family: Vivaldi;
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
    width: 23%;
    height: 25%;
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
  
.mainbo{
    padding: 10px 25px;
    height: 300px auto;
    width: 60%;
    background-color: rgba(108, 117, 117, 0.5);
    margin-top: 50px;
    margin-left: 30px;
    border: 1px solid black;
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
input[type=submit]{
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
input[type=search]{
    left:50px;
    width: 200px;
    height: 30px;
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
    width: 70px;
    height: 30px;
    background-color: blue;
    border: 1px solid gray;
    border-radius: 5px;
    color: white;
     font-family: courier;
    font-size: 16px;
    font-weight: 400;
   
}
button{
    top:20%;
    width: 100px;
    height: 30px;
    background-color: #065c69;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
     font-family: courier;
    font-size: 16px;
    font-weight: 400;
  
}
h4{
	font-size: 25px;
	color: black;
    font-family:Forte;
}


}
#dash{
    margin-top: 70px;
}
h3{
    color: red;
}

   .main, #lotdiv{
    display: inline-block;
   }
   
   .red{
    background-color: gray;
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
.styled-select1 select {
   background: white;
   width: 190px;
   padding: 5px;
   font-size: 16px;
   line-height: 1;
   border: 2;
  font-family: Pristina;
   text-shadow: 1px 2px black;
   border-radius: 5;
   height: 30px;
   color:white;
   background-color: green;
   border: 1px solid gray;
   }


  .modalDialog1 {
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
.modalDialog1:target {
  opacity:1;
  pointer-events: auto;
}

.modalDialog1 > div {
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
.close1 {
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

.close1:hover { background: #00d9ff; }



 .modalDialog3 {
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
.modalDialog3:target {
  opacity:1;
  pointer-events: auto;
}

.modalDialog3 > div {
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
.close3 {
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

.close3:hover { background: #00d9ff; }

.button2 {
 text-decoration: none;
  left:90%;
 width: 150px;
    height: 15px;
     background-color: #39a8e6;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
    font-family: Pristina;
    font-size: 15px;
    padding: 10px 10px;
    margin-top: 90px;
  }
  .button3 {
 text-decoration: none;
  left:90%;
 width: 150px;
    height: 15px;
     background-color: blue;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
    font-family: Pristina;
    font-size: 15px;
    padding: 10px 10px;
    margin-top: 90px;
  }
  .addview{
    width: 500px;
    height: 100px ;
   text-shadow: 1px 2px black;
    border-radius: 5px;
    border:1px solid black;
  }
  
.styled-select3 select {
   background: white;
   width: 130px;
   padding: 5px;
   font-size: 16px;
   line-height: 1;
   border: 2;
   font-family: courier;
   border-radius: 5;
   height: 36px;
   color: gray;
   border: 1px solid gray;
   }
.styled-select select {
   background: white;
   width: 130px;
   padding: 5px;
   font-size: 16px;
   line-height: 1;
   border: 2;
   font-family: courier;
   border-radius: 5;
   height: 36px;
   color: gray;
   border: 1px solid gray;
   }
.styled-select, .styled-select3{
  display: inline-block;
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
		<li><a href="adminpage.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a></li>
      <li><a href="list.php"><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i>&nbsp; List</a></li>
      <li><a href="lot.php" class="selected"><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i>&nbsp; Lot</a></li>
      <li><a href=""><i class="fa fa-map fa-fw" aria-hidden="true"></i>&nbsp; Map</a></li>
      <li><a href="userlist.php"><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Account</a></li>
      <li><a href="adminprofile.php"><i class="fa fa-user-md fa-fw" aria-hidden="true"></i>&nbsp; Profile</a></li>
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
    </div>
	<div class="content">
        <div id="dash">
		<h1>Lot Monitoring</h1></div>
		<hr>

      <!-- Row -->
           <div class="mainbo">
            <div class="addview"><center>
           <br>
          


           <a href="#openModal3"  class="button3"><i class="fa fa-plus-circle fa-fw" style="font-size: 17px;" aria-hidden="true"></i>&nbsp; Add New Slot No.</a>
           <a href="#openModal"  class="button2"><i class="fa fa-plus-circle fa-fw" style="font-size: 17px;" aria-hidden="true"></i>&nbsp; Add New Area No.</a>

              <div id="openModal" class="modalDialog1">
              <div>
              <a href="#close" title="Close" class="close1">X</a>
               <h2 class="mo">Add Area No.</h2><br>
               <form id="add" name="add" method="get" action="savearea.php">
                <input name="a_number" type="text" id="a_number" placeholder="" required><br><br>
                </label>
                  <p>
                <label>
                <input type="submit" name="Submit" value="SAVE" class="btn btn-default"/>
                </label>
                  </p>
                </form>
                </div>
                </div>
      


                   <div id="openModal3" class="modalDialog3">
              <div>
              <a href="#close" title="Close" class="close3">X</a>
               <h2 class="mo">Add New Slot</h2><br>
               <form id="add" name="add" method="get" action="savelot.php">
                 <div class="styled-select3">
   <select name="area_number" required>
    <option value="">Area No.</option>
  <?php
  include("connection3.php");
        $q = mysqli_query($con,"SELECT * from area_table");
      while($row=mysqli_fetch_array($q)){
      echo '<option value="'.$row['a_number'].'">'.$row['a_number'].'</option>';
      }
      ?>
</select>                           
 </div>
            

            <div class="styled-select">
 <select name="s_type" required>
 <option value="">Type of Lot</option>
 <option value="Appartment">Apartment</option>
 <option value="Musileyo">Musileyo</option>
 <option value="Family lot">Family Lot</option>
 </select></div>   <br><br>
 <div class="text">
   <input name="slot_number" type="text" id="slot_number" placeholder="Slot No" required></div><br>
                  <p>
                <label>
                <input type="submit" name="Submit" value="SAVE" class="btn btn-default"/>
                </label>
                  </p>
                </form>
                </div>
                </div>
 </div><br></center>
<!-- The Modal -->





   
   
       </center>
       </div>     
</body>
</html>
