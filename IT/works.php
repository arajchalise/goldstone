<!DOCTYPE html>
<html lang="en">
<?php include '../Includes/connection.php'; ?>
    <head>
        <title>Our Works</title>
        <?php include '../Includes/link.php'; ?>
        <style type="text/css">
        	#works_main_content #header{
        		background: #00415a;
        	}


        </style>
        </head>
		<div id="works_main_content">
		<?php include '../Includes/header.php'; ?>
<div class="clear" style="height: 150px; width: 100%;" ></div>
		<div id="latest_works"><br>
		<center><h1>Works</h1></center>
		<hr width="100%" size="5px" style="border-radius: 5px;" />
		
		<?php 
		$qry = "select Name, URL, Image from tbl_works";
		$data = mysqli_query($connection, $qry);
		while($result = mysqli_fetch_array($data)){
		?>
		<div id="worksmain">
		<div id="worksimg" style="width: 320px; height: 350px; border-radius: 10px; "><img src="../Images/<?php echo $result['Image'] ?>" width="100%" height="100%"/></div>

		<div id="worksname" style="border-radius: 10px; "><p style="font-size: 18px;"><?php echo $result['Name']?> <br>
		<a target="_blank" href="http://<?php echo $result['URL'] ?>" style="text-decoration: none; font-size: 15px;">Visit Website</a></p></div>
		</div>
		 <?php } ?>

		</div>
		
		<div id="last_main_content">
<div id="footer">
<?php include '../Includes/footer.php'; ?>
<!--<div id="top">
<a href="#works_main_content"><img src="Icon/top.png" /></a>
</div> -->
</div>
</div>
		</body>
		</html>