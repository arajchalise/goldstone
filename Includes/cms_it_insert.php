<? 
include 'connection.php';
$id = $_POST['id'];


if($id==1){
	$name = $_POST['name'];
	$url = $_POST['url'];
	$target = "../Images/";

$filename = $_FILES['pic']['name'];
$target1 = $target.$filename;

if($_FILES['pic']['type'] == 'image/jpeg' || $_FILES['pic']['type'] == 'image/pjpeg' ||$_FILES['pic']['type'] == 'image/png' || $_FILES['pic']['type'] == 'image/ppng' && $_FILES['pic']['size']>600000){

	if($_FILES['pic']['error']>0)
		{echo "Error...".$_FILES['pic']['error'];}

	else
	{
		if(file_exists($target1))
			{echo "File Exits"; exit;}

		else if(move_uploaded_file($_FILES['pic']['tmp_name'], $target1)){

		$inst = mysqli_query($connection, "insert into tbl_works (Name, URL, Image) values('$name', '$url', '$filename')");
		if(!$inst){
			echo "Error in Query";
			exit();
		}
		else{
		header("location: ../IT/it-admin.php");
	}
}
}
}
else{
	echo "Invalid File Format";
	exit();
}
}

elseif ($id==2){
	$topic = $_POST['topic'];
	$detail = $_POST['detail'];
$tid = $_POST['serv'];
	$inst = mysqli_query($connection, "insert into tbl_service_detail(tid, topic, detail) values('$tid', $topic', '$detail')");
	if(!$inst){
		echo "Error in Query";
		exit();
	}
	else{
		header("location: ../IT/it-admin.php");
	}
}

elseif ($id==3) {
	$name = $_POST['name'];
	$target = "../Clients/";
$filename = $_FILES['pic']['name'];
$target1 = $target.$filename;

if($_FILES['pic']['type'] == 'image/jpeg' || $_FILES['pic']['type'] == 'image/pjpeg' ||$_FILES['pic']['type'] == 'image/png' || $_FILES['pic']['type'] == 'image/ppng' && $_FILES['pic']['size']>600000){

	if($_FILES['pic']['error']>0)
		{echo "Error...".$_FILES['pic']['error'];}

	else
	{
		if(file_exists($target1))
			{echo "File Exits"; exit;}

		else if(move_uploaded_file($_FILES['pic']['tmp_name'], $target1)){

		$inst = mysqli_query($connection, "insert into tbl_clients (name, image) values('$name', '$filename')");
		if(!$inst){
			echo "Error in Query";
			exit();
		}
		else
		{
			header("location: ../IT/it-admin.php");
		}
}
}
}
else{
	echo "Invalid File Format";
	exit();
}
}

elseif ($id==4) {
	$name = $_POST['name'];
	$off= $_POST['off'];
	$pos = $_POST['post'];
	$msg = $_POST['msg'];
	$target = "../Clients/";
$filename = $_FILES['pic']['name'];
$target1 = $target.$filename;

if($_FILES['pic']['type'] == 'image/jpeg' || $_FILES['pic']['type'] == 'image/pjpeg' ||$_FILES['pic']['type'] == 'image/png' || $_FILES['pic']['type'] == 'image/ppng' && $_FILES['pic']['size']>600000){

	if($_FILES['pic']['error']>0)
		{echo "Error...".$_FILES['pic']['error'];}

	else
	{
		if(file_exists($target1))
			{echo "File Exits"; exit;}

		else if(move_uploaded_file($_FILES['pic']['tmp_name'], $target1)){

		$inst = mysqli_query($connection, "insert into tbl_clientsvoice (name, pos, off, msg, img) values('$name', '$pos', '$off', '$msg', '$filename')");
		if(!$inst){
			echo "Error in Query";
			exit();
		}
		else
		{
			header("location: ../IT/it-admin.php");
		}

}
}
}
else{
	echo "Invalid File Format";
	exit();
}
	
}


elseif ($id==5) {
	$name = $_POST['name'];
	$pos = $_POST['post'];
$msg = $_POST['msg'];
	$target = "../Images/";
$filename = $_FILES['pic']['name'];
$target1 = $target.$filename;

if($_FILES['pic']['type'] == 'image/jpeg' || $_FILES['pic']['type'] == 'image/pjpeg' ||$_FILES['pic']['type'] == 'image/png' || $_FILES['pic']['type'] == 'image/ppng' && $_FILES['pic']['size']>600000){

	if($_FILES['pic']['error']>0)
		{echo "Error...".$_FILES['pic']['error'];}

	else
	{
		if(file_exists($target1))
			{echo "File Exits"; exit;}

		else if(move_uploaded_file($_FILES['pic']['tmp_name'], $target1)){

		$inst = mysqli_query($connection, "INSERT INTO `db_gold`.`tbl_dev` (`id`, `name`, `post`, `img`, `msg`) VALUES (NULL, '$name', '$pos', '$filename', '$msg')");
		if(!$inst){
			echo "Error in Query";
			exit();
		}
		else
		{
			header("location: ../IT/it-admin.php");

		}
}
}
}
else{
	echo "Invalid File Format";
	exit();
}
}
	

else if($id==6){
	$detail = $_POST['ans'];
	$title = $_POST['question'];
	
	$inst = mysqli_query($connection, "insert into tbl_faq (tid, question, answer) values(2, '$title', '$detail')");
	if(!$inst){
		echo "Error in Quary!!!";
		?>
		<a href="../IT/it-admin.php">Go Back</a>
		<?
		exit;
	}
	else{
		echo "Successful!!!";
		?>
		<a href="../IT/it-admin.php">Go Back</a>
		<?
		exit;
	}
}

?>