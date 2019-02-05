<? 
session_start();
$country = $_SESSION['country'];
include '../Includes/connection.php';
require_once '../Includes/function.php';
$name = $_POST['name'];
$qul = $_POST['qul'];
$fac = $_POST['fac'];
$yr = $_POST['yr'];
$id = $_POST['id'];
?>
<body style="width: 800px; margin-left: auto; margin-right: auto; font-family: Banumas;">
<?php
if($name==null){echo "Name cant' be empty!!";
?>
<a href="../Edu/index.php">Go Back</a>
<?
exit;
}
else{
$curryear = date("y");
$gap = $curryear-$yr;
if($gap>5){
	echo "Sorry <b>".$name."</b>, You are not eligible...";
	
}
else if($gap<=5 && $qul==5){
	echo "Congratulation <b>".$name."</b>, You are eligible...";
	
}
else if($gap<=3){
	echo "Congratulation <b>".$name."</b>, You are eligible";
	
}
else{
	echo "Sorry <b>".$name."</b>, You are not eligible...";
	
}
}
?>
<br>
<a href="../Edu/studyabroad.php?studyabroad=<? echo $country ?>">Go Back</a>
</body>