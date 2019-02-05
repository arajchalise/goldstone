
<?php
session_start();
if(!isset($_SESSION['user']) || $_SESSION['user'] == ""){
	header ("location: admin.php");
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
<title>Edu Admin Panel</title>
<link rel="stylesheet" type="text/css" href="../Style/admin.css" />
<script type="text/javascript" src="../Scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../Scripts/bootstrap.js"></script>
<script type="text/javascript" src="../Scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="../Scripts/stylechanger.js"></script>
<script type="text/javascript" src="../Scripts/jquery-ui-1.7.2.custom.min.js"></script>
<style>
body{
	width: 800px;
	margin-left: auto;
	margin-right: auto;
}
ul li{
	border: none;
	display: inline-block;
}
form textarea{
	height: 200px;
	width: 500px;
}
</style>
<script>
$(function(){
	$("#home-menu").click(function(){
		$("#welcome").hide();
		$("#about").hide();
		$("#test").hide();
		$("#country").hide();
		$("#home").show();
		$("#faqs").hide();
		$("#testimonials").hide();
		$("#impfact").hide();
	});

	$("#about-menu").click(function(){
		$("#welcome").hide();
		$("#about").show();
		$("#test").hide();
		$("#country").hide();
		$("#home").hide();
		$("#faqs").hide();
		$("#testimonials").hide();
		$("#impfact").hide();
	});
	$("#test-menu").click(function(){
		$("#welcome").hide();
		$("#about").hide();
		$("#test").show();
		$("#country").hide();
		$("#home").hide();
		$("#faqs").hide();
		$("#testimonials").hide();
		$("#impfact").hide();
	});
	$("#country-menu").click(function(){
		$("#welcome").hide();
		$("#about").hide();
		$("#test").hide();
		$("#country").show();
		$("#home").hide();
		$("#faqs").hide();
		$("#testimonials").hide();
		$("#impfact").hide();
	});
	
	$("#testimonials-menu").click(function(){
		$("#welcome").hide();
		$("#about").hide();
		$("#test").hide();
		$("#country").hide();
		$("#home").hide();
		$("#faqs").hide();
		$("#testimonials").show();
		$("#impfact").hide();
	});
	$("#impfact-menu").click(function(){
		$("#welcome").hide();
		$("#about").hide();
		$("#test").hide();
		$("#country").hide();
		$("#home").hide();
		$("#faqs").hide();
		$("#testimonials").hide();
		$("#impfact").show();
	
	});

	$("#faqs-menu").click(function(){
		$("#welcome").hide();
		$("#about").hide();
		$("#test").hide();
		$("#country").hide();
		$("#home").hide();
		$("#faqs").show();
		$("#testimonials").hide();
		$("#impfact").hide();
	
	});
	
});
</script>
</head>
<body style=" margin-left: auto; margin-right: auto; width: 95%">
<div id="admin_header">
<div id="logo"><a href="../main-admin.html"><img src="../Images/logo.png" /></a></div>
<div id="name">Admin panel
<a href="../Includes/log_out.php">Log Out</a>
</div>
</div>
<div id="main" style="width: 100%; height: 50px;">
<div id="menu">
<li><a href="#home" id="home-menu">Home</a></li>
<li><a href="#about" id="about-menu">About</a></li>
<li><a href="#test" id="test-menu">Test</a></li>
<li><a href="#country" id="country-menu">Country</a></li>
<li><a href="#faqs" id="faqs-menu">FAQs</a></li>
<li><a href="#testimonials" id="testimonials-menu">Testimonials</a></li>
<li><a href="#impfact" id="impfact-menu">Important Link</a></li>
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
<table border="1px">
<tr><td colspan="3"><a href="../Includes/cms_insert.php?id=1">Insert New Item</a></td></tr>
<tr><td>Data/Topic</td><td>Name/Image</td><td>Action</td></tr>
<? $home_data = mysqli_query($connection, "select * from tbl_home order by tid"); 
while($all_home_data = mysqli_fetch_array($home_data)){
	?>
	<tr><td><? echo $all_home_data['data']?></td><td><? echo $all_home_data['img'] ?></td><td><a href="../Includes/cms_edit.php?id=<? echo $all_home_data['id'] ?> && pid=1">Edit</a><br><a href="../Includes/cms_del.php?id=<? echo $all_home_data['id'] ?> && pid=1">Delete</a></td><tr>
	<?
}
?>
</table>
</div>
<div id="about">
<h2>About Us</h2>
<table border="1px">
<tr><td colspan="3"><a href="../Includes/cms_insert.php?id=2">Insert New Item</a></td></tr>
<tr><td>Topic</td><td>Detail</td><td>Action</td></tr>
<? $about_data = mysqli_query($connection, "select * from tbl_about"); 
while($all_about_data = mysqli_fetch_array($about_data)){
	?>
	<tr><td><? echo $all_about_data['topic']?></td><td><? echo $all_about_data['detail'] ?></td><td><a href="../Includes/cms_edit.php?id=<? echo $all_about_data['id'] ?> && pid=2">Edit</a><br><a href="../Includes/cms_del.php?id=<? echo $all_about_data['id'] ?> && pid=2">Delete</a></td><tr>
	<?
}
?>
</table>
</div>
<div id="test" style="display: none;">
<h2>Test Preparation</h2>
<!--<form action="../Includes/cms_test.php" method="post" enctype="multipart/form-data">
<input type="hidden" value="testd" name="idd"/>
<table>
<tr>
<td>Test Name: </td><td><select name="test"><option value="1" selected>IELTS</option>
<option value="2">TOEFL</option>
<option value="3" >SAT</option>
<option value="4">NAT</option>
<option value="5">JLPT</option>
</select></td>
</tr>
<tr><td>Detal: </td><td><textarea name="test_detail"></textarea></td></tr>
<tr><td colspan="2"><input type="submit" value="Submit" /></td></tr>
</table>
</form> -->
<table border="1px">
<tr><td colspan="3"><a href="../Includes/cms_insert.php?id=3">Insert New Item</a></td></tr>
<tr><td>Test</td><td>Detail</td><td>Action</td></tr>
<? $test_data = mysqli_query($connection, "select * from tbl_testd order by tid");
 
while($all_test_data = mysqli_fetch_array($test_data)){
	$id = $all_test_data['tid'];
	$test = mysqli_query($connection, "select * from tbl_test where id='$id'");
	$testname = mysqli_fetch_array($test);
	?>
	<tr><td><? echo $testname['test'] ?></td><td><? echo $all_test_data['detail']?></td><td><a href="../Includes/cms_edit.php?id=<? echo $all_test_data['id'] ?> && pid=3">Edit</a><br><a href="../Includes/cms_del.php?id=<? echo $all_test_data['id'] ?> && pid=3">Delete</a></td><tr>
	<?
}
?>
</table>
</div>

<div id="country" style="display: none;">
<h2>Country</h2>
<!--<form action="../Includes/cms_test.php" method="post" enctype="multipart/form-data">
<input type="hidden" value="countryd" name="idd"/>
<table>
<tr>
<td>Countrys' Name: </td><td>
<select name="test">
<option value="1">U.S.</option>
<option value="2">Australia</option>
<option value="3">Japan</option>
<option value="4">Korea</option>
<option value="5">Denmark</option>
</select></td>
</tr>
<tr><td>Topic</td><td><input type="text" name="topic" /></td></tr>
<tr><td>Detail: </td><td><textarea name="test_detail"></textarea></td></tr>
<!--<tr><td>Country Image: </td><td><input type="file" name="pic" /></td></tr> 
<tr><td></td></tr>
<tr><td colspan="2"><input type="submit" value="Submit" /></td></tr>
</table>
</form>  -->
<table border="1px">
<tr><td colspan="4"><a href="../Includes/cms_insert.php?id=4">Insert New Item</a></td></tr>
<tr><td>Country</td><td>Topic</td><td>Detail</td><td>Action</td></tr>
<? $country_data = mysqli_query($connection, "select * from tbl_countryd order by tid");
 
while($all_country_data = mysqli_fetch_array($country_data)){
	$id = $all_country_data['tid'];
	$cnt = mysqli_query($connection, "select * from tbl_country where id='$id'");
	$countryname = mysqli_fetch_array($cnt);
	?>
	<tr><td><? echo $countryname['country'] ?></td><td><? echo $all_country_data['topic']?></td><td><? echo $all_country_data['detail'] ?></td><td><a href="../Includes/cms_edit.php?id=<? echo $all_country_data['id'] ?> && pid=4">Edit</a><br><a href="../Includes/cms_del.php?id=<? echo $all_country_data['id'] ?> && pid=4">Delete</a></td><tr>
	<?
}
?>
</table>
</div>

<div id="testimonials" style="display: none;">
<h1>Student Testimonials</h1>
	<form method="post" action="../Includes/cms_insert_done.php" enctype="multipart/form-data">
	<input type="text" name="id" value="6" hidden>
		<table>
			<tr><td>Student Name: </td><td><input type="text" name="name"></td></tr>
			<tr><td>University</td><td><input type="text" name="university"></td></tr>
			<tr><td>Country</td><td><input type="text" name="country"></td></tr>
			<tr><td>Message</td><td><textarea name="message"></textarea></td></tr>
			<tr><td>Image</td><td><input type="file" name="pic"></td>/</tr>
<tr><td><input type="submit" name="" value="Submit"></td></tr>

		</table>


	</form>
</div>
<div id="impfact" style="display: none;">
<h1>Important Link</h1>
	<form method="post" action="../Includes/cms_insert_done.php" enctype="multipart/form-data">
	<input type="text" name="id" value="7" hidden>
		<table>
			<tr><td>Topic</td><td><select name="topic">
			<option value="Documentation">Documentation</option>				
			<option value="Visa Counseling">Visa Service</option>				
			<option value="Career Counseling">Career Counseling</option>				
			</select></td></tr>
			<tr><td>Detail</td><td><textarea name="message"></textarea></td></tr>
<tr><td><input type="submit" name="" value="Submit"></td></tr>

		</table>


	</form>
</div>

<div id="faqs" style="display: none;">
<h1>Frequently Asked Question</h1>
	<form method="post" action="../Includes/cms_insert_done.php" enctype="multipart/form-data">
	<input type="text" name="id" value="8" hidden>
		<table>
			<tr><td>Question</td><td><textarea name="question"></textarea></td></tr>
			<tr><td>Answer</td><td><textarea name="ans"></textarea></td></tr>
<tr><td><input type="submit" name="" value="Submit"></td></tr>

		</table>


	</form>
</div>

</div>

</div>
</body>
</html>