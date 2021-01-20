
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<title>Login</title>
</head>
<body>

<?php
	include_once 'include/header.i.php'
?>


<section>
	<h1>Login</h1>
	<form action="include/login.i.php" method="POST">
		<input type="text" name='nameu' placeholder="username"/>
		<input type="password" name="wordp" placeholder="password">
	</form>
</section>







<?php
	include_once 'include/footer.i.php'
?>