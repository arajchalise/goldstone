<? 
include 'connection.php';
require 'function.php';
$id = $_POST['id'];
$tid = $_POST['tid'];
$pid = $_POST['pid'];
if($pid==1){
$data = $_POST['data'];
$img = $_POST['img'];
mysqli_query($connection, "update tbl_home set tid='$tid', data='$data', img='$img' where id='$id'");
header("location: ../EDU/edu-admin.php#home");
}
else if($pid==2){
$data = $_POST['data'];
$img = $_POST['img'];
mysqli_query($connection, "update tbl_about set tid='$tid', topic='$img', detail='$data' where id='$id'");	
header("location: ../EDU/edu-admin.php#about");
}
else if($pid==3){
$data = $_POST['data'];
mysqli_query($connection, "update tbl_testd set tid='$tid',  detail='$data' where id='$id'");	
header("location: ../EDU/edu-admin.php#test");
}
else if($pid==4){
$data = $_POST['data'];
$img = $_POST['img'];
mysqli_query($connection, "update tbl_countryd set tid='$tid', topic='$img', detail='$data' where id='$id'");
header("location: ../EDU/edu-admin.php#country");	
}
else if($pid==5){
	$school = $_POST['school'];
	$add = $_POST['add'];
	$tel = $_POST['tel'];
	$url = $_POST['url'];
	$img = $_POST['img'];
	
	mysqli_query($connection, "UPDATE `db_gold`.`tbl_college` SET `cid` = '$tid', `school` = '$school',
`add` = '$add',
`tel` = '$tel',
`url` = '$url',
`img` = '$img' WHERE `tbl_college`.`id` ='$id'");
	header("location: ../EDU/edu-admin.php#school");
}
