<!DOCTYPE html>
<!-- 
Stephanie Marcellin, Tam Tran
Final Project - Mini D2L Class website
-->
<html>
<head>
	<link href="site.css" type="text/css" rel="stylesheet" />
	<title>Course Website</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php 
		session_start ();
	?>
	<h1 class="title">
		ECE 220<br>
		Basic Circuits<br>
		Spring 2018
	</h1>
	
	<div class="mainPanel">
		<button class="b1" onclick="show('courseinfo.html')">Course Info</button>
		<button class="b1" onclick="show('contactinfo.html')">Contact Info</button>
		<button class="b1" onclick="show('grades.php')">Grades</button>
		<?php 
			if (isset($_SESSION['user'])) {	//TODO
				echo "<form name=\"logout\" method=\"post\"><input name=\"logout\" type=\"submit\" value=\"Log Out\"></form>";
				echo "<a href='grades.php'>" . $_SESSION['name'] . "'s Grades</a>";
			}
			else{
				echo "<button class=\"b1\" onclick=\"show('login.php')\">Login</button> ";
				echo "<button class=\"b1\" onclick=\"show('register.php')\">Register</button>";
			}
		?>
		<hr>
		<iframe id="section" src="courseinfo.html"></iframe>
	</div>
	
	<script>
		function show(page) {
			document.getElementById("section").src = page;
		}
	</script>
	
	<?php 
		if (isset($_POST['logout'])) {
			unset($_SESSION['user']);
			unset($_SESSION['name']);
		}
	?>
</body>
</html>