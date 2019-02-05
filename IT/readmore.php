<?php 
include '../Includes/connection.php';
$id = $_GET['t'];
$topic = $_GET['type'];

$data = mysqli_query($connection, "select * from tbl_service_detail where tid='$id'");

?>
<!DOCTYPE html>
<html>
<head>
        <title>Welcome to Gold Stone- Dept of IT</title>
 
        <?php include '../Includes/link.php'; ?>
		</head>
<body>
<div>
	<?php include '../Includes/header.php'; ?>
	<div style="width: 100%; height: 150px;"></div>
	<div id="actual_content">

		<div class="actual_content">

			<?php while($row = mysqli_fetch_array($data)){
				?>
				<h1><?php echo $row['topic'] ?></h1>
				<p><?php echo $row['detail'] ?></p>
				<?php
			}?>
		</div>
	</div>
</div>
</body>
</html>