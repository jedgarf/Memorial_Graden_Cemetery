<?php
	$conn = new mysqli("localhost", "root", "secret", "loginaccess");
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>
