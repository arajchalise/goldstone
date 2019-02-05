<? 
include 'connection.php';
$id = $_POST['id'];
if($id==1){
if(isset($_POST['text'])){
	$tid = $_POST['topic'];
	$title = $_POST['title'];
	$data = $_POST['data'];
	$inst = mysqli_query($connection, "insert into tbl_home (tid, data, img) values('$tid', '$data', '$title')");
	if(!$inst){
		echo "Error in Quary!!";
		?>
		<a href="../Edu/edu-admin.php">Go Back</a>
		<?
	}
	else{
		echo "Successful!!";
		?>
		<a href="../Edu/edu-admin.php">Go Back</a>
		<?
		exit;
	}
}

else if(isset($_POST['img'])){
	$tid = $_POST['title'];
	$url = $_POST['url'];
	$target = "../Clients/";
$filename = $_FILES['pic']['name'];
$target1 = $target.$filename;
if($_FILES['pic']['type'] == 'image/jpeg' || $_FILES['pic']['type'] == 'image/pjpeg' ||$_FILES['pic']['type'] == 'image/png' || $_FILES['pic']['type'] == 'image/ppng' && $_FILES['pic']['size']>600000){
	if($_FILES['pic']['error']>0){echo "Error...".$_FILES['pic']['error'];}

	else
	{
		if(file_exists($target1)){echo "File Exits"; exit;}
		else if(move_uploaded_file($_FILES['pic']['tmp_name'], $target1)){
		$inst = mysqli_query($connection, "insert into tbl_home (tid, data, img) values('$tid', '$url', '$filename')");
if(!$inst){
	echo "Error in Query";
	exit;
}
else{
	echo "Submimssion Successful..";
	?>
	<a href="../Edu/edu-admin.php">Go Back</a>
	<?
	exit;
}

	
	
}
	}
}
else{
	echo "Error in Submitting!!!";
	exit;
}
}
}
else if($id==3){
	$test = $_POST['test'];
	$data = $_POST['data'];
	$inst = mysqli_query($connection, "insert into tbl_testd (tid, detail) values('$test', '$data')");
	if(!$inst){echo "Error in Quary!!";
	?>
	<a href="../Edu/edu-admin.php">Go Back</a>
	<?
	exit;
	}
	else{
		echo "Successful!!!";
		?>
		<a href="../Edu/edu-admin.php">Go Back</a>
		<?
		exit;
	}
}
else if($id==4){
	$country = $_POST['country'];
	$title = $_POST['topic'];
	$data = $_POST['data'];
	
	$inst = mysqli_query($connection, "insert into tbl_countryd (tid, topic, detail) values('$country', '$title', '$data')");
	if(!$inst){
		echo "Error in Quary!!!";
		?>
		<a href="../Edu/edu-admin.php">Go Back</a>
		<?
		exit;
	}
	else{
		echo "Successful!!!";
		?>
		<a href="../Edu/edu-admin.php">Go Back</a>
		<?
		exit;
	}
}
else if($id==5){
	$country = $_POST['country'];
	$school = $_POST['school'];
	$add = $_POST['add'];
	$tel = $_POST['tel'];
	$url = $_POST['url'];
	$target = "../Upload/";
$filename = $_FILES['pic']['name'];
$target1 = $target.$filename;
if($_FILES['pic']['type'] == 'image/jpeg' || $_FILES['pic']['type'] == 'image/pjpeg' ||$_FILES['pic']['type'] == 'image/png' || $_FILES['pic']['type'] == 'image/ppng' && $_FILES['pic']['size']>600000){
	if($_FILES['pic']['error']>0){echo "Error...".$_FILES['pic']['error'];}

	else
	{
		if(file_exists($target1)){echo "File Exits"; exit;}
		else if(move_uploaded_file($_FILES['pic']['tmp_name'], $target1)){
		$inst = mysqli_query($connection, "INSERT INTO `db_gold`.`tbl_college` (`cid`, `school`, `add`, `tel`, `url`, `img`) VALUES ('$country', '$school', '$add', '$tel', '$url', '$filename')");
if(!$inst){
	echo "Error in Query";
	exit;
}
else{
	echo "Submimssion Successful..";
	?>
	<a href="../Edu/edu-admin.php">Go Back</a>
	<?
	exit;
}

	
	
}
	}
}
else{
	echo "Error in Submitting!!!";
	exit;
}
}


elseif ($id==6) {
	$name = $_POST['name'];
	$university = $_POST['university'];
	$country = $_POST['country'];
	$message = $_POST['message'];
$target = "../Students/";
$filename = $_FILES['pic']['name'];
$target1 = $target.$filename;
if($_FILES['pic']['type'] == 'image/jpeg' || $_FILES['pic']['type'] == 'image/pjpeg' ||$_FILES['pic']['type'] == 'image/png' || $_FILES['pic']['type'] == 'image/ppng' && $_FILES['pic']['size']>600000){
	if($_FILES['pic']['error']>0){echo "Error...".$_FILES['pic']['error'];}

	else
	{
		if(file_exists($target1)){echo "File Exits"; exit;}

		else if(move_uploaded_file($_FILES['pic']['tmp_name'], $target1)){

		$inst = mysqli_query($connection, "INSERT INTO `db_gold`.`tbl_testimonials` (`name`, `university`, `country`, `message`, `img`) VALUES ('$name', '$university', '$country', '$message', '$filename')");

		if(!$inst){
			echo "Error in Submitting";
			exit();
		}


}
}
}
}


else if($id==7){
	$detail = $_POST['message'];
	$title = $_POST['topic'];
	
	$inst = mysqli_query($connection, "insert into tbl_fact_detail (topic, detail) values('$title', '$detail')");
	if(!$inst){
		echo "Error in Quary!!!";
		?>
		<a href="../Edu/edu-admin.php">Go Back</a>
		<?
		exit;
	}
	else{
		echo "Successful!!!";
		?>
		<a href="../Edu/edu-admin.php">Go Back</a>
		<?
		exit;
	}
}

else if($id==8){
	$detail = $_POST['ans'];
	$title = $_POST['question'];
	
	$inst = mysqli_query($connection, "insert into tbl_faq (tid, question, answer) values(1, '$title', '$detail')");
	if(!$inst){
		echo "Error in Quary!!!";
		?>
		<a href="../Edu/edu-admin.php">Go Back</a>
		<?
		exit;
	}
	else{
		echo "Successful!!!";
		?>
		<a href="../Edu/edu-admin.php">Go Back</a>
		<?
		exit;
	}
}

?>