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
<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"></script>
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
 #image-map {
      width: 85%;
      height: 500px;
      border: 1px solid #ccc;
      margin-bottom: 10px;
    }
    span{
    color:blue;
  font-family: Vivaldi;
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
      <li><a  href="adminpage.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a></li>
      <li><a href="appartment.php"><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i>&nbsp; Appartment</a></li>
      <li><a href="museleo.php"><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i>&nbsp; Museleo</a></li>
      <li><a href="family.php"><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i>&nbsp; Family Lot</a></li>
      <li><a  href="printsearch.php"><i class="fa fa-search fa-fw" aria-hidden="true"></i>&nbsp; Search/Print</a></li>
      <li><a href="map.php" class="selected"><i class="fa fa-map fa-fw" aria-hidden="true"></i>&nbsp; Map</a></li>
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
    <h1>Map</h1>

    <a href="print_map.php" target="blank"><button style="width: 100px; height: 40px; background-color: gray; border-radius: 5px; border: 1px solid white; color: white; ">Print Map</button></a><br><br>
     
<center>
  <div id="image-map"></div>

    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script>
    // Using leaflet.js to pan and zoom a big image.
    // See also: http://kempe.net/blog/2014/06/14/leaflet-pan-zoom-image.html
    // create the slippy map
    var map = L.map('image-map', {
      minZoom: 1,
      maxZoom: 4,
      center: [0, 0],
      zoom: 1,
      crs: L.CRS.Simple
    });
    // dimensions of the image
    var w = 3300,
        h = 1700,
        url = 'cemme1.png';
    // calculate the edges of the image, in coordinate space
    var southWest = map.unproject([0, h], map.getMaxZoom()-1);
    var northEast = map.unproject([w, 0], map.getMaxZoom()-1);
    var bounds = new L.LatLngBounds(southWest, northEast);
    // add the image overlay, 
    // so that it covers the entire map
    L.imageOverlay(url, bounds).addTo(map);
    // tell leaflet that the map is exactly as big as the image
    map.setMaxBounds(bounds);
    </script>
</center>





  </div>


</body>
</html>
