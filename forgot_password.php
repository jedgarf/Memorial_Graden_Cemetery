<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
body{
	background-image:url(4.jpg);
    background-size: cover;
}
	#form{
		width: 650px;
		height: 500px;
		background-color: gray;
		margin-left: 30%;
		margin-top: 3%;
		border-radius: 10px;

	}
	input[type=text]{
		height: 30px;
		width: 300px;
		border-radius: 5px;
	}
	input[type=password]{
		height: 30px;
		width: 300px;
		border-radius: 5px;
	}
	.main{
		padding-top: 40px;
		width: 600px;
		height: 460px;
		 background: -moz-linear-gradient(#fff, #999);
  background: -webkit-linear-gradient(#fff, #999);
  background: -o-linear-gradient(#fff, #999);te;
	}
	.select{
		width: 300px;
		height: 35px;
		border-radius: 5px;
	}
		input[type=submit]{
		height: 30px;
		width: 100px;
		border-radius: 5px;
		background-color: blue;
		color: white;
		border:1px solid white;
	}
</style>
<body>

</body>
</html>


<?php require 'config.php'; ?>
<form method="POST">

	<div id="form" >

<center>

	<div class="main">
	<h1>Forgot Password</h1>
	<center>
			<label>Username:</label>
		<input type="text" name="user" placeholder="username" required="">
		<br>	<br>
		<label>Security Question:</label>
		<select name="quest" class="select">
			<?php
			$sql = "select distinct(question) from users";
			$result = $mysqli->query($sql);
			if ($result->num_rows == 0) {
				echo '<option>No Available Question</option>';
			}else{
				while ($row = $result->fetch_assoc()) {
					echo '<option>'.$row['question'].'</option>';
				}
			}
			?>
		</select>
		<br>	<br>
		<label>Answer</label>
		<input type="text" name="ans" required="">
		<br>	<br>
		<label>New Password:</label>
		<input type="password" name="pass" id="pass" required="">
		<br>	<br>
		<label>Confirm New Password:</label>
		<input type="password" name="repass" id="repass" required="">
		<br>	
		<input align="left" type="checkbox"  name="reveal" id="reveal" onchange="reveal_pass(this);">Show Password?<br><br>
		<input type="submit" name="sub" value="Submit">
	</div>
	</div>
</form>
</center>
<script type="text/javascript">

function reveal_pass(check_box)
{
        var textbox_elem = document.getElementById("pass");


    if(check_box.checked)

    textbox_elem.setAttribute("type", "text");

    else

    textbox_elem.setAttribute("type", "password");


   var textbox_elem = document.getElementById("repass");


    if(check_box.checked)

    textbox_elem.setAttribute("type", "text");

    else

    textbox_elem.setAttribute("type", "password");


}


</script>
<?php
if (isset($_POST['sub'])) {

	//declaring variables
	$user = $_POST['user'];

	$quest = $_POST['quest'];
	$ans = $_POST['ans'];
	$pass = $_POST['pass'];
	$repass = $_POST['repass'];

	//sql commands 1
	$sql1 = "select username from users where username = '$user'";
	$result1 = $mysqli->query($sql1);
	$valid_user = $result1->fetch_assoc();
	$username = $valid_user['username'];

	//sql command 2
	$sql2 = "select question,answer from users where username = '$user'";
	$result2 = $mysqli->query($sql2);
	$sec = $result2->fetch_assoc();
	$valid_quest = $sec['question'];
	$valid_ans = $sec['answer'];

	//sql command 3
	$sql3 = "update users set password = md5('$repass') where username = '$user'";

	//condition
	if ($user == $username) {
		if ($quest == $valid_quest && $ans == $valid_ans) {
			if ($pass == $repass) {
				if ($mysqli->query($sql3)) {
					?>

					<script type="text/javascript">
						alert("Update Successed!");
						window.location = "index.php";
					</script>

					<?php
				}
			}else{
				?>

				<script type="text/javascript">
					alert("Password Doesn't Match!");
				</script>

				<?php
			}
		}else{
			?>

			<script type="text/javascript">
				alert("Incorrect Question/Answer!");
			</script>

			<?php
		}
	}else{
		?>

		<script type="text/javascript">
			alert('Incorrect Username!');
		</script>

		<?php
	}
	
}
?>
</body>
</html>