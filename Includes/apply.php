<?
include 'connection.php';
$tid = $_POST['id'];
$title = $_POST['gender'];
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['mob'];
$time = $_POST['time'];

if($name==null || $email==null || $tel==null)
	{echo "Some Information cant be empty!!"; 
exit;}

else{
$qry = "insert into tbl_application(tid, title, name, contact, email, time) values('$tid', '$title', '$name', '$tel', '$email', '$time')";
$inst = mysqli_query($connection, $qry);

if(!$inst){
	echo "Error";
	exit;
}
else{
	echo "Application Sent Successfully";
	exit;
}
}