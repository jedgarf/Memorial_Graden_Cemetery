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
 background: -moz-linear-gradient(#fff, #10170e);
  background: -webkit-linear-gradient(#fff, #10170e);
  background: -o-linear-gradient(#fff, #10170e);
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
padding-top: 100px;
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
input[type=tel]{
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
input[type=password]{
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
button[type=mit]{
   top:20%;
    width: 150px;
    height: 30px;
    background-color: #065c69;
    border: 1px solid white;
    border-radius: 3px;
    color: white;
     font-family: courier;
    font-size: 20px;
    font-weight: 400;
    margin-top: 30px;
    
}
input[type=search]{
     margin-left: 180px;
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
  top:20%;
    width: 70px;
    height: 30px;
    background-color: blue;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
     font-family: courier;
    font-size: 15px;
    font-weight: 400;
    margin-top: 30px;

}
input[type=submit]{
  top:20%;
    width: 100px;
    height: 40px;
    background-color: blue;
    border: 1px solid white;
    border-radius: 5px;
    color: white;
     font-family: courier;
    font-size: 20px;
    font-weight: 400;
    margin-top: 30px;
}
.link1{
 width: 180px;
    height: 70px;
    text-shadow: 1px 2px black;
    background: rgba(222, 18, 18, 0.95);
    border: 1px solid gray;
    border-radius: 4px;
    color: white;
    font-family: Pristina;
    font-size: 14px;
    font-weight: 400;
    padding: 4px;
}
.styled-select2 select {
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

.mainbo{
    width: 100%;
    height: 60% auto;
    padding-bottom: 20px;
      background: -moz-linear-gradient(#fff, #2999a9);
  background: -webkit-linear-gradient(#fff, #2999a9);
  background: -o-linear-gradient(#fff, #2999a9);
     border: 1px solid black;
    margin-top: 20px;
}
.se{
    margin-right: 200px;
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
  width: 350px;
  position: relative;
  margin-top: 10px;
  margin-left: 40%;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
 background: -moz-linear-gradient(#fff, #2999a9);
  background: -webkit-linear-gradient(#fff, #2999a9);
  background: -o-linear-gradient(#fff, #2999a9);
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

.button2 {
 text-decoration: none;
  left:90%;
 width: 150px;
    height: 15px;
     background-color: blue;
      text-shadow: 1px 2px black;
    border: 1px solid white;
    border-radius: 10px;
    color: white;
     font-family: Pristina;
    font-size: 15px;
    padding: 10px 10px;
    margin-left: 10px;
  
  
   
}
.modalbott{
  margin-top: 20px;

}
.container{
  margin-top: 30px;
}

.th{
  font-size: 25px;
}

table {
          width: 90%;
          color:#000000;
        }
                    table, th, td{
    border: 1px solid gray;
    border-collapse: collapse;
 background-color:#e0dede;
  height: 33px;
   font-family: Pristina;
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
                      #ans{
                        width: 150px;
                      }
                     #ans, #fav{
                      display: inline-block;
                     }
                      #fav{
                        height: 40px;
                        border-radius: 5px;
                      }

</style>

<body>
<SCRIPT language=Javascript>
       <!--
       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
            function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
         
        return false;
            return true;
    }//-->
    </SCRIPT>
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
      <li><a class="selected" href="userlist.php"><i class="fa fa-users fa-fw" aria-hidden="true"></i>&nbsp; Account</a></li>
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

  <div class="content">
        <div id="dash">
    <h1>User Account</h1></div>
    <hr>

      <!-- Row -->
          <div class="mainbo">
          <div class="modalbott">
               <a href="#openModal"  class="button2"><i class="fa fa-plus-circle fa-fw" style="font-size: 17px;" aria-hidden="true"></i>&nbsp; Add New User</a></div>
                  <div id="openModal" class="modalDialog1">
  <div>
    <a href="#close" title="Close" class="close1">X</a>
    <h2 class="mo">Add User</h2><br>
  <form id="add" name="add" method="get" action="save3.php">

<div class="styled-select2">
 <select name="role" required>
 <option value="">User Type</option>
 <option value="admin">administrator</option>
 <option value="user">user</option>
 

 
 </select></div><br>


<label style="color:black">FIRSTNAME:
<input name="firstname" type="text"   onKeyPress="return ValidateAlpha(event);" id="firstname" class="form-control" required>
</label><br>
<label style="color:black">LASTNAME:<br>
<input name="lastname" type="text" onKeyPress="return ValidateAlpha(event);" id="lastname" required>
</label ><br>

<label style="color:black">ADDRESS:<br>
<input name="address" type="text" id="address" placeholder="Barangay,City,Province" required>
</label><br>

<label style="color:black">Mobile No.(11)<br>
 <input id="contact" type="tel" pattern=".{11}"  name="contact" onkeypress="return isNumberKey(event)"  maxlength="11" required ></label><br>

 <label style="color:black">Security Question:<br>
 <select name="quest" id="fav">
   <option>What is Your Favorite Food?</option>
   <option>What is Your Favorite Sport?</option>
   <option>What is Your Favorite Color?</option>
 </select></label>


 <input type="text" id="ans" name="ans" maxlength="50" required placeholder="Answer"><br> 

<label style="color:black">USERNAME:<br>
<input name="username" style=" text-transform: lowercase;" type="text" id="username" required>
</label><br>

<label style="color:black">PASSWORD:<br>
<input name="password" pattern=".{6,100}" required title="atleast 6 character" type="password" id="password" required>

</label><br>

<label style="color:black">CONFIRM PASSWORD:<br>
<input name="confirmpassword" type="password" id="confirmpassword" required><br>
<input type="checkbox"  name="reveal" id="reveal" onchange="reveal_pass(this);">Show Password?<br>
</label>
<script type="text/javascript">

function reveal_pass(check_box)
{
        var textbox_elem = document.getElementById("confirmpassword");


    if(check_box.checked)

    textbox_elem.setAttribute("type", "text");

    else

    textbox_elem.setAttribute("type", "password");


   var textbox_elem = document.getElementById("password");


    if(check_box.checked)

    textbox_elem.setAttribute("type", "text");

    else

    textbox_elem.setAttribute("type", "password");


}


</script>


<label>
<input type="submit" name="Submit" value="SAVE" class="btn btn-default"/>
</label>
</p>
</form>
  </div>
</div>








<div class="container">
<center>



<!-- The Modal -->

<?php require 'connect.php'; ?>
<center>
   <table border="1" cellpadding="0" cellspacing="0">
          <thead>
            <th class="th" colspan='6'>User Account</th>
            <tr>

                <th> <strong>Role</strong> </th>
              <th> <strong>Name</strong> </th>
              <th> <strong>Address</strong> </th>
              <th> <strong>Contact</strong> </th>
              <th> <strong>Username</strong> </th>
              <th> <strong>Delete</strong> </th>
            </tr>
          </thead>
          <tbody>
<?php
$sql = "SELECT * from users where id != '29'";

//echo $sql . "<br />";
$select = $conn->query($sql);

while($row = $select->fetch_assoc())
{
    echo "<tr>";
      echo "<td> " . $row["role"]. "</td>";
       echo "<td> " . $row["lastname"] . "," . $row["firstname"] ."</td>";
    echo "<td> " . $row["address"]. " </td>";
   
  echo "<td> " . $row["contact"]. "</td>";
  echo "<td> " . $row["username"] . "</td>";
echo "<td><a href='delete3.php?id=".$row['id']."' style='text-decoration:none' class='link1'><i class='fa fa-trash fa-fw' aria-hidden='true'></i></a></td>";
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

  </div>  
</div>
</center>
</body>
</html>
