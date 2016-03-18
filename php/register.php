<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config.php');

	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$firstname = clean($_POST['firstname']);
	$lastname = clean($_POST['lastname']);
	$phone = clean($_POST['phone'])
	$email = clean($_POST['email']);
	$pass = clean($_POST['pass']);
	$confirmpass = clean($_POST['confirmpass']);
	$dogName = clean($_POST['dogname']);
	$dogBreed = clean($_POST['dogbreed'])
	
	//Input Validations
	if($firstname == '') {
		$errmsg_arr[] = 'First name missing';
		$errflag = true;
	}
	if($lastname == '') {
		$errmsg_arr[] = 'Last name missing';
		$errflag = true;
	}
	if($phone == '') {
		$errmsg_arr[] = 'Phone number is missing';
		$errflag = true;
	}
	if($email == '') {
		$errmsg_arr[] = 'Email missing';
		$errflag = true;
	}
	if($pass == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($confirmpass == '') {
		$errmsg_arr[] = 'Confirm password missing';
		$errflag = true;
	}
	if( strcmp($pass, $confirmpass) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	
	//Check for duplicate login ID
	if($login != '') {
		$qry = "SELECT * FROM userRegistration WHERE email='$email'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'There is already an account associate with this email';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: signin.php");
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO userRegistration(firstname, lastname, phoneNumber, email, password, dogName, dogBreed) VALUES('$firstname','$lastname','$phone','$email','".md5($_POST['pass'])."','$dogName','$dogBreed')";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: login.php?email=".$email."&pass=".$pass);
		exit();
	}else {
		die("Query failed");
	}
?>