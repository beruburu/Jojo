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
        <title>Jojo's Dog Grooming - Services</title>
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
                <!--Image on the left side.-->
				<img src="Images/schauzer.png" width="300" height="300" alt="schauzer">
			</div>
            
			<div id="rightcol">
                <!--Three sections explaining the services.-->
				<h2>Services</h2>
                <div id="services">
                    <h3><a href="Services/pricing.php">Pricing</a></h3> 
                    <p>The is where you can find the general prices for dog grooming.</p>
                    <h3><a href="Services/booking.php">Booking</a></h3>
                    <p>Booking lets you book appointments for your dogs.</p>
                    <h3><a href="Services/faqs.php">FAQs</a></h3>
                    <p>Have questions? FAQ's has many of the answers you need.</p>
                </div>
			</div>
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
