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
        <title>Jojo's Dog Grooming - Booking</title>
        <link rel="stylesheet" href="../Style/base.css" media="screen">
        <link rel="stylesheet" href="../Style/printstyle.css" media="print">
    </head>
    
    <body>
        
        <div id="signin">
            <a href="../signin.php">sign in/register</a>
        </div> 
        <header>
		    <a href="../index.php"><h1><img src="../Images/logo.png"
                 width="200" height="200" alt="Jojo's Dog Grooming-Home"></h1></a>
		</header>
        <nav>
            <div class="dropdown">
                <ul id="nav">
                    <li><a href="../aboutus.php">About Us</a></li>
                    <li><a href="../testimonials.php">Testimonials</a></li>
                    <li><a href="../services.php" id="drop">Services</a>
					    <div class="dropdowncontent">
						    <ul>
                                <li><a href="pricing.php">Pricing</a></li>
					            <li><a href="booking.php">Booking</a></li>
					            <li><a href="faqs.php">FAQs</a></li>
                            </ul>
			            </div></li>
                    <li><a href="../contactus.php">Contact Us</a></li>
                </ul>
            </div>
        </nav>
        
        <div id="content">
            <div id="leftcol">
                <p>Book your appointment today!</p>
                <img src="../Images/papillon.png" alt="papillon" width="250" height="250">
            </div>
            <div id="rightcol">
                <!-- 
                The form contains the calendar and the time, where the user can input
                their wanted appointment and submit it into the database.
                -->
                <form method="post"
                action="http://webdevbasics.net/scripts/demo.php">
                <h2>Booking</h2>
                    <label for="Date">Choose a Date</label>
                        <input type="date" name="Date" id="Date" required ="required">
                        <br>
                        <br>
                    <label for="Time">Choose a Time</label>
                        <select size="1" name="time" id="time" required ="required">
                            <option value="" disabled selected hidden>Select time</option>
                            <option value="9:00">9:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="1:00">1:00</option>
                            <option value="2:00">2:00</option>
                            <option value="3:00">3:00</option>
                            <option value="4:00">4:00</option>
                        </select>
                        <br>
                        <br>
                        <input type="submit" value="Submit">
                </form>
            </div>
        </div>
		
		<footer>
		    <div id="footernav">
                <ul>
                    <li><a href="../signin.php">Sign in / Register</a></li>
                    <li><a href="../aboutus.php">About Us</a></li>
                    <li><a href="../testimonials.php">Testimonials</a></li>
                    <li><a href="../services.php">Services</a>
                    <li><a href="pricing.php">Pricing</a></li>
					<li><a href="booking.php">Booking</a></li>
					<li><a href="faqs.php">FAQs</a></li>
                    <li><a href="../contactus.php">Contact Us</a></li>
                </ul>
            </div>
            <p>Follow us:</p>
            <p><a href="#"><img src="../Images/facebook.png"
                 width="50" height="50" alt="Facebook"></a>
                <a href="#"><img src="../Images/instagram.png"
                 width="50" height="50" alt="instagram"></a>
                <a href="#"><img src="../Images/twitter.png"
                 width="50" height="50" alt="Twitter"></a></p>
		</footer>
    </body>
</html>
