<? 
session_start();
include '../Includes/connection.php';
include '../Includes/link.php';
$country1 = $_GET['studyabroad'];
$_SESSION['country'] = $country1;
$data1 = mysqli_query($connection, "select * from tbl_country where country='$country1'");
$country = mysqli_fetch_array($data1);
$cntry = $country['country'];
$id = $country['id'];
$data = mysqli_query($connection, "select * from tbl_countryd where tid='$id'");
$datat = mysqli_query($connection, "select * from tbl_countryd where tid='$id'");
?>
<!DOCTYPE html>
<html>
<head>
<title>Study In <? echo $cntry?></title>
 <style type="text/css">
        	#study-in #header{
        		background: #00415a;
        	}


        </style>
</head>
<body>
<div id="study-in">

<?php include '../Includes/edu_header.php'; ?>
<div style="height: 150px; width: 100%;"></div>
<div class="study-in">
<div id="country1">
<h1>Study In <? echo $cntry?></h1>
<?
while($res = mysqli_fetch_array($data)){
	?>
		<h3><? echo $res['topic'] ?></h3>
	<p><? echo $res['detail']?></p><br>
	
<? } ?>
</div>

<div id="eligibility" style="">
<h3>Check Your Eligibility:</h3>
<form method="post" action="check.php">
<input type="hidden" value="<? echo $id ?>" name="id" />
<table>
<tr><td>Name:</td><td><input type="text" name="name" placeholder="Enter your valid name...."/></td></tr>
<tr><td>Address:</td><td><input type="text" placeholder="Enter your current address"/></td></tr>
<tr><td>Email:</td><td><input type="email" placeholder="Enter your valid Email address"/></td></tr>
<tr><td>Qualification:</td><td>
<select name="qul">
<option value="2" selected>Intermediate</option>
<option value="3" >Dimploma</option>
<option value="4" >Bachelors' Degree</option>
<option value="5" >Masters' Degree</option>
</select>
</td></tr>
<tr><td>Faculty:</td><td>
<select name="fac">
<option value="sci" selected>Science and Technology</option>
<option value="mgmt" >Management</option>
<option value="arts" >Arts</option>
<option value="edu" >Education</option>
<option value="nur" >Nursing</option>
<option value="eng" >Engineering</option>
</select>
</td></tr>
<tr><td>Passed Year:</td><td>
<select name="yr">
<!--<option value="14">2014</option>
<option value="15">2015</option>
<option value="16">2016</option>
<option value="17">2017</option> -->
<?php
$date = date("y");
for($i=10; $i>=0; $i=$i-1){
	?>
<option value="<? echo ($date-$i) ?>"><? echo ($date-$i+2000) ?></option>
	<?php
}

 ?>
</select>
</td></tr>
<tr><td>Curr. Profession:</td><td><input type="text" name="pro" /></td></tr>
<tr><td></td><td><input type="submit" value="Check" id="chk"/></td></tr>
</table>
</form>
<img src="../Upload/<? echo $country['img'] ?>" style="width: 100%;"/>
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