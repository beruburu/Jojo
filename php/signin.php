<?php
	require_once('config.php');

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect");
	mysql_select_db(DB_DATABASE)or die("cannot select DB");
	$tbl_name="userRegistration"; // Table name


	$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
	// ORDER BY id DESC is order result by descending
	$result=mysql_query($sql);
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Jojo's Dog Grooming - Sign In/Register</title>
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
				<!--Sign in form begins here-->
				<h2>Sign In</h2>
					<form name="signinform" method="post" id="signinform" action="http://webdevfoundations.net/scripts/formdemo.asp" onsubmit="return validateSignIn()">
					<div id="emailmsg" style="color:Red;display:none">Please enter a valid email address</div>
                    <label for="email">Email:</label>
					<br>
					<input type="text" name="signinemail" id="signinemail" size="30" required="required" onblur="validateEmail()" onfocus="focusEmail()">
					<br>
					<br>
					<div id="passmsg" style="color:Red;display:none">Please enter a password</div>
					<label for="password">Password:</label>
					<br>
					<input type="password" name="password" id="password" size="30" required="required" onblur="validatePassword()" onfocus="focusPassword()"> 
					<br>
					<br>
					<input type="submit" value="Sign In">
				</form>
				<img src="Images/alaskanEskimo.png" height="250" width="250" alt="alaskan eskimo">
			</div>
			<div id="rightcol">
				<!--Regstration form begins here-->
				<h2>Register</h2>
					<form name="register" method="post" id="register" action="http://webdevfoundations.net/scripts/formdemo.asp" onsubmit="return validateRegister()">
						<fieldset>
						<legend>Owner</legend>
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
					    <div id="passregmsg" style="color:Red;display:none">Please enter a password</div>
						<label for="pass">Password:</label>
						<br>
						<input type="password" name="pass" id="pass" size="60" required="required" onblur="validateRegPassword()" onfocus="focusRegPassword()">
						<br>
						<br>
					    <div id="passconmsg" style="color:Red;display:none">Password does not match</div>
						<label for="confirmpass">Confirm Password:</label>
						<br>
						<input type="password" name="confirmpass" id="confirmpass" size="60" required="required" onblur="validateConPassword()" onfocus="focusConPassword()">
					</fieldset>
					<br>
					<fieldset>
						<legend>Dog</legend>
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
						<!--link adds another dog field for registration form-->
						<input type="button" value="Add Dog" onclick="">
					</fieldset>
					<br>
					<input type="submit" value="Register">
				</form>
			</div>
        </div>
		<footer id="footer">
		    <div id="footernav">
                <ul>
                    <li><a href="signin.php">Sign in / Register</a></li>
                    <li><a href="aboutUs.php">About Us</a></li>
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
        <script src="Script/signIn.js"></script>
    </body>
</html>