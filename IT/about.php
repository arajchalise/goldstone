<?php 
include '../Includes/connection.php';

$data = mysqli_query($connection, "select * from tbl_about where tid='2'");

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>About Us</title>
        <?php include '../Includes/link.php'; ?>
        <style type="text/css">
        	#about_company #header{
        		background: #00415a;
        	}


        </style>
        </head>
	<div id="about_company">
	<?php include '../Includes/header.php'; 
	?>
	<div style="width: 100%; height: 150px;"></div>
<div class="about_company">

<div id="company_profile">
<h1 style="color: #00415a;">Company Profile</h1>
<hr width="100%" size="5px" style="border-radius: 5px;"/>
<?php while($row = mysqli_fetch_array($data)){?>
<p style="width: 80%; margin-left: auto; margin-right: auto; text-align: center;"><?php echo $row['detail']; ?></p>
<?php }?>
</div>

</div>

</div>
	<div id="development-team">
	<br><h1 style="color: #00415a;">Our Team</h1>
	<hr width="100%" size="5px" style="border-radius: 5px;"/>
	<div id="developer">
<?php 
	$dev = mysqli_query($connection, "select * from tbl_dev");
	while ($devdetail = mysqli_fetch_array($dev)) {
		?>
		<div class="developer">
	
	<div id="img"><img src="../Images/<?php echo $devdetail['img'] ?>"/></div>
	<p style="text-align: center; font-size: 18px; font-weight: bold;"><?php echo $devdetail['name'] ?><br><?php echo $devdetail['post']; ?> </p> <hr size="3px;" width="90%" style="margin-right: auto; margin-left: auto; border-radius: 2px; background: #00415a;"><br>
	<div style="width: 100%; height: 190px; background: #00415a; padding-top: 10px; color: #93d1ff; margin: 0px;"><p><?php echo $devdetail['msg']; ?></p>
	</div>
	
	</div>
	
		<?php
	}
	 ?>
	</div>
	</div>
	<div id="last_main_content">
<div id="footer">
<?php include '../Includes/footer.php'; ?>
</div>
</div>
	</body>
	</html>