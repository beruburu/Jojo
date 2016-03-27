<?php
//Start session
	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
	mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
	
	
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

	$id = $_SESSION['SESS_MEMBER_ID'];
    // Create query
    $sql = "DELETE FROM members WHERE member_id='$id'";

    mysql_select_db(DB_DATABASE);
    $retval = mysql_query( $sql, $link );
    if(! $retval )
    {
    die('Could not delete data: ' . mysql_error());
    }
    echo "Deleted data successfully\n";
    mysql_close($link);

?>

