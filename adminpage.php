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
}
.content p{
  color: white;
  text-shadow: 1px 2px black;
  font-size: 1.5em;
  font-family: Pristina;
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
  font-family: Pristina;
  font-size: 1.2em;
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
div#box{
  margin-top: 15px;

}
div#box .box-top{
  color: #fff;
  text-shadow: 0px 1px solid #000;
  background-color: #2980b9;
  padding: 5px;
  padding-left: 15px;
  font-size: 1.6em;

  font-weight: 300;
}
.box-top{
  width: 570px;
   border-radius: 10px;
}
.box-panel{
  width: 560px;
   border-radius: 10px;
}
div#box .box-panel{
padding: 15px;
 
font-size: 1.2em;
color: #333;
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
.dash1{
  width: 100px;
  height: 100px;
}

 #vision{
   box-shadow: 10px 10px 5px rgba(18, 17, 21, 0.99);
width: 40%;
height:200px;
left:510px;
 border-radius: 10px;
    top: 80%;
position: absolute;
padding: 10px 25px;
  background-color: rgba(108, 117, 117, 0.5);
transform: translateX(-50%) translateY(-50%);
border: 1px solid black;
    border-collapse: collapse;
}
span{
    color:blue;
  font-family: Vivaldi;
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
#mainbox2{
margin-top:25px;
}





.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: white;
  font-size: 23px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: left;
 font-family: Lucida Calligraphy;
 text-shadow: 3px 4px #000002;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: white;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */

img{
 
  width: 100%;
  height: 100%;
}
#pic{
  width: 500px;
  height: 300px;
  background-color: white;
  border: 1px solid white;
  left:1080px;
    top: 49%;
position: absolute;
transform: translateX(-50%) translateY(-50%);
    border-collapse: collapse;
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
.span2{
  color: #5ed1ec;
    font-family: Pristina;
    font-size: 25px;
  text-shadow: 1px 2px black;
}
.h2size{
  font-size: 25px;
  color: white;
   font-family: Pristina;
    text-shadow: 1px 2px black;
}
.spa{
  
  font-size: 20px;
  color: white;
}
.admin-logo, .spa{
  display: inline-block;
}

</style>

<body>

<div id="header">
  <div class="logo"><a href="">Memorial<span>Garden</span></a></div>
 <div class="logoadmin"><h2><b><img src="admin1.png" alt="homepage" class="admin-logo" />
                            
                        </b>  <?php 
                                        $result = mysqli_query($mysqli,"SELECT * FROM users WHERE username ='".$_SESSION['sess_username']."'");
    while($row = mysqli_fetch_array($result))
    {
         echo"{$row['firstname']}";
        }?><h2></div>
</div>

<div id="container">
  <div class="sidebar">
    <ul id="nav">
      <li><a class="selected" href="adminpage.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a></li>



      <li><a href="appartment.php"><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i>&nbsp; Appartment</a></li>
      <li><a href="museleo.php"><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i>&nbsp; Museleo</a></li>
      <li><a href="family.php"><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i>&nbsp; Family Lot</a></li>
      <li><a  href="printsearch.php"><i class="fa fa-search fa-fw" aria-hidden="true"></i>&nbsp; Search/Print</a></li>
      <li><a href="map.php" ><i class="fa fa-map fa-fw" aria-hidden="true"></i>&nbsp; Map</a></li>
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
         
</script>
    </ul>
  </div>
  <div class="content">
    <h1>Dashboard</h1>
    <hr>
    <div id="mainbox2">
    <div id="box">
    <div class="box-top" style="text-align: center; color: black; text-shadow: 1px 1px white;  background: -moz-linear-gradient(#fff, #346b24);
  background: -webkit-linear-gradient(#fff, #346b24);
  background: -o-linear-gradient(#fff, #346b24);">Gapan Memorial Garden Cemetery <br>Mangino Gapan Nueva Ecija</div>
    <div class="box-panel">
   
       <h2 class="h2size">
             <?php 
             include "connectionview.php";
             ?>
                <?php
                       $q = mysqli_query($con,"SELECT * from museleo_table");
                     $num_rows = mysqli_num_rows($q);
                        echo $num_rows;
                                        ?>

                                        Decease Museleo  <i class="fa fa-users fa-fw" style="color:orange"; aria-hidden="true"></i></h2><hr>



                                        <h2 class="h2size">
                                         <?php
                       $q = mysqli_query($con,"SELECT * from appartment_table");
                       $num_rows = mysqli_num_rows($q);
                        echo $num_rows;
                                        ?>
                                         
                                        Decease Appartment<i class="fa fa-users fa-fw" style="color:green;" aria-hidden="true"></i></h2><hr>

                                        <h2 class="h2size">
                                           <?php
                       $q = mysqli_query($con,"SELECT * from familylot_table");
                       $num_rows = mysqli_num_rows($q);
                        echo $num_rows;
                                        ?>
                                        Decease Family Lot<i class="fa fa-users fa-fw" style="color:red;" aria-hidden="true"></i></h2><hr>
                                        <h2 class="h2size">
                                         <?php
                       $q = mysqli_query($con,"SELECT * from slot_table");
                       $num_rows = mysqli_num_rows($q);
                        echo $num_rows;
                                        ?>
                                        Available Slot <i class="fa fa-map-marker fa-fw" style="font-size:35px;color:blue;" aria-hidden="true"></i></h2><hr>
                                    
    </div>
    </div></div>

    
<div id="pic" style="margin-top: 70px;">
<center>
<div class="slideshow-container" >

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="10.jpg" >
  <div class="text">Memorial Garden Cemetery</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="12.jpg" >
  <div class="text">Find where the deceased was placed</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="11.jpg">
  <div class="text">Manage the lis of deceased in each lot</div>
</div>
    

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
</center>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
<div id="vision">
        <span class="span2">Our Vision</span>
                 <p class="p">Achieving excellence in the provision 
                 of quality cemetery facilities and services</p>
                 <span class="span2">Our Mission</span>
                 <p class="p">Delivering a caring and sensitive experience with burial,
                     cremation and memorialisation services that reflect the
                 Community's values and beliefs</p>

    </div>
  </div>


</body>
</html>
