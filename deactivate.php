<?php
//Start session
	include 'functions.php';
	require_once('config.php');
	session_start();
	
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
    unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
    unset($_SESSION['SESS_LOGIN']);
	session_write_close();
    header("Location: deactivate_page.php");
    mysql_close($link);
    exit();
?>

