<?php 
$connection = mysqli_connect("localhost", "root", "");
mysqli_select_db($connection, "db_gold");
$name = $_POST['name'];
$add = $_POST['add'];
$cont = $_POST['cont'];
$email = $_POST['email'];
$topic = $_POST['topic'];
$msg = $_POST['msg'];
$data = mysqli_query($connection, "select * from tbl_contact where email='$email'");
$row = mysqli_fetch_array($data);
$num = mysqli_num_rows($data);
if($num==0){
	if($name == NULL){echo "Name can't be empty....."; exit;}
	else{
	$hit = 1;
$insert = mysqli_query($connection, "INSERT INTO `db_gold`.`tbl_contact` (`name`, `add`, `contact`, `email`, `topic`, `mess` , `date`, `hit`) VALUES ('$name', '$add', '$cont', '$email', '$topic', '$msg', '$date', '$hit')");
if($insert){
	header ("location: ../IT/contact.php");
	exit;
}
}
}
else{
	$row['hit'] = $row['hit']+1;
	$hit = $row['hit'];
	$update = mysqli_query($connection, "update tbl_contact set hit='$hit'");
	if($update){
	header ("location: ../IT/contact.php");
	exit;	
	}
	}
?>