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

    //Sanitize the REQUEST values - parameters may come from GET or POST
	$login = clean($_REQUEST['login']);

    $sql = "DELETE FROM members WHERE login='$login'";

    mysql_select_db(DB_DATABASE);
    $retval = mysql_query( $sql, $link );
    if(! $retval )
    {
    die('Could not delete data: ' . mysql_error());
    }
    echo "Deleted data successfully\n";
    mysql_close($conn);

?>

