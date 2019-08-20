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
  color:#d3d5d6;
  font-family: Vivaldi;
}
span{
    color:blue;
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
  margin-top: 69px;

  
}
.content{
  width: auto;
  margin-left: 200px;
  height: 100%;
 background-image:url(4.jpg);
 background-attachment: fixed;
 background-repeat: no-repeat;
    background-size: cover;
    height: 11100px;
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





.link2{
 width: 100px;
    height: 20px;
    
    background:  #444141;
    border: 1px solid gray;
    border-radius: 4px;
    color: white;
     font-family: courier;
    font-size: 11px;
    font-weight: 400;
    padding: 4px;
}
.link1{
 width: 100px;
    height: 20px;
    
    background: rgba(222, 18, 18, 0.95);
    border: 1px solid gray;
    border-radius: 4px;
    color: white;
     font-family: courier;
    font-size: 11px;
    font-weight: 400;
    padding: 4px;
}
.link3{
 width: 100px;
    height: 20px;
    
    background: green;
    border: 1px solid gray;
    border-radius: 4px;
    color: white;
     font-family: courier;
    font-size: 11px;
    font-weight: 400;
    padding: 4px;
}
table {
          width: 100%;
          color:#000000;
        }
                    table, th, td{
    border: 1px solid gray;
    border-collapse: collapse;
 background-color:#e0dede;
  height: 33px;
   font-family: Bell Mt;
  }

                      th.sortable:hover { color: black;
                       }
                      th.sorted-asc, th.sorted-desc  { color: black; }

                      td {
                       background-color: white;
                        font-size: 17px;
                    padding-left: 50px;
                         height: 30px;
                         
                      }
                      td.odd {
                       background-color: white;
                         font-size: 17px;
                         padding-left: 50px;
                         height: 30px;
                      }
                      
                      td.hovered {
                        background-color: lightblue;
                        color: #666;
                      }
                      

#maincon{
  margin-top: 30px;
}
input[type=text]{
    width: 300px;
    height: 34px;
    background-color: white;
    border: 1px solid gray;
    border-radius: 5px;
    color: gray;
     font-family: courier;
    font-size: 16px;
    font-weight: 400;
    padding: 10px;
}
input[type=date]{
    width: 300px;
    height: 34px;
    background-color: white;
    border: 1px solid gray;
    border-radius: 5px;
    color: gray;
     font-family: courier;
    font-size: 16px;
    font-weight: 400;
    padding: 10px;
}
#search{
  margin-left: 30px;
  margin-top: 20px;
}
#dash{
  margin-top: 58px;
}

#bott{
  margin-top: 10px;
}


.styled-select select {
   background: white;
   width: 268px;
   padding: 5px;
   font-size: 16px;
   line-height: 1;
   border: 2;
   font-family: courier;
   border-radius: 5;
   height: 30px;
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
   border-radius: 5;
   height: 30px;
   color: gray;
   border: 1px solid gray;
   }
   button{
    top:20%;
    width: 200px;
    height: 28px;
    background-color: #065c69;
    border: 1px solid white;
    border-radius: 3px;
    color: white;
     font-family: courier;
    font-size: 20px;
    font-weight: 400;
   
}
input[type=submit]{
    width: 150px;
    height: 30px;
    background-color: blue;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
     font-family: courier;
    font-size: 16px;
    font-weight: 400;
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
  width: 370px;
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

.mo{
color: black
}
#bodymain{
  width: 800px;
  height: 38px;
  border:1px solid black;
  background-color: rgba(170, 187, 186, 0.5);
  padding-top: 15px;
}



.modalDialog5 {
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
.modalDialog5:target {
  opacity:1;
  pointer-events: auto;
}

.modalDialog5 > div {
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
.close5 {
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


.close5:hover { background: #00d9ff; }

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
.logoutmodal1{
  width: 200px;
 padding-left: 20px;
 padding-right: 20px;
 padding-top: 10px;
 padding-bottom: 10px;
 font-family: Pristina;
  height: 20px;
  background-color: green;
  color: white;
  border-radius: 5px;
  border:1px solid white;
}
.logoutmodal2{
  width: 200px;
 padding-left: 20px;
 padding-right: 20px;
 padding-top: 10px;
 padding-bottom: 10px;
 font-family: Pristina;
  height: 20px;
  background-color: blue;
  color: white;
  border-radius: 5px;
   border:1px solid white;
}
.logoutmodal3{
  width: 200px;
 padding-left: 20px;
 padding-right: 20px;
 padding-top: 10px;
 font-family: Pristina;
 padding-bottom: 10px;
  height: 20px;
  background-color: orange;
  color: white;
   border:1px solid white;
  border-radius: 5px;
}
.button4 {
  text-decoration: none;
  left:90%;
 width: 150px;
    height: 15px;
    background-color: #6b6b96;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
      font-family: Pristina;
    font-size: 15px;
   
    padding: 10px 10px;
  }

.button5 {
  text-decoration: none;
  left:90%;
 width: 150px;
    height: 15px;
    background-color: #5e57da;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
      font-family: Pristina;
    font-size: 15px;
   
    padding: 10px 10px;
  }

.button6 {
  text-decoration: none;
  left:90%;
 width: 150px;
    height: 15px;
    background-color: #e07b98;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
      font-family: Pristina;
    font-size: 15px;
   
    padding: 10px 10px;
  }



  .modalDialog6 {
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
.modalDialog6:target {
  opacity:1;
  pointer-events: auto;
}

.modalDialog6 > div {
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
.close6 {
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
.close6:hover { background: #00d9ff; }


.modalDialog7 {
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
.modalDialog7:target {
  opacity:1;
  pointer-events: auto;
}

.modalDialog7 > div {
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
.close7 {
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
.close7:hover { background: #00d9ff; }


.modalDialog8 {
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
.modalDialog8:target {
  opacity:1;
  pointer-events: auto;
}

.modalDialog8 > div {
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
.close8 {
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
.close8:hover { background: #00d9ff; }
.modalDialog9 {
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
.modalDialog9:target {
  opacity:1;
  pointer-events: auto;
}

.modalDialog9 > div {
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
.close9 {
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
.close9:hover { background: #00d9ff; }

.th{
  font-size: 30px;
  background-color: #383131;
  color: white;
   text-shadow: 1px 2px black
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
    <li><a  href="adminpage.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a></li>
      <li><a class="selected" href="list.php"><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i>&nbsp; List</a></li>
      <li><a href="lot.php"><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i>&nbsp; Lot</a></li>
      <li><a href="map.php"><i class="fa fa-map fa-fw" aria-hidden="true"></i>&nbsp; Map</a></li>
      <li><a href="userlist.php"><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Account</a></li>
      <li><a href="adminprofile.php"><i class="fa fa-user-md fa-fw" aria-hidden="true"></i>&nbsp; Profile</a></li>
      <li><a href="backupdata.php"><i class="fa fa-database fa-fw" aria-hidden="true"></i>&nbsp; Backup</a></li>
      <li><a href="#openModal9"  ><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp; Logout</a></li>
    </ul>
  </div>

  <div id="openModal9" class="modalDialog9">
  <div>
    <a href="#close9" title="Close" class="close9">X</a>
    <h2 class="mo">Are You Sure to Logout??</h2><br>
       <a href="logout.php" class="logoutmodal">YES</a>
        <a href="#close9" title="Close" class="closelog">NO</a>


    </div>
    </div>
         
  <div class="content">
  <div id="dash">
    <h1>Decease Record</h1>
    </div><hr>
    <div id="mainback">
<div id="bott">
  





<!-- content -->
<div id="bodymain"><center>

  
                  <a href="apartment.php"  class="button4"><i class="fa fa-table fa-fw" aria-hidden="true"></i>&nbsp; Appartment</a>
                    <a href="list.php"  class="button5"><i class="fa fa-table fa-fw" aria-hidden="true"></i>&nbsp; All Records</a>
                      <a href="familylot.php"  class="button6"><i class="fa fa-table fa-fw" aria-hidden="true"></i>&nbsp; Family Lot</a>
                </center>
                </div>




           
<!-- The Modal -->

                <div id="openModal2" class="modalDialog2">
  <div>
    <a href="#close2" title="Close" class="close2">X</a>
    <h2 class="mo">New Client</h2><br>
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
<label style="color:black">Date Of Death:<br>
<input name="dateofdeath" type="date" id="dateofdeath" class="form-control" placeholder="yyyy/dd/mm" required><br>
</label>
<label style="color:black">Date of Birth:<br>
<input name="dateofbirth" type="date" id="dateofbirth" class="form-control" placeholder="Date Of Birth" required><br>
</label>
<label style="color:black">Lastname:<br>
<input name="lastname" pattern="[a-zA-Z][a-zA-Z0-9\s]*" type="text" id="lastname" class="form-control" placeholder="Lastname" required><br></label>
<label style="color:black">Firstname:<br>
<input name="firstname" pattern="[a-zA-Z][a-zA-Z0-9\s]*" type="text" id="firstname" placeholder="Firstname" required><br>
</label>
<label style="color:black">Middle Initial:<br>
<input name="middle" pattern="[a-zA-Z][a-zA-Z0-9\s]*" maxlength="2" type="text" id="middle" placeholder="Middle Initial" required><br>
</label>
<label style="color:black">Address:<br>
<input name="address" pattern="[a-zA-Z][a-zA-Z0-9\s]*" type="text" id="address" placeholder="Address" required><br><br>
</label>
<p>
<label>
<input type="submit" name="Submit" value="SAVE" class="btn btn-default"/>
</label>
</p>
</form>
  </div>
</div>










      <!------ Old ---->
     <div id="openModal" class="modalDialog1">
        <div>
    <a href="#close1" title="Close" class="close1">X</a>
    <h2 class="mo">Choose Type</h2><br>
   <a href="#openModal6" class="logoutmodal1">Apartment</a>
        <a href="#openModal7" class="logoutmodal2">Musileyo</a>
        <a href="#openModal8" class="logoutmodal3">Family Lot</a>
  </div>
</div>



 <div id="openModal6" class="modalDialog6">
        <div>
    <a href="#close6" title="Close6" class="close6">X</a>
    <h2 class="mo">Appartment</h2><br>
   <form id="add" name="add" method="get" action="saveold.php">
 
 <input type="hidden" name="type" value="Appartment">

  <div class="styled-select1">
   <select name="lot_number" required>
    <option value="">Lot No.</option>
  <?php
  include("connection3.php");
        $q = mysqli_query($con,"SELECT * from lotnot_table");
      while($row=mysqli_fetch_array($q)){
      echo '<option value="'.$row['lot_number'].'">'.$row['lot_number'].'</option>';
      }
      ?>
</select>                           
 </div><br>
<label style="color:black">Date Of Death:<br>
<input name="dateofdeath" type="date" id="dateofdeath" class="form-control" placeholder="yyyy/dd/mm" required><br>
</label>
<label style="color:black">Date of Birth:<br>
<input name="dateofbirth" type="date" id="dateofbirth" class="form-control" placeholder="Date Of Birth" required><br>
</label>
<label style="color:black">Lastname:<br>
<input name="lastname" pattern="[a-zA-Z][a-zA-Z0-9\s]*" type="text" id="lastname" class="form-control" placeholder="Lastname" required><br></label>
<label style="color:black">Firstname:<br>
<input name="firstname" pattern="[a-zA-Z][a-zA-Z0-9\s]*" type="text" id="firstname" placeholder="Firstname" required><br>
</label>
<label style="color:black">Middle Initial:<br>
<input name="middle" pattern="[a-zA-Z][a-zA-Z0-9\s]*" maxlength="2" type="text" id="middle" placeholder="Middle Initial" required><br>
</label>
<label style="color:black">Address:<br>
<input name="address" pattern="[a-zA-Z][a-zA-Z0-9\s]*" type="text" id="address" placeholder="Address" required><br><br>
</label>
<p>
<label>
<input type="submit" name="Submit" value="SAVE" class="btn btn-default"/>
</label>
</p>
</form>
  </div>
</div>




<div id="openModal7" class="modalDialog7">
        <div>
    <a href="#close7" title="Close7" class="close7">X</a>
    <h2 class="mo">Musileyo</h2><br>
   <form id="add" name="add" method="get" action="saveold.php">
 
 <input type="hidden" name="type" value="Musileyo">

  <div class="styled-select1">
   <select name="lot_number" required>
    <option value="">Lot No.</option>
  <?php
  include("connection3.php");
        $q = mysqli_query($con,"SELECT * from lotnot_table");
      while($row=mysqli_fetch_array($q)){
      echo '<option value="'.$row['lot_number'].'">'.$row['lot_number'].'</option>';
      }
      ?>
</select>                           
 </div><br>
<label style="color:black">Date Of Death:<br>
<input name="dateofdeath" type="date" id="dateofdeath" class="form-control" placeholder="yyyy/dd/mm" required><br>
</label>
<label style="color:black">Date of Birth:<br>
<input name="dateofbirth" type="date" id="dateofbirth" class="form-control" placeholder="Date Of Birth" required><br>
</label>
<label style="color:black">Lastname:<br>
<input name="lastname" pattern="[a-zA-Z][a-zA-Z0-9\s]*" type="text" id="lastname" class="form-control" placeholder="Lastname" required><br></label>
<label style="color:black">Firstname:<br>
<input name="firstname" pattern="[a-zA-Z][a-zA-Z0-9\s]*" type="text" id="firstname" placeholder="Firstname" required><br>
</label>
<label style="color:black">Middle Initial:<br>
<input name="middle" pattern="[a-zA-Z][a-zA-Z0-9\s]*" maxlength="2" type="text" id="middle" placeholder="Middle Initial" required><br>
</label>
<label style="color:black">Address:<br>
<input name="address" pattern="[a-zA-Z][a-zA-Z0-9\s]*" type="text" id="address" placeholder="Address" required><br><br>
</label>
<p>
<label>
<input type="submit" name="Submit" value="SAVE" class="btn btn-default"/>
</label>
</p>
</form>
  </div>
</div>




<div id="openModal8" class="modalDialog8">
        <div>
    <a href="#close8" title="Close8" class="close8">X</a>
    <h2 class="mo">Family Lot</h2><br>
   <form id="add" name="add" method="get" action="saveold.php">
 
 <input type="hidden" name="type" value="Family Lot">

  <div class="styled-select1">
   <select name="lot_number" required>
    <option value="">Lot No.</option>
  <?php
  include("connection3.php");
        $q = mysqli_query($con,"SELECT * from lotnot_table");
      while($row=mysqli_fetch_array($q)){
      echo '<option value="'.$row['lot_number'].'">'.$row['lot_number'].'</option>';
      }
      ?>
</select>                           
 </div><br>
<label style="color:black">Date Of Death:<br>
<input name="dateofdeath" type="date" id="dateofdeath" class="form-control" placeholder="yyyy/dd/mm" required><br>
</label>
<label style="color:black">Date of Birth:<br>
<input name="dateofbirth" type="date" id="dateofbirth" class="form-control" placeholder="Date Of Birth" required><br>
</label>
<label style="color:black">Lastname:<br>
<input name="lastname" pattern="[a-zA-Z][a-zA-Z0-9\s]*" type="text" id="lastname" class="form-control" placeholder="Lastname" required><br></label>
<label style="color:black">Firstname:<br>
<input name="firstname" pattern="[a-zA-Z][a-zA-Z0-9\s]*" type="text" id="firstname" placeholder="Firstname" required><br>
</label>
<label style="color:black">Middle Initial:<br>
<input name="middle" pattern="[a-zA-Z][a-zA-Z0-9\s]*" maxlength="2" type="text" id="middle" placeholder="Middle Initial" required><br>
</label>
<label style="color:black">Address:<br>
<input name="address" pattern="[a-zA-Z][a-zA-Z0-9\s]*" type="text" id="address" placeholder="Address" required><br><br>
</label>
<p>
<label>
<input type="submit" name="Submit" value="SAVE" class="btn btn-default"/>
</label>
</p>
</form>
  </div>
</div>






  <div id="openModal5" class="modalDialog5">
  <div>
    <a href="#close5" title="Close" class="close5">X</a>
    <h2 class="mo">Are You Sure to Logout??</h2><br>
       <a href="logout.php" class="logoutmodal">YES</a>
        <a href="#close5" title="Close" class="closelog">NO</a>
    </div>
    </div>

















<div id="maincon"></div>
<div id="search">
        <label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" placeholder="Search ..." />
</div> <br>
<center>
   <table border="1" cellpadding="0" cellspacing="0" id="resultTable">
          <thead>
            <th class="th" colspan='7'>Musileyo</th>
            <tr>
              <th> <strong>Lot No</strong> </th>
              <th> <strong>Name</strong> </th>
              <th> <strong>Address</strong> </th>
              <th> <strong>Date Of Birth</strong> </th>
                <th> <strong>Date Of Death</strong> </th>
          <th> <strong>Edit</strong> </th>
              <th> <strong>Delete</strong> </th>
            </tr>
          </thead>
          <tbody>
<?php
include("connectionsearch.php");
$sql = "SELECT * from list where type='musileyo'" ;

//echo $sql . "<br />";
$select = mysql_query($sql);

while($row = mysql_fetch_assoc($select))
{
    echo "<tr>";
    echo "<td> " . $row["lot_number"]. "</td>";
    echo "<td> " . $row["lastname"] . "," . $row["firstname"] ."  ,". $row["middle"] . "</td>";
  echo "<td> " . $row["address"]. "</td>";
  echo "<td> " . $row["dateofbirth"] . "</td>";
    echo "<td> " . $row["dateofdeath"] . "</td>";
echo "<td><a href='edit2.php?buried_id=".$row['buried_id']."' style='text-decoration:none' class='link3' ><i class='fa fa-edit fa-fw' aria-hidden='true'></i></a></td>";
echo "<td><a href='delete2.php?buried_id=".$row['buried_id']."' style='text-decoration:none' class='link1'><i class='fa fa-trash fa-fw' aria-hidden='true'></i></a></td>";

echo "</tr>";





    echo "</tr>"; 
     echo "</div>";
}
?>
        </tbody>
       </table>
       </div> 
       </center>
       </div>     

 
</body>
</html>
