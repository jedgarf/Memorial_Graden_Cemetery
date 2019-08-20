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
<html moznomarginboxes mozdisallowselectionprint>
<head>
<title>cemetery</title>
<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scale=0"/>
<script src="../argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/application.js" type="text/javascript" charset="utf-8"></script> 
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
  background: -moz-linear-gradient(#fff, #10170e);
  background: -webkit-linear-gradient(#fff, #10170e);
  background: -o-linear-gradient(#fff, #10170e);
  float: left;
  position: fixed;
  margin-top: 69px;

  
}
.content{
  width: auto;
  margin-left: 200px;
  height: 100%;
 background-image:url(../4.jpg);
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
                    padding-left: 40px;
                         height: 30px;
                         
                         
                      }
                      td.odd {
                       background-color: white;
                         font-size: 17px;
                         padding-left: 40px;
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
    width: 350px;
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
input[type=date]{
    width: 350px;
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
#search{
  margin-left: 30px;
  margin-top: 20px;
}
#dash{
  margin-top: 58px;
}
.button {
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
   
}
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
  
   
}#bott{
  margin-top: 10px;
}
.button3 {
  text-decoration: none;
  left:90%;
 width: 150px;
    height: 15px;
    background-color: green;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
       font-family: Pristina;
    font-size: 15px;
   
    padding: 10px 10px;
  }

.styled-select select {
   background: white;
   width: 136px;
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

   .styled-select1 select {
   background: white;
   width: 100px;
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
   .styled-select3 select {
   background: white;
   width: 100px;
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

  width: 400px;
  height: 570px;
  position: relative;
  margin-top: 10px;
  margin-left: 35%;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
  background: -moz-linear-gradient(#fff, #10170e);
  background: -webkit-linear-gradient(#fff, #10170e);
  background: -o-linear-gradient(#fff, #10170e);
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
   text-shadow: 1px 2px black;
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
  color: blue;
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
.spa{
  
  font-size: 20px;
  color: white;
}
.admin-logo, .spa{
  display: inline-block;
}



.modalall {
   text-decoration: none;
  left:90%;
  text-shadow: 1px 2px #000002;
 width: 200px;
    height: 15px;
       background-color: #271fbb;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
    font-family: Pristina;
    font-size: 15px;
    padding: 10px 10px;
   
}

.styled-select, .styled-select1, .styled-select3{
display: inline-block;
}
.print, .dropdown{
  display: inline-block;
}

.dropbtn {
  margin-top: 10px;
    background-color: #5a73e6;
    color: white;
    font-size: 16px;
    border: 1px solid white;
    border-radius: 5px;
    cursor: pointer;
    height: 40px;
    width: 160px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {background-color: gray;
color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #2041d6;
}
.area1{
  width: 360px;
  height: 515px;
 
 margin-top: 10px;
 margin-left: 10px;
 padding-left: 10px;
  border-radius: 10px;
  
 
}
.headerarea{
  color: black;
  font-size: 30px;
}

.buttonadd{
  width: 90px;
  height: 20px;
  background-color: red;
  color: white;
  border-radius: 5px;
  font-size: 15px;
   padding-left: 20px;
 padding-right: 20px;
 padding-top: 8px;
 padding-bottom: 4px;
 margin-left: 150px;
}
.headerarea,.buttonadd{
  display: inline-block;
}






#s_number{
  width: 150px;

}
.styled-select3,.styled-select, .text{
  display: inline-block;
}
#a_number{
  width: 150px;
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
#D_middle{
  width: 173px;
   
}
#D_middle , #senior{
  display: inline-block;
}
#senior {
  border-radius: 5px;
   background: white;
   width: 170px;
   padding: 5px;
   font-size: 16px;
   line-height: 1;
   border: 2;
   font-family: courier;
   border-radius: 5;
   height: 40px;
   color: gray;
   border: 1px solid gray;
   }
</style>

<body>
<script type="text/javascript">
   function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }
</script>
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
      <li><a href="family.php" class="selected"><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i>&nbsp; Family Lot</a></li>
        <li><a  href="printsearch.php"><i class="fa fa-search fa-fw" aria-hidden="true"></i>&nbsp; Search/Print</a></li>
      <li><a href="map.php"><i class="fa fa-map fa-fw" aria-hidden="true"></i>&nbsp; Map</a></li>
   
      <li><a href="adminprofile.php"><i class="fa fa-user-md fa-fw" aria-hidden="true"></i>&nbsp; Profile</a></li>
     
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
<div class="print">
    <a href="#openModal2"  class="button"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i>&nbsp; New Client</a>
               </div>
               
                       <div class="dropdown">
  <button class="dropbtn"><i class='fa fa-print fa-fw' aria-hidden='true'></i>Print</button>
  <div class="dropdown-content">
    <a href="printappartment.php" target="blank">Appartment</a>
    <a href="printmusileyo.php" target="blank">Museleo</a>
     <a href="printfamily.php" target="blank">Family Lot</a>
  </div>
</div>
              

 





           
<!-- The Modal -->

                <div id="openModal2" class="modalDialog2">
                <div>
                <h2 class="headerarea">Family</h2>
                
  <div class="area1">
    <a href="#close2" title="Close" class="close2">X</a>

    <h2 class="mo">New Client</h2><br>

   <form id="add" name="add" method="get" action="savefamily.php">

<div class="styled-select1">
   <select name="D_area_number" required>
    <option value="">Area No.</option>
  <?php
  include("../connection3.php");
        $q = mysqli_query($con,"SELECT * from area_table");
      while($row=mysqli_fetch_array($q)){
      echo '<option value="'.$row['a_number'].'">'.$row['a_number'].' </option>';
      
      }
      ?>
</select>                           
 </div>

   

 <input type="hidden" name="D_type" value="family lot">
  <div class="styled-select1">
   <select name="s_number" required>
    <option value="">Slot No.</option>
  <?php
  include("../connection3.php");
        $q = mysqli_query($con,"SELECT * from slot_table where s_type='family lot'");
      while($row=mysqli_fetch_array($q)){
      echo '<option value="'.$row['s_number'].'">'.$row['s_number'].' </option>';
      
      }
      ?>
</select>                           
 </div>
 <br><br>
<label style="color:black">Date Of Death:<br>
<input name="D_dateofdeath" type="date" id="D_dateofdeath" class="death" placeholder="yyyy/dd/mm" required><br>
</label>
<label style="color:black">Date of Birth:<br>
<input name="D_dateofbirth" type="date" id="D_dateofbirth" class="birth" placeholder="Date Of Birth" required><br>
</label>
<label style="color:black">Lastname:<br>
<input name="D_lastname"  onKeyPress="return ValidateAlpha(event);"  type="text" id="D_lastname" class="form-control" placeholder="Lastname" required><br></label>
<label style="color:black">Firstname:<br>
<input name="D_firstname" onKeyPress="return ValidateAlpha(event);" type="text" id="D_firstname" placeholder="Firstname" required><br><br>
</label>
<input name="D_middle"   onKeyPress="return ValidateAlpha(event);" maxlength="2" type="text" id="D_middle" placeholder="Middle Name" required >



 <select name="D_extension_name"  id="senior">
 <option value="">Extension Name</option>
 <option value="Jr.">Jr.</option>
 <option value="II">II</option>
 <option value="III">III</option>
 <option value="IV">IV</option>
 <option value="V">V</option>
 </select><br>

<label style="color:black">Address:<br>
<input name="D_address"  type="text" id="D_address" placeholder="Address" required><br><br>
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









      <!------ Old ---->
   



 












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
            <th class="th" colspan='9'>Family Lot</th>
            <tr>

                <th> <strong>Area No</strong> </th>
              <th> <strong>Slot No</strong> </th>
              <th> <strong>Name</strong> </th>
              <th> <strong>Address</strong> </th>
              <th> <strong>Date Of Birth</strong> </th>
                <th> <strong>Date Of Death</strong> </th>
         
         
               <th> <strong>Print</strong> </th>
            </tr>
          </thead>
          <tbody>
<?php
include("../connectionsearch.php");
$sql = "SELECT * from familylot_table" ;

//echo $sql . "<br />";
$select = mysql_query($sql);

while($row = mysql_fetch_assoc($select))
{
    echo "<tr>";
      echo "<td> " . $row["D_area_number"]. "</td>";
    echo "<td> " . $row["D_slot_number"]. " <a href='oldfamily.php?D_id=".$row['D_id']."' style='text-decoration:none' class='link3' ><i class='fa fa-user-plus fa-fw' aria-hidden='true'></td>";
    echo "<td> " . $row["D_lastname"] . "," . $row["D_firstname"] ." " . $row["D_extension_name"] ." ,". $row["D_middle"] . "</td>";
  echo "<td> " . $row["D_address"]. "</td>";
  echo "<td> " . $row["D_dateofbirth"] . "</td>";
    echo "<td> " . $row["D_dateofdeath"] . "</td>";
 

echo "<td><a href='printonefamily.php?D_id=".$row['D_id']."' style='text-decoration:none' class='link2'  target='blank'><i class='fa fa-print fa-fw' aria-hidden='true'></i></a></td>";
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
