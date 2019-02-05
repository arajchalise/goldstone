
<?php
session_start();
if(!isset($_SESSION['user']) || $_SESSION['user'] == ""){
	header ("location: ../admin.php");
	exit;
}
	else{
		$name = $_SESSION['name'];
		echo "Welcome "." ".$name;
		
	}
	?>
<?php 
$connection = mysqli_connect("localhost", "root", "");
mysqli_select_db($connection, "db_gold");
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
<title>IT Admin Panel</title>
<link rel="stylesheet" type="text/css" href="../Style/admin.css" />
<script type="text/javascript" src="../Scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../Scripts/bootstrap.js"></script>
<script type="text/javascript" src="../Scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="../Scripts/stylechanger.js"></script>
<script type="text/javascript" src="../Scripts/jquery-ui-1.7.2.custom.min.js"></script>
<style>
ul li{
	border: none;
	display: block;
}
form textarea{
	width: 500px;
	height: 200px;
}
</style>
<script>
$(function(){
	$("#home-menu").click(function(){
		$("#welcome").hide();
		$("#about").hide();
		$("#works").hide();
		$("#services").hide();
		$("#clients").hide();
		$("#clientsservice").hide();
		$("#home").show();
		$("#clientsvoice").hide();
		$("#team").hide();
		$("#faqs").hide();
	});
	$("#client-menu").click(function(){
		$("#welcome").hide();
		$("#about").hide();
		$("#works").hide();
		$("#services").hide();
		$("#clients").show();
		$("#clientsservice").hide();
		$("#home").hide();
		$("#clientsvoice").hide();
		$("#team").hide();
		$("#faqs").hide();
	});
	$("#about-menu").click(function(){
		$("#welcome").hide();
		$("#about").show();
		$("#works").hide();
		$("#services").hide();
		$("#clients").hide();
		$("#clientsservice").hide();
		$("#home").hide();
		$("#clientsvoice").hide();
		$("#team").hide();
		$("#faqs").hide();
	});
	$("#works-menu").click(function(){
		$("#welcome").hide();
		$("#about").hide();
		$("#works").show();
		$("#services").hide();
		$("#clients").hide();
		$("#clientsservice").hide();
		$("#home").hide();
		$("#clientsvoice").hide();
		$("#team").hide();
		$("#faqs").hide();
	});
	$("#services-menu").click(function(){
		$("#welcome").hide();
		$("#about").hide();
		$("#works").hide();
		$("#services").show();
		$("#clients").hide();
		$("#clientsvoice").hide();
		$("#clientsservice").hide();
		$("#home").hide();
		$("#team").hide();
		$("#faqs").hide();
	});
	$("#clientsvoice-menu").click(function(){
		$("#welcome").hide();
		$("#about").hide();
		$("#works").hide();
		$("#services").hide();
		$("#clients").hide();
		$("#clientsvoice").show();
		$("#clientsservice").hide();
		$("#home").hide();
		$("#team").hide();
		$("#faqs").hide();
	});

		$("#team-menu").click(function(){
		$("#welcome").hide();
		$("#about").hide();
		$("#works").hide();
		$("#services").hide();
		$("#clients").hide();
		$("#clientsvoice").hide();
		$("#team").show();
		$("#clientsservice").hide();
		$("#home").hide();
		$("#faqs").hide();
	});
	
		$("#faqs-menu").click(function(){
		$("#welcome").hide();
		$("#about").hide();
		$("#works").hide();
		$("#services").hide();
		$("#clients").hide();
		$("#clientsvoice").hide();
		$("#team").hide();
		$("#clientsservice").hide();
		$("#home").hide();
		$("#faqs").show();
	});
});
</script>
</head>
<body style=" margin-left: auto; margin-right: auto; width:900px;">
<div id="admin_header">
<div id="logo"><a href="../main-admin.html"><img src="../Images/logo.png" /></a></div>
<div id="name">Admin panel
<a href="../Includes/log_out.php">Log Out</a>
</div>
</div>
<div id="main">
<div id="menu">
<li><a href="#home" id="home-menu">Home</a></li>
<li><a href="#about" id="about-menu">About</a></li>
<li><a href="#works" id="works-menu">Works</a></li>
<li><a href="#services" id="services-menu">Services</a></li>
<li><a href="#client" id="client-menu">Clients</a></li>
<li><a href="#clientvoice" id="clientsvoice-menu">Clients Voice</a></li>
<li><a href="#team" id="team-menu">Our Team</a></li>
<li><a href="#faqs" id="faqs-menu">FAQs</a></li>
</div>
<div id="cont">
<div id="welcome">
<p>
Welcome <?php echo $name; ?> to admin Panel<br>
Click on the respective link at the side to do an action. 
</p>
</div>
<div id="home">
<h2>Home</h2>
<!--
<form method="post" action="../Includes/cms_home.php">
<table>
<tr>
<td>Title: </td><td><select name="title">
<option value="department_of_IT" selected>Department of IT</option>

</select></td>
</tr>
<tr><td>Text/Message</td><td><textarea name="message" style="width: 500px; height: 200px;"></textarea></td></tr>
<tr><td colspan="2"><input type="submit" value="Submit" /></td></tr>
</table>
</form> -->
<marquee><span style="color: red; font-size: 20px;">Sorry.... We are working on It....</span></marquee>
</div> 
<div id="about">
<h2>About Us</h2>
<!--
<form action="../Includes/cms_home.php" method="post">
<input type="hidden" name="tid" value="2"/>
<table>
<tr>
<td>Title: </td><td><select name="title">
<option value="Company_Profile" selected>Company Profile</option>
<option value="Message_From_MD">Message From MD</option>
</select></td>
</tr>
<tr><td>Text/Message</td><td><textarea name="message" style="width: 500px; height: 200px;"></textarea></td></tr>
<tr><td colspan="2"><input type="submit" value="Submit" /></td></tr>
</table>
</form>
-->
<marquee><span style="color: red; font-size: 20px;">Sorry.... We are working on It....</span></marquee>
</div>
<div id="works">
<form action="../Includes/cms_it_insert.php" method="post" enctype="multipart/form-data">
<input type="text" name="id" value="1" hidden>
<table>
<tr>
<td>Clients' Name: </td><td><input type="text" name="name" /></td>
</tr>
<tr>
<td>Clients' URL: </td><td><input type="text" name="url" /></td>
</tr>
<tr><td>File: </td><td><input type="file" name="pic" /></td></tr>
<tr><td colspan="2"><input type="submit" value="Submit" /></td></tr>
</table>
</form>
</div>
<div id="services">
<h1>Services</h1>
<form action="../Includes/cms_it_insert.php" method="post" enctype="multipart/form-data">
<input type="text" name="id" value="2" hidden>
	<table>
	<tr><td>Select Scope</td><td><select name="serv">
		<option value="1">
			Web Design and Development
		</option>
		<option value="2">
			Web Hosting
		</option>
		<option value="3">
			Software Development
		</option>
		<option value="4">
			ICT Training
		</option>
		<option value="5">
			Domain Registration
		</option>
		<option value="6">
			Maintenance
		</option>
		<option value="7">
			Mobile Apps
		</option>
		<option value="8">
			Computer Software
		</option>
		<option value="9">
			Web Sites
		</option>

	</select></td></tr>
		<tr><td>Topic</td><td><input type="text" name="topic"></td></tr>
		<tr><td>Detail</td><td><textarea name="detail"></textarea></td></tr>
		<tr><td><input type="submit" name="" value="Submit"></td></tr>
	</table>
</form>


</div>
<div id="clients">
<h1>We are Associate With</h1>
<form action="../Includes/cms_it_insert.php" method="post" enctype="multipart/form-data">
<input type="text" name="id" value="3" hidden>
<table>
<tr>
<td>Clients' Name: </td><td><input type="text" name="name" /></td>
</tr>
<tr><td>Image: </td><td><input type="file" name="pic" /></td></tr>
<tr><td colspan="2"><input type="submit" value="Submit" /></td></tr>
</table>
</form>
</div>

<div id="clientsvoice">
<h1>Clients Voice</h1>
<form action="../Includes/cms_it_insert.php" method="post" enctype="multipart/form-data">
<input type="text" name="id" value="4" hidden>
<table>
<tr>
<td>Clients' Name: </td><td><input type="text" name="name" /></td>
</tr>
<tr><td>Office</td><td><input type="text" name="off"></td></tr>
<tr><td>Post:</td><td><input type="text" name="post"></td></tr>
<tr><td>Message</td><td><textarea name="msg"></textarea></td></tr>
<tr><td>Image: </td><td><input type="file" name="pic" /></td></tr>
<tr><td colspan="2"><input type="submit" value="Submit" /></td></tr>
</table>
</form>
</div>

<div id="team" style="display: none;">
<h1>Our Team</h1>
<form action="../Includes/cms_it_insert.php" method="post" enctype="multipart/form-data">
<input type="text" name="id" value="5" hidden>
<table>
<tr>
<td>Developers' Name: </td><td><input type="text" name="name" /></td>
</tr>
<tr><td>Post:</td><td><input type="text" name="post"></td></tr>
<tr><td>Message</td><td><textarea name="msg"></textarea></td></tr>
<tr><td>Image: </td><td><input type="file" name="pic" /></td></tr>
<tr><td colspan="2"><input type="submit" value="Submit" /></td></tr>
</table>
</form>
</div>

<div id="faqs" style="display: none;">
<h1>Frequently Asked Question</h1>
	<form method="post" action="../Includes/cms_it_insert.php" enctype="multipart/form-data">
	<input type="text" name="id" value="6" hidden>
		<table>
			<tr><td>Question</td><td><textarea name="question"></textarea></td></tr>
			<tr><td>Answer</td><td><textarea name="ans"></textarea></td></tr>
<tr><td><input type="submit" name="" value="Submit"></td></tr>

		</table>


	</form>
</div>


<!--
<div id="clientsvoice">
<form action="../Includes/cms_clients'.php" method="post" enctype="multipart/form-data">
<table>
<tr><td>Clients' Name: </td><td><input type="text" name="name" /></td></tr>
<tr><td>Designation: </td><td><input type="text" name="pos" /></td></tr>
<tr><td>Organization: </td><td><input type="text" name="org" /></td></tr>
<tr><td>Message: </td><td><textarea name="message" style="width: 500px; height: 200px;"></textarea></td></tr>
<tr><td>File: </td><td><input type="file" name="pic" /></td></tr>
<tr><td colspan="2"><input type="submit" value="Submit" /></td></tr>
</table>
</form>
</div>
</div>
-->
</div>
<div id="last_main_content">
<div id="footer">

</div>
</div>
</body>



</html>