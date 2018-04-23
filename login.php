<!DOCTYPE html>
<!-- 
Stephanie Marcellin, Tam Tran
Final Project - Mini D2L Class website
-->
<html>
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="classSite.css" />
</head>
<body>

	<?php
		// Include class and start session
		session_start ();
		//include 'DatabaseAdaptor.php';
	?>

	<h3>Login</h3>
	<form name="LoginForm" method="POST">
		<p>Username:</p><input type="text" name="username"> <br>
		<p>Password:</p><input type="password" name="password"> 
		<input type="submit" name="Login" value="Login">
		<input type="button" name="Home" value="Home" onclick="location.href='main.php'">
		<br><br>
	</form>
	<?php
 	 	if( isset(  $_POST['Login'])) {
    		$user = $_POST['username'];
    		$pass = $_POST['password'];
    		$exist = $theDBA->checkUser($user);
    		if ($exist == NULL) {
    			echo "<br>Username does not exist";
    		}
    		else {
    			if(strtolower($exist[0]["username"]) === strtolower($user)){
    				if(password_verify($pass, $exist[0]["hash"])){
    				    $_SESSION['user'] = $exist[0]["username"];
    					$_SESSION['name'] = $exist[0]["first_name"];
    					header("Location: main.php");
    				}
    				else {
    					echo "<br>Password is incorrect, try again";
    				}
    			}
    		}
 	 	}
	?>
</body>
</html>