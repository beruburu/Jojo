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
        <title>Jojo's Dog Grooming - Contact Us</title>
        <link rel="stylesheet" href="Style/base.css" media="screen">
        <link rel="stylesheet" href="Style/printstyle.css" media="print">
    </head>
    
    <body>
        
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
                <!--
                All the information about the business's location, times,
                and contact information are located under Contact Us.
                -->
            
                <p>Feel free to contact us!</p>
           
                <ul>

                    <li><h3>Address</h3>
                        <p>1922 Mountain Hwy
                    North Vancouver, BC V7J 2M8</p>
                    </li>
                    
                    <li><h3>Telephone</h3>
                        <p><a href="tel:604-983-0030">(604) 983-0030</a></p>
                    </li>
                    
                    <li><h3>Email</h3>
                        <p><a href="mailto:jojosdoggrooming@yahoo.com">jojosdoggrooming@yahoo.com</a></p>
                    </li>
                    
                    <li><h3>Hours of Operation</h3>
                        <p>Monday - Saturday:</p>
                        <p>9:30am - 5:00pm</p>
                        <p>Sunday: Closed</p>
                    </li>
                    

                </ul>

                <!-- This is an image of another dog. The picture will be 
                changed in the future.
                -->
                <img id="maltese" src="Images/maltese.png" alt="maltese" width="250" height="250">

            </div>
            
            
            

            <div id="rightcol">
             
                <h2>Contact us</h2>
				<h3>Location</h3>
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:400px;width:520px;'><div id='gmap_canvas' style='height:400px;width:520px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://maps-website.com/'>google maps widget</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=d072140a27880c59f5c68972900b88fc2351eb61'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(49.3261899,-123.03803619999996),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(49.3261899,-123.03803619999996)});infowindow = new google.maps.InfoWindow({content:'<strong>Jojo\'s Dog Grooming</strong><br>1922 Mountain Highway<br>V7J 2M8 Burnaby<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
            </div>
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
				<a href="http://www.freepik.com/free-photos-vectors/dog">Dog vector designed by Freepik</a>
			</div>
		</footer>
    </body>
</html>
