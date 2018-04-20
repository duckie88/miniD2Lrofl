<!DOCTYPE html>
<!-- 
Stephanie Marcellin, Tam Tran
Final Project - Mini D2L Class website
-->
<html>
<head>
	<meta charset="UTF-8">
	<title>Course Website</title>
	<link rel="stylesheet" type="text/css" href="classSite.css" />
</head>
<body>
	<?php
		// Include class and start session
		session_start ();
	?>

	<h1 class="title">ECE220</h1>
	<a href="register.php">Register</a> 
	<a href="login.php">Login</a> 
	<?php 
		if (isset($_SESSION['user'])) {
			echo "<form name=\"logout\" method=\"post\"><input name=\"logout\" type=\"submit\" value=\"Log Out\"></form>";
		}
	?>
	<div id="toChange"></div>
	
	<script>
		// TODO Functions if needed
		
	</script>
	
	<?php 
		if (isset($_POST['logout'])) {
			unset($_SESSION['user']);
			header("Location: main.php");
		}
	?>
</body>
</html>