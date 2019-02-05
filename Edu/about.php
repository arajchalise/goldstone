<?php 
include '../Includes/connection.php';
$topic = $_GET['title'];
$data = mysqli_query($connection, "select * from tbl_about where topic = '$topic'");
$data1 = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About Us</title>
        <?php include '../Includes/link.php'; ?>
         <style type="text/css">
        	#about_us #header{
        		background: #00415a;
        	}


        </style>
        </head>
	<div id="about_us">
	<?php include '../Includes/edu_header.php'; ?>
<div style="height: 150px; width: 100%;"></div>

<div class="about_us">
<br>
<div id="abt_detail"> <h1 style="color: #00415a;"><? echo $data1['topic'] ?></h1>
<hr width="100%" size="5px" style="border-radius: 5px;"/>
<?php if($data1['topic'] === "Message From MD") { ?>

	<center><div id="md_img"><img src="../Images/md.jpg" />
<br>
<span id="md_name">Subin Chalise<br>Managing Director</span>
</div> </center>
<?php
}

?>
<p><?echo $data1['detail'] ?></p>
</div>

<!--
<div id="company_profile">
<?
$com = mysqli_query($connection, "select * from tbl_about where tid='1'");
$comp = mysqli_fetch_array($com); ?>
<h3>
<? echo $comp['topic']; ?>
</h3>
<p><?php echo $comp['detail']; ?></p>
</div>
<div id="message_from_md">
<? $msg = mysqli_query($connection, "select * from tbl_about where tid='2'");
$message = mysqli_fetch_array($msg);
?>
<h3><? echo $message['topic'] ?></h3>
<div id="md_img"><img src="../Images/md.jpg" />
<br>
<span id="md_name">Subin Chalise<br>Managing Director</span>
</div>
<div id="act_msg">
<p><? echo $message['detail'] ?></p>
</div>
</div>
-->
</div>

</div>
<!--
<div id="other_info">
<div class="other_info">
<div id="what-student-get">
<? $what_student_get = mysqli_query($connection, "select * from tbl_about where tid='3'");
$what_student_gets = mysqli_fetch_array($what_student_get);?>
<h3><? echo $what_student_gets['topic'] ?></h3>
<p><? echo $what_student_gets['detail'] ?></p>
</div>
<div id="what-we-do">
<? $what_we_do = mysqli_query($connection, "select * from tbl_about where tid='4'");
$what_we_doo = mysqli_fetch_array($what_we_do);?>
<h3><? echo $what_we_doo['topic'] ?></h3>
<p><? echo $what_we_doo['detail'] ?></p>
</div>
</div>
</div> -->
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