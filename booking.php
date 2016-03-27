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
					echo '<a href="account.html">Your Account</a><br/>';
				} else {
					echo '<a href="login_form.php">Login</a><br/>';
					echo '<a href="register_form.php">New user?</a>';
				}
			?>
		    </div>
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
                <p>Book your appointment today!</p>
                <img src="Images/papillon.png" alt="papillon" width="250" height="250">
            </div>
            <div id="rightcol">
                <!-- 
                The form contains the calendar and the time, where the user can input
                their wanted appointment and submit it into the database.
                -->
				<form name="booking" method="post" id="booking" action="http://webdevfoundations.net/scripts/formdemo.asp" onsubmit="return validateRegister()">
					<fieldset>
						<legend>Booking</legend>
					    <div id="firstmsg" style="color:Red;display:none">Please enter your first name</div>
						<label for="firstname">First Name:</label>
						<br>
						<input type="text" name="firstname" id="firstname" size="60" required="required" onblur="validateFirstName()" onfocus="focusFirstName()">
						<br>
						<br>
					    <div id="lastmsg" style="color:Red;display:none">Please enter your last name</div>
						<label for="lastname">Last Name:</label>
						<br>
						<input type="text" name="lastname" id="lastname" size="60" required="required" onblur="validateLastName()" onfocus="focusLastName()">
						<br>
						<br>
					    <div id="phonemsg" style="color:Red;display:none">Please enter a valid phone number ex:1234567890</div>
						<label for="phone">Phone Number:</label>
						<br>
						<input type="text" name="phone" id="phone" size="60" required="required" onblur="validatePhone()" onfocus="focusPhone()">
						<br>
						<br>
					    <div id="emailregmsg" style="color:Red;display:none">Please enter a valid email address</div>
	                    <label for="email">Email:</label>
					    <br>
					    <input type="text" name="registeremail" id="registeremail" size="30" required="required" onblur="validateRegEmail()" onfocus="focusRegEmail()">
						<br>
						<br>
						<div id="dogmsg" style="color:Red;display:none">Please enter your dog's name</div>
						<label for="dogname">Dog Name:</label>
						<br>
						<input type="text" name="dogname" id="dogname" size="60" required="required" onblur="validateDog()" onfocus="focusDog()">
						<br>
						<br>
						<div id="breedmsg" style="color:Red;display:none">Please enter your dog's breed</div>
						<label for="dogbreed">Dog Breed:</label>
						<br>
						<input type="text" name="dogbreed" id="dogbreed" size="60" required="required" onblur="validateBreed()" onfocus="focusBreed()">
						<br>
						<br>
                    <label for="Date">Choose a Date: </label>
                        <input type="date" name="Date" id="Date" required ="required">
                        <br>
                        <br>
                    <label for="Time">Choose a Time: </label>
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
					</fieldset>
                </form>
            </div>
        </div>
		
		<footer>
		    <div id="footernav">
                <ul>
                    <li><a href="signin.php">Sign in / Register</a></li>
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
		<script src="Script/signIn.js"></script>
    </body>
</html>
