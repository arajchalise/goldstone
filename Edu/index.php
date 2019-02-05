<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../Style/external.css" /> 
<script type="text/javascript" src="../Scripts/external.js"></script> 
<link rel="shortcut" />
<title>Welcome to Gold Stone- Dept. of Edu</title>
<?php include '../Includes/link.php';
include '../Includes/connection.php';
require_once '../Includes/function.php';
 ?>
 <script type="text/javascript">
  
 </script>
  <style type="text/css">
        #edu-container #header #a-drop{
          background: none;
        }
        #edu-container #header #a-drop ul li a{ color: #000;}
        #edu-container #header #a-drop ul li:hover{
          background: none;
        }

        </style>
</head>
<body>
<div id="edu-container">
<?php include '../Includes/edu_header.php'; ?>
<div style="height: 380px; width: 100%;"></div>
<div id="main-content">

<span style="font-size: 50px; font-weight: bold;">We will help you to study in your dream University</span><br>
<li><a href="#" id="app">Apply Online</a></li>
<!--<? $home = mysqli_query($connection, "select * from tbl_home where tid='1'");
$home_data = mysqli_fetch_array($home); ?> 
<img src="../Images/<? echo $home_data['img'] ?>"/>
	<p style="margin: 0px 10px;"><? echo $home_data['data']?></p>  -->

<!--<div id="updates">
<h2>News & Updates</h2>
<hr height="1px" width="100%" color="red" />
<marquee direction="up" scrollamount="2" onmouseover="this.stop()" onmouseout="this.start()" width="100%"
height="80%" style="">
<? 
$news = mysqli_query($connection, "select * from tbl_home where tid='2'");
while($row1 = mysqli_fetch_array($news)){
	?>
	<h4><? echo $row1['img'] ?></h4>
	<p><? echo $row1['data']?></p>
	<?
}
?>
</marquee>
</div>
</div> -->
</div>
</div>

<!--Edu container ends here -->
<div id="service">
  <div class="service">
<?php $imp_fact = mysqli_query($connection, "SELECT *
FROM tbl_fact
ORDER BY id DESC
LIMIT 0 , 3 ");
while($imp= mysqli_fetch_array($imp_fact)){
?>
<div id="thumb_">
<h3><? echo $imp['title'] ?></h3>
<hr width="100%" size="3px" color="#00415a" style="border-radius: 5px; margin-right: auto; margin-left: auto;"></hr>
<p><? echo $imp['data'] ?></p>
<!--<li><a href="readmore.php?about=<?php echo $imp['title'] ?>">Read More</a></li> -->
</div>
<?php } ?>


  </div>
</div>

<div style="width: 80%; margin-left: auto; margin-right: auto; height: 400px; margin-bottom: 20px;">
<div id="testimonials">
<div class="testimonials">
<h2>Students' Testimonials</h2>
<hr width="100%" size="3px" color="#00415a" style="border-radius: 5px; margin-right: auto; margin-left: auto;"></hr>
<div class="carousel" data-flickity='{ "autoPlay": true }'>
<?php $testimonials = mysqli_query($connection, "select * from tbl_testimonials");
while ($testimonialsdata = mysqli_fetch_array($testimonials)) {
  ?>
  <div class="carousel-cell">
   <div style="float: right: width: 70%;">
     <p><?php echo $testimonialsdata['message'] ?></p>
   </div> 
<div id="img"><img src="../Students/<?php echo $testimonialsdata['img'] ?>"/>
  <p><?php echo $testimonialsdata['name'] ?></p>
  <p><?php echo $testimonialsdata['university'] ?> , <?php echo $testimonialsdata['country'] ?></p>
  </div>

  </div>
  <?php
}
?>
 

</div>
</div> 
</div><!-- Testimonials end here -->
<div id="news">
  <h2>News and Update</h2>
<hr width="100%" size="3px" color="#00415a" style="border-radius: 5px; margin-right: auto; margin-left: auto;"></hr>
<marquee direction="up" scrollamount="2" onmouseover="this.stop()" onmouseout="this.start()" width="100%"
height="80%" style="">
<? 
$news = mysqli_query($connection, "select * from tbl_home where tid='2'");
while($row1 = mysqli_fetch_array($news)){
  ?>
  <h4><? echo $row1['img'] ?></h4>
  <p><? echo $row1['data']?></p>
  <?
}
?>
</marquee>
</div>
</div>

<!--<div id="imp_fact">

</div> -->

<!--
<div id="associates">
<div class="associates">
<h1>We Are Associated With</h1>
<?
$dt = mysqli_query($connection, "select * from tbl_home where tid='4'");
while($associate = mysqli_fetch_array($dt)){?>
<a href="http://<? echo $associate['data'] ?>" target="_blank"><img src="../Clients/<?php echo $associate['img']; ?>" /></a>
<?}?>

</div>
</div> -->
<div id="last_main_content">
<!--<div id="top">
<a href="#first_main_content" onMouseOver="document.top.src='Icon/top-hov.png'" onMouseOut="document.top.src='Icon/top.png'"><img src="Icon/top.png" name="top"/></a>
</div> -->
<div id="footer">
<?php include '../Includes/footer.php'; ?>
</div>
</div>
</body>
</html>