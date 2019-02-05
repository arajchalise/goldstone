<? 
include '../Includes/connection.php';

$testp = $_GET['test_preparation'];
$data1 = mysqli_query($connection, "select * from tbl_test where test='$testp'");
$test = mysqli_fetch_array($data1);
$t = $test['test'];
$tid = $test['id'];
$data = mysqli_query($connection, "select * from tbl_testd where tid='$tid'");
$i = $test['img'];
?>
<!DOCTYPE html>
<html>
<head>
<title><? echo $t ?> Preparation</title>
<? include '../Includes/link.php' ?>
 <style type="text/css">
        	#ttest #header{
        		background: #00415a;
        	}


        </style>
</head>
<body>
<div id="ttest">
<?php include '../Includes/edu_header.php'; ?>
<div style="height: 150px; width: 100%;"></div>

<div id="test-container">
<div id="ttest-dt">
<h1><? echo $t?> Preparation</h1>
<img src="../Upload/<? echo $i ?>" style="Width: 99%; height: 300px; maring-right: 1%;"/>
<?
while($datac = mysqli_fetch_array($data)){
	?>
<p><? echo $datac['detail']?></p>
	<?
}
?>
</div>
<div id="apply">
<h2>Apply Online</h2>
<form method="post" action="../Includes/apply.php">
<input type="hidden" value="<? echo $id?>" name="id"/>
<table>
<tr><td>Title: </td><td><input type="radio" name="gender" value="male" checked id="rd"/>Male <input type="radio" name="gender" value="female" id="rd"/>Female <input type="radio" name="gender" value="other" id="rd"/>Other</td></tr>
<tr><td>Name:</td><td><input type="text" name="name" id="nm" placeholder="Enter your Valid Name..."/></td></tr>
<tr><td>Email:</td><td><input type="email" name="email" id="em" placeholder="Enter your Valid Email Address..."/></td></tr>
<tr><td>Contact:</td><td><input type="text" name="mob" id="mo" placeholder="Enter your current mobile no .."/></td></tr>
<tr><td>Course: </td><td><input type="text" value="<? echo $t ?>" readonly /></td></tr>
<tr><td>Select Time:</td><td>
<select name="time">
<option value="11">11 A.M-12 P.M</option>
<option value="3">3 P.M-4 P.M</option>
<option value="4">4 P.M-5 P.M</option>
</select>
</td>
</tr>
<tr><td></td><td><input type="submit" value="Apply" id="submit"/></tr>
</table>
</form>
</div>
</div>
</div>
<div id="last_main_content">
<div id="footer">
<?php include '../Includes/footer.php'; ?>
<!--<div id="top">
<a href="#about_company"><img src="Icon/top.png" /></a>
</div>
-->
</div>
</div>
</body>
</html>