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
        <title>Jojo's Dog Grooming - Booking</title>
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
				<p>Find the answers to your questions here!<p>
				<img src="Images/havanese.png" alt="havanese.png" width="250" height="250">
			</div>
            
            <div id="rightcol">
                <!--
                The questions below are content to linked to their answers.
                -->
                <h2>FAQs</h2>
                        <h3>Questions</h3>
                        <ul>
                                <!--
                                Questions are given ID references to its respected
                                answers.
                                -->
                                <li><a href="#Answer1">What is the difference between the basic and full grooming?</a></li>
                                <li><a href="#Answer2">How are the sizes of dogs determined?</a></li>
                                <li><a href="#Answer3">How do I book an appointment online?</a></li>
                                <li><a href="#Answer4">Do you accept walk-ins?</a></li>

                        </ul>
                        <h3>Answers</h3>
                            <dl>
                                <!--
                                This is where the questions are linked to.
                                -->
                                <dt id="Answer1">What is the difference between the basic and full grooming?</dt>
                                    <dd>The basic grooming consists of bathing, ear cleaning, conditioning treatments and shampooing. The full grooming comes with all of the services mentioned in the pricing page.</dd>
                                <dt id="Answer2">How are the sizes of dogs determined?</dt>               
                                    <dd>The sizes are determined by their weight.</dd>
                            </dl>
                                        <table id="dogsize" style="width: 75%">
                                            <tr>
                                                <th>Size</th>
                                                <th>Weight</th>
                                            </tr>
                                            <tr>
                                                <td>Small</td>
                                                <td>15 to 25 pounds</td>
                                            </tr>
                                            <tr>
                                                <td>Medium</td>
                                                <td>26 to 50 pounds</td>
                                            </tr>
                                            <tr>
                                                <td>Large</td>
                                                <td>51 to 80 pounds</td>
                                            </tr>
                                        </table>
                
                                  
                                <dl>                   
                                <dt id="Answer3">How do I book an appointment online?</dt>
                                    <dd>You have to create a profile through our website. Through that, you will be able to gain access to our booking.</dd>
                                <dt id="Answer4">Do you accept walk-ins?</dt>
                                    <dd>Unfortunately, we do not accept walk-ins. You will have to register online and book an appointment with us, or you may call us at (604) 983-0030.</dd>
                            </dl>    
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

