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

            <!--Logo picture directing back to home page-->
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

            <!--Welcome section-->
            <div id="leftcol">
				<h2>Welcome</h2>
                <p>Here at <strong>Jojo’s Dog Grooming,</strong> your dog’s well-being is our top concern.</p>
                <p>Our <strong>certified groomer</strong> uses top of the line products to ensure that your pups will leave healthy, 
                smelling and feeling amazing.</p>
                <p>Your dog will always have a day of <strong>tail-wagging fun</strong> when you choose
                <strong>Jojo’s Dog Grooming.</strong></p>
                <p>When you bring your dog to the groomers, you expect <strong>exceptional service</strong>,
                along with reasonable and <strong>affordable prices.</strong></p>
                <p>That’s why at <strong>Jojo’s Dog Grooming,</strong> we provide the
                utmost attention to your dog’s needs.</p>
				<img src="Images/poodle.png" alt="poodle" height="300" width="300">
			</div>
            
			<div id="rightcol">

                <!--News updates-->
				<h2>News</h2>
				<h3>Jojo's Dog Grooming is going online!</h3>
                <p>Greetings!</p>
                <p>We are setting up a new website to provide better service to our customers.</p>    
                <p>Take a look around. <a href="signin.php">Register</a> and sign in to the site to receive news, deals and special offers.</p>
                <p>You can now book your appointments online through our <a href="booking.php">Booking</a> page.</p>
                <p>Check out our <a href="pricing.php">Pricing</a> page for a list of dog services we are providing.</p>
                <p>Our <a href="faqs.php">FAQs</a> page will answer our most frequently asked questions.</p>
			</div>
        </div>

        <!--Establishes the footer section-->
		<footer>
		    <div id="footernav">
                <ul>
                    <li><a href="login_form.php">Login</a></li>
                    <li><a href="register_form.php">Register</a></li>
                    <li><a href="aboutUs.html">About Us</a></li>
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
		</footer>        
    </body>
</html>
