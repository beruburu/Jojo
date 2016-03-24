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
        <title>Jojo's Dog Grooming - Testimonials</title>
        <link rel="stylesheet" href="Style/base.css" media="screen">
        <link rel="stylesheet" href="Style/printstyle.css" media="print">

    </head>
    
    <body>
        
        <div id="signin">
			<?php
				if (isLoggedIn()){
	                echo 'Welcome back, ' . strtoupper($_SESSION['SESS_FIRST_NAME']) . '!<br/>';
					echo '<a href="logout.php">Logout</a><br/>';
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
                <!--Testimonials will appear in this <p> tag using JavaScript-->
				<p><strong>Click on a puppy to view their testimonial!</strong></p>
				<p id="testimonial"> </p>
            </div>
            
			<div id="rightcol">
                <!--Gallery area that contains links to customer testimonials-->
				<h2>Testimonials</h2>
                <div id="gallery">
                <ul>
                    <li><img src="Images/wendel.jpg" width="200" height="200" alt="Dog" onclick="puppy01()">
                    </li>
                    <li><img src="Images/pickle.jpg" width="200" height="200" alt="Dog" onclick="puppy02()">
                    </li>
                    <li><img src="Images/winston.jpg" width="200" height="200" alt="Dog" onclick="puppy03()">
                    </li>
                    <li><img src="Images/bear.jpg" width="200" height="200" alt="Dog" onclick="puppy04()">
                    </li>
                    <li><img src="Images/bella.jpg" width="200" height="200" alt="Dog" onclick="puppy05()">
                    </li>
                    <li><img src="Images/ami.jpg" width="200" height="200" alt="Dog" onclick="puppy06()">
                    </li>
                 </ul>
                 </div>

			</div>
        </div>
		<footer>
            <div id="footernav">
                <ul>
                    <li><a href="signIn.php">Sign in / Register</a></li>
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
		</footer>
		<script src="Script/testimonials.js"></script>
    </body>
</html>
