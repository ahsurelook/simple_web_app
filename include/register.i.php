<?php

if(isset($_POST['submit']){
	echo 'User pressed submit button from register.php';

	$usr = $_POST['name'];
	$pw = $_POST['pw'];
	$pwv = $_POST['pw_verify'];

	require_once 'db_con.i.php';
	require_once 'func.i.php';

	# empty fields error
	if(isRegFieldsEmpty($usr,$pw,$pwv) !== false){
		header("location: ../register.php?error=emptyField");
		exit();
	}

	# empty fields error
	if(invalidUsername($usr) !== false){
		header("location: ../register.php?error=invalidUsername");
		exit();
	}

	# empty fields error
	if(invalidPassword($usr) !== false){
		header("location: ../register.php?error=invalidUsername");
		exit();
	}

}
else{
	header("location: ../register.php ");
	exit();
}