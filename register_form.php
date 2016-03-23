<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
	mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
	$tbl_name="topic"; // Table name
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Jojo's Dog Grooming - Register</title>
        <link rel="stylesheet" href="Style/base.css" media="screen">
        <link rel="stylesheet" href="Style/printstyle.css" media="print">
    </head>
    
    <body>
        
        <div id="signin">
            <?php
			$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
			$result=mysql_query($sql);
			$count = min(5, mysql_num_rows($result));
			if($count==0)
				echo "<li>No topics</li>";
			else
				for($i=0; $i < $count; $i++){
					$row=mysql_fetch_array($result);
					echo '<li><a href="view_topic.php?id='.$row['id'].'">'.$row['topic'].'</a></li>';
				}
		    ?>
            <br>
		    <?php
			if (isLoggedIn()){
                echo 'Welcome back, ' . strtoupper($_SESSION['SESS_FIRST_NAME']) . '!<br/>';
				echo '<a href="logout.php">Logout</a><br/>';
				echo '<a href="forum.php">Go to forum</a><br/>';
				echo '>><a href="add_topic_form.php">Create new topic</a>';
			} else {
				echo '<a href="login_form.php">Login</a><br/>';
				echo '<a href="register_form.php">New user?</a>';
			}
		    ?>
        </div> 
        <header>
		    <a href="index.html"><h1><img src="Images/logo.png"
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
				<img src="Images/alaskanEskimo.png" height="250" width="250" alt="alaskan eskimo">
			</div>
			<div id="rightcol">
				<!--Regstration form begins here-->

                    <?php
	                    if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		                    echo '<ul class="err">';
		                    foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			                    echo '<li>',$msg,'</li>'; 
		                    }
		                    echo '</ul>';
		                    unset($_SESSION['ERRMSG_ARR']);
	                    }
                    ?>

                    <form id="registerForm" name="registerForm" method="post" action="register.php">
						<fieldset>
							<legend>Register</legend>
                 			<label for="firstname">First Name: </label><br>
                       	 	<input name="firstname" type="text" id="firstname" size="60">
							<br><br>
                    		<label for="lastname">Last Name: </label><br>
                  		  	<input name="lastname" type="text" class="textfield" id="lastname" size="60">
							<br><br>
                    		<label for="emai">Email: </label><br>
                    		<input name="email" type="text" id="email" size="60">
							<br><br>
                       	 	<label for="pass">Password: </label><br>
                        	<input name="pass" type="password" id="pass" size="60">
							<br><br>
                        	<label for="confirmpass">Confirm Password: </label><br>
                        	<input name="confirmpass" type="password" id="confirmpass" size="60">
							<br><br>
                        	<input type="submit" name="Submit" value="Register" /></td>
						</fieldset>
                    </form>
            </div>
        </div>
		<footer id="footer">
		    <div id="footernav">
                <ul>
                    <li><a href="login_form.php">Login</a></li>
                    <li><a href="register_form.php">Register</a></li>
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
