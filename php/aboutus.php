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
        <title>Jojo's Dog Grooming - About Us</title>
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
            <!--Left column with images of owner -->
            <div id="leftcol">
				<img src="Images/placeholder.jpg" alt="Owner">
                <img src="Images/placeholder.jpg" alt="Jojo">
 			</div>
            <!--Description of owner and jojo-->
			<div id="rightcol">
				<h2>About Us</h2>
                <h3>Simin (Owner)</h3>
                <p>As an avid dog lover, Simin realized that her true passion lies within a dog grooming career. After several 
                   intensive months, she completed the Pet Groomer Course at Western Dog Grooming School.  
                   Simin has received her PIJAC Canine Specialist Certification and is a Certified Canine Specialist. She 
                   also has her Pet First Aid Certificate and her Professional Pet Groomer Career Diploma. In order to provide
                   the best experience for dogs, Simin operates in a safe, comfortable and clean environment. She treats each dog
                   with love and respect as if they were her own! </p>
                <h3>Jojo</h3>

                <p>Jojo is an eight years old border-collie. </p>

                <p>At 13 years old, Jojo is still healthy and bursting with energy.  As a border-collie, Jojo loves chasing crows 
                   and squirrels. She adores making friends and playing with other dogs. If there is a chance to go out for a walk,
                   Jojo will find her leash and beat you to the door. With her lovable nature, it's hard not to like her! </p>
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
