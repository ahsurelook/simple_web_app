
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<title>Register</title>
</head>
<body>

<?php
	include_once 'include/register.i.php'
?>




<?php
	include_once 'include/header.i.php'
?>

	<form action="include/register.i.php" method="POST">
		<input type="text" name="usr" placeholder="username">
		<input type="text" name="pw" placeholder="password">
		<input type="text" name="pw_verify" placeholder="password (confirm)">
		<input type="submit" name="submit">
		<input type="reset" name="reset">
	</form>

<?php
	include_once 'include/footer.i.php'
?>