<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
	mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
	$tbl_name="topic"; // Table name
?>

	
<!-- ==========================================================	-->
<!--	Created by Devit Schizoper                          	-->
<!--	Created HomePages http://LoadFoo.starzonewebhost.com   	-->
<!--	Created Day 01.12.2006                              	-->
<!-- ========================================================== -->

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Jojo's Dog Grooming</title>
        <link rel="stylesheet" href="Style/base.css" media="screen">
        <link rel="stylesheet" href="Style/printstyle.css" media="print">
    </head>
    
    <body>
        
        <!--Sign in/Register link-->
        <div id="signin">
			<?php
				if (isLoggedIn()){
	                echo 'Welcome back, ' . strtoupper($_SESSION['SESS_FIRST_NAME']) . '!<br/>';
					echo '<a href="logout.php">Logout</a><br/>';
					echo '<a href="account.php">Your Account</a><br/>';
				} else {
					echo '<a href="login_form.php">Login</a><br/>';
					echo '<a href="register_form.php">New user?</a>';
				}
			?>
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

                        <!--Establishes a dropdown menu on the services section-->
					    <div class="dropdowncontent">
						    <ul>
                                <li><a href="pricing.php">Pricing</a></li>
					            <li><a href="booking.php">Booking</a></li>
					            <li><a href="faqs.php">FAQs</a></li>
                            </ul>
			            </div></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </div>
        </nav>
        
		<div id="content">
            <div id="leftcol">
				<img src="Images/bassetHound.png" width="250" height="250" alt="basset hound">
			</div>
            
			<div id="rightcol">
				<!--Displays account information, will appear in place of the Sign In/Register page-->
				<h2>Deactivation Successful</h2>
				<p>Sorry to see you go!</p>
			</div>
        </div>
		<div id="aside">
		</div>
		<div id="account">
		</div>
		<footer>
		    <div id="footernav">
                <ul>
                    <li><a href="login_form.php">Login</a></li>
                    <li><a href="register_form.php">Register</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="testimonials.php">Testimonials</a></li>
                    <li><a href="services.php">Services</a>
                    <li><a href="pricing.php">Pricing</a></li>
					<li><a href="booking.php">Booking</a></li>
					<li><a href="faqs.php">FAQs</a></li>
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
			<div id="credits">
				<a href="http://www.freepik.com/free-photos-vectors/house">House vector designed by Freepik</a>
			</div>
		</footer>        
    </body>
</html>