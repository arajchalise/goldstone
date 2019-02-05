<?php 
session_start();
$connection = mysqli_connect("localhost", "root", "");
mysqli_select_db($connection, "db_gold");
$user = $_POST['user'];
$pass = $_POST['pass'];
$date = date("d/m/y h:i:s");
$_SESSION['date'] = $date;
$qry = mysqli_query($connection, "select * from tbl_admin where user = '$user' and pass = '$pass'");
$row = mysqli_fetch_array($qry);
$num = mysqli_num_rows($qry);
if($num==0)
{
	echo "Either password or username is invalid.<br>";
	echo '<a href="../admin.php">Go Back</a>';
}
else{
	if($row['user']===$user && $row['pass']===$pass){header ("location:../main-admin.html");
$_SESSION['user']=$row['user'];
$_SESSION['name']=$row['name'];
$_SESSION['a_id']=$row['id'];
exit;}
else{
		echo "Either password or username is invalid.<br>";
	echo '<a href="../admin.php">Go Back</a>';
}

}
?>