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
.hre{
  color: blue;
  font-size: 25px;
  width: 70px;
  height: 30px;
  background-color: #b8bfbe;
 padding: 5px;
 border-radius: 2px;
}
table, th, td{
    border: 1px solid gray;
    border-collapse: collapse;
    
}
table
{
    width: 96%;
    top: 30%;

}

th, td{
    padding: 10px;
    
     font-family: courier;
}
th{
    background-color:#a4ade4;

    color:black;
}
tr:nth-child(even)
{
    background-color:white;
color:gray;
}
tr:nth-child(odd)
{
    background-color:white  ;
color:gray;
}
#ef{
  width: 100px;
 
  background-color: red;
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
    <center>
<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'loginaccess');
$results_per_page = 10;

$sql = "SELECT * FROM list ";
$result = mysqli_query($con,$sql);
 $number_of_results = mysqli_num_rows($result);

 






 $number_of_pages = ceil($number_of_results/$results_per_page);

if (!isset($_GET['page'])){
  $page = 1;
} else{
  $page = $_GET['page'];
}

$this_page_first_result = ($page-1)*$results_per_page;

$sql = "SELECT * FROM list LIMIT " . $this_page_first_result . ',' . $results_per_page;
$result = mysqli_query($con, $sql);

echo "<table border='1'>
<thead'>
     <th colspan='11'>Record List</th>
<tr>
<th font color='blue'>Lot Number</th>
<th>First Name</th>
<th>Last Name</th>
<th>Address</th>
<th>Date Of Death</th>
<th>Date Of Birth</th>
<th>Price</th>
<th>Type</th>
<th>Update</th>
<th>Delete</th>
<th>Print</th>
</tr>
</thead>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td bgcolor='#c7d0cf'>" . $row['lot_number'] . "</td>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['dateofdeath'] . "</td>";
echo "<td>" . $row['dateofbirth'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['type'] . "</td>";

echo "<td><a href='edit2.php?buried_id=".$row['buried_id']."' style='text-decoration:none' class='link3' >Edit</a></td>";
echo "<td><a href='delete2.php?buried_id=".$row['buried_id']."' style='text-decoration:none' class='link1'>Delete</a></td>";

echo "<td><a href='print.php?buried_id=".$row['buried_id']."' style='text-decoration:none' class='link2'>Print</a></td>";
echo "</tr>";
}
echo "</table>";
echo "<br>";


for ($page=1;$page<=$number_of_pages;$page++){
 
  echo '<a class="hre" href="list.php?page=' . $page . '"> ' . $page . '</a>';
 
}
?>

</center>
  </div>
</div>
 
</body>
</html>
