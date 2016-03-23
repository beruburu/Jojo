<?php
	require_once('config.php');

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect");
	mysql_select_db(DB_DATABASE)or die("cannot select DB");
	$tbl_name="topic"; // Table name


	$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
	// ORDER BY id DESC is order result by descending
	$result=mysql_query($sql);
?>

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

            <!--Logo picture directing back to home page-->
			<a href="index.php"><h1><img src="Images/logo.png"
                 width="200" height="200" alt="Jojo's Dog Grooming-Home"></h1></a>
		</header>
        <nav>
            <div class="dropdown">
                <ul id="nav">
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="services.html" id="drop">Services</a>

                        <!--Establishes a dropdown menu on the services section-->
					    <div class="dropdowncontent">
						    <ul>
                                <li><a href="Services/pricing.html">Pricing</a></li>
					            <li><a href="Services/booking.html">Booking</a></li>
					            <li><a href="Services/faqs.html">FAQs</a></li>
                            </ul>
			            </div></li>
                    <li><a href="contactus.html">Contact Us</a></li>
                </ul>
            </div>
        </nav>
        
		<div id="content">

<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){ // Start looping table row
?>

<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection
}
mysql_close();
?>
<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="add_topic_form.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table>

</div>

        <!--Establishes the footer section-->
		<footer>
		    <div id="footernav">
                <ul>
                    <li><a href="login_form.php">Login</a></li>
                    <li><a href="register_form.php">Register</a></li>
                    <li><a href="aboutUs.html">About Us</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="services.html">Services</a>
                    <li><a href="Services/pricing.html">Pricing</a></li>
					<li><a href="Services/booking.html">Booking</a></li>
					<li><a href="Services/faqs.html">FAQs</a></li>
                    <li><a href="contactus.html">Contact Us</a></li>
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
