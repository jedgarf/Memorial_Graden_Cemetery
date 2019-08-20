<?php 
 require 'database-config.php';

 session_start();

 $username = "";
 $password = "";
 
 if(isset($_POST['username'])){
  $username = $_POST['username'];
 }
 if (isset($_POST['password'])) {
  $password = md5($_POST['password']);

 }
 

 $q = 'SELECT * FROM users WHERE username=:username AND password=:password';

 $query = $db->prepare($q);

 $query->execute(array(':username' => $username, ':password' => $password));


 if($query->rowCount() == 0){
  header('Location: index.php?err=1');
 }else{

  $row = $query->fetch(PDO::FETCH_ASSOC);

  session_regenerate_id();
  $_SESSION['sess_user_id'] = $row['id'];
  $_SESSION['sess_username'] = $row['username'];
        $_SESSION['sess_userrole'] = $row['role'];

        echo $_SESSION['sess_userrole'];
  session_write_close();

  if( $_SESSION['sess_userrole'] == "admin"){
  header('Location: adminpage.php');
  }else{
   header('Location: userpage/userpage.php');
  }
  
  
 }


?>