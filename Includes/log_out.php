<?php 
session_start();
$connection = mysqli_connect("localhost", "root", "");
mysqli_select_db($connection, "db_gold");
unset($_SESSION['user']);
$lo_date = date("d/m/y h:i:s");
$dt = $_SESSION['date'];
$id = $_SESSION['a_id'];
mysqli_query($connection, "INSERT INTO `db_gold`.`tbl_log` (`a_id`, `log-in`, `log-out`) VALUES ('$id', '$dt', '$lo_date')");
unset($_SESSION['user']);
unset($_SESSION['date']);
unset($_SESSION['id']);
	header ("location:../admin.php");
	exit;
	
?>