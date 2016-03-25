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
        <title>Jojo's Dog Grooming - Pricing</title>
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
                    <li><a href="aboutUs.php">About Us</a></li>
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
            <!--Lists services in an unordered list-->
            <div id="leftcol">
				<p><strong>We offer many services here at Jojo's, including:</strong></p>
                <div id="serviceli">
                <ul>
                    <li>Hair Clipping</li>
                    <li>Bathing</li>
                    <li>Ear Cleaning</li>
                    <li>Nail Trimming</li>
                    <li>Conditioning Treatments</li>
                    <li>Flea Treatment</li>
                    <li>Medicated and Hypoallergenic Shampoo</li>
                    <li>De-Shedding</li>
                    <li>De-Matting</li>
                    <li>De-Skunking</li>
                </ul>
                </div>
			</div>
            <!--Creates pricing table-->
			<div id="rightcol">
				<h2>Pricing</h2>
                <table id="pricetable">
                    <tr>
						<th>Size</th>
                        <th>Basics</th>
                        <th>Full Groom</th>
                    </tr>
					<tr>
						<!--<td colspan="3">&nbsp;</td>-->
					</tr>
                    <tr>
                        <td>Small Dogs</td>
                        <td>$30+</td>
                        <td>$50+</td>
                    </tr>
                    <tr>
                        <td>Medium Dogs</td>
                        <td>$45+</td>
                        <td>$60+</td>
                    </tr>
                    <tr>
                        <td>Large Dogs</td>
                        <td>$60+</td>
                        <td>$75+</td>
                    </tr>
                    <tr>
                        <td>Matted Coat</td>
                        <td>$30/hr</td>
                        <td></td>
                    </tr>
                </table>
                <img src="Images/cockerSpaniel.png" alt="cockerspaniel" height="300" width="300" id="cockerspaniel">
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
    </body>
</html>
