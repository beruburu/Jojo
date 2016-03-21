<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
	mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
	$tbl_name="userRegistration"; // Table name
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Jojo's Dog Grooming - Account</title>
        <link rel="stylesheet" href="Style/base.css" media="screen">
        <link rel="stylesheet" href="Style/printstyle.css" media="print">
    </head>
    
    <body>
        
        <div id="signin">
            <a href="signin.php">sign in/register</a>
        </div> 
        <header>
		    <a href="index.php"><h1><img src="Images/logo.png"
                 width="200" height="200" alt="Jojo's Dog Grooming-Home"></h1></a>
		</header>
        <nav>
            <div class="dropdown">
                <ul id="nav">
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="testimonials.php">Testimonials</a></li>
                    <li><a href="services.php" id="drop">Services</a>
					    <div class="dropdowncontent">
						    <ul>
                                <li><a href="Services/pricing.php">Pricing</a></li>
					            <li><a href="Services/booking.php">Booking</a></li>
					            <li><a href="Services/faqs.php">FAQs</a></li>
                            </ul>
			            </div></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </div>
        </nav>
        
		<div id="content">
            <div id="leftcol">
				<img src="Images/placeholder.jpg" width="250" height="250" alt="placeholder">
			</div>
            
			<div id="rightcol">
				<!--Displays account information, will appear in place of the Sign In/Register page-->
				<h2>Account</h2>
				<ul>
					<li><label>First Name: </label></li>
					<li><!--User's first name--></li>
					<li><label>Last Name: </label></li>
					<li><!--User's last name--></li>
					<li><label>Phone Number: </label></li>
					<li><!--User's phone number--></li>
					<li><label>Email: </label></li>
					<li><!--User's email--></li>
					<li><label>Dog Name: </label></li>
					<li><!--Dog's name--></li>
					<li><label>Dog Breed: </label></li>
					<li><!--Dog's breed--></li>
					<!--Additional dogs will appear underneath-->
					<li><a href="accountedit.html">Edit Account</a></li>
				</ul>
			</div>
        </div>
		<div id="aside">
		</div>
		<div id="account">
		</div>
		<footer>
		    <div id="footernav">
                <ul>
                    <li><a href="signin.php">Sign in / Register</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="testimonials.php">Testimonials</a></li>
                    <li><a href="services.php">Services</a>
                    <li><a href="Services/pricing.php">Pricing</a></li>
					<li><a href="Services/booking.php">Booking</a></li>
					<li><a href="Services/faqs.php">FAQs</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </div>
            <p>Follow us:</p>
            <p><a href="#"><img src="Images/facebook.png"
                 width="50" height="50" alt="Facebook"></a>
                <a href="#"><img src="Images/instagram.png"
                 width="50" height="50" alt="instagram"></a>
                <a href="#"><img src="Images/twitter.png"
                 width="50" height="50" alt="Twitter"></a></p>
		</footer>
    </body>
</html>