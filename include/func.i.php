<?php

function isRegFieldsEmpty($usr,$pw,$pwv){
	$result;
	if($empty($usr) || $empty($pw) || $empty($pwv)){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;

}


function invalidUsername($usr){
	$result;
	if(!preg_match("/^[a-zA-Z0-9]*$/", $usr){
		$result = true;
	}
	else{
		$result = false;
	}
	return $result;
}

function userExists($conn, $usr){
	$sql = "SELECT * FROM users WHERE username = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../register.php?error=invalidUsername");
		exit();
	}

	mysqli_stmt_bind_param($stmt,"s",$username);
	mysqli_stmt_exectute($stmt);

}

	# empty fields error
function invalidPassword($pw){

}

	# empty fields error
function invalidPasswordMatch($pw,$pwv){

}


