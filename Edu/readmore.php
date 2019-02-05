<?php 
include '../Includes/connection.php';

$topic = $_GET['about'];

$data = mysqli_query($connection, "select * from tbl_fact_detail where topic='$topic'");

?>
<!DOCTYPE html>
<html>
<head>
        <title>Welcome to Gold Stone- Dept of Edu</title>
 
        <?php include '../Includes/link.php'; ?>
		</head>
<body>
<div>
	<?php include '../Includes/edu_header.php'; ?>
	<div style="width: 100%; height: 150px;"></div>
	<div id="actual_content">

		<div class="actual_content">
			<?php while($row = mysqli_fetch_array($data)){
				?>
				<p><?php echo $row['detail'] ?></p>
				<?php
			}?>
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