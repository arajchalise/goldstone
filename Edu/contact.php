<!DOCTYPE html>
<html>
<head>
<link rel="shortcut" />
<title>Contact Us</title>
<?php include '../Includes/link.php';
include '../Includes/connection.php'; ?>
 <style type="text/css">
        	#contact-container #header{
        		background: #00415a;
        	}


        </style>
</head>
<body>
<div id="contact-container">
<?php include '../Includes/edu_header.php'; ?>
<div style="height: 150px; width: 100%;"></div>

<div id="e-map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d883.0961672048654!2d85.32297083568976!3d27.705407072724185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1907f811c8a5%3A0xe5336b59c07484dd!2sGold+Stone+Consultancy!5e0!3m2!1sen!2snp!4v1451549173012" 
				  id="map_" width="100%" height="400" frameborder="0" style="border:0px; margin-top: 0px;" allowfullscreen> </iframe>
        
 </div>
<div id="contact-main-content">
<h2>Send Us Feedback</h2>
<form method="post" action="../Includes/mail.php">
<table>
<tr><td>First Name:</td><td><input type="text" name="f_name" placeholder="Enter your first name..."/></td><td>Last Name:</td><td><input type="text" name="l_name" placeholder="Enter your last name..."/></td></tr>
<tr><td>Email Address:</td><td><input type="text" name="email" placeholder="Enter valid email address..."/></td><td>Mobile Number:</td><td><input type="text"  name="mob" placeholder="Enter your Mobile number..."/></td></tr>
<tr><td>Message:</td><td colspan="3"><textarea name="msg" placeholder="Write your message/feedback here ..."></textarea></td></tr>
<tr><td></td><td><input type="submit" value="Send" id="submit"/></td></tr>
</table>
</form>
</div>
</div>
<div id="last_main_content">
<div id="footer">
<?php include '../Includes/footer.php'; ?>
</div>
</div>
</body>
</html>