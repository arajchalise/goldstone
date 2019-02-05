<!DOCTYPE html>
<?php 
include '../Includes/connection.php';
require '../Includes/function.php';
?>
<html lang="en">
    <head>
        <title>Welcome to Gold Stone- Dept of IT</title>
        <link rel="stylesheet" type="text/css" href="../Style/external.css" /> 
		<script type="text/javascript" src="../Scripts/external.js"></script>
        <?php include '../Includes/link.php'; ?>
		</head>
<div id="first_main_content">
<?php include '../Includes/header.php'; ?>
<div style="width: 100%; height: 350px;"></div>
<div id="welcome">
 <h1 style="text-align: center; color: #fff; font-size: 60px; margin-left: 100px;">Digitalized  your business, <br>Go on internet with us</h1>
 <center><li><a href="#">Request a Quote</a></li></center>
</div>
</div>
<div style="width: 100%; height: 350px; margin-bottom: 20px;">
  <div style="width: 80%; margin-left: auto; margin-right: auto; height: 100%;">
    <div id="thumbnail" style="width: 31%; height: 100%; float: left; background: #00415a; margin-right: 20px; border-radius: 5px;"><p style="text-align: center; padding: 5px; margin-top: 10px; color: #93d1ff; font-size: 22px;">Mobile Apps</p>
    <hr size="3px;" width="90%" style="margin-right: auto; margin-left: auto; border-radius: 2px; background: #fff;">
    <p style="font-size: 16px; color: #93d1ff; padding: 5px; width: 70%; margin-right: auto; margin-left: auto; text-align: center;">Mobile application is new trend in todays technology world.  Companies are more interested in releasing their mobile apps to connect with their customer. GOLD STONE is developing Android and iOS applications which is more responsive and effective.</p>
    <!--<center><li><a href="readmore.php?t=7 && type=mobile">Know More</a></li></center> -->
    </div>
<div id="thumbnail" style="width: 31%; height: 100%; float: left; background: #00415a; margin-right: 20px; border-radius: 5px;"><p  style="text-align: center; padding: 5px; margin-top: 10px; color: #93d1ff; font-size: 22px;">Computer Software</p>
<hr size="3px;" width="90%" style="margin-right: auto; margin-left: auto; border-radius: 2px; background: #fff;">
<p style="font-size: 16px; color: #93d1ff; padding: 5px; width: 70%; margin-right: auto; margin-left: auto; text-align: center;">Computer software is a bridge between human and computer hardware. Life without computer is almost impossible. GOLD STONE have ecperienced staff member with creative ideas to support customer. We are developing desktop application or server based applications using latest technology.</p>
   <!-- <center><li><a href="readmore.php?t=8 && type=computer">Know More</a></li></center> -->
</div>
<div id="thumbnail" style="width: 31%; height: 100%; float: left; background: #00415a; margin-right: 20px; border-radius: 5px;"><p  style="text-align: center; padding: 5px; margin-top: 10px; color: #93d1ff; font-size: 22px;">Web Sites</p>
<hr size="3px;" width="90%" style="margin-right: auto; margin-left: auto; border-radius: 2px; background: #fff;">
<p style="font-size: 16px; color: #93d1ff; padding: 5px; width: 70%; margin-right: auto; margin-left: auto; text-align: center;">Website design and development is totally a creative job and our dedicated and energetic staff member guide you.  We are developing different websites for different private and government institutions. We develop static and dynamic websites as per your requirements.</p>
   <!-- <center><li><a href="readmore.php?t=9 && type=websites">Know More</a></li></center> -->
</div>


  </div>



</div>
<div id="second_main_content">
<div class="core_service">
<h1 style="color: #00415a;">We Are Associated With</h1>

<br><br>
<?php while($rw = mysqli_fetch_array($dt)){?>
<div id="th">
<img src="../Clients/<?php echo $rw['image']; ?>"/>
<?php echo $rw['name']; ?>
</div>
<?}?>
</div>
</div>

<div id="it-testimonials">
<div class="it-testimonials">
<h1 style="color: #00415a;"">Clients' Voice</h1>

<div class="carousel" data-flickity='{ "autoPlay": true }'>
<?php $clientsvoice = mysqli_query($connection, "select * from tbl_clientsvoice");
while($client_voice = mysqli_fetch_array($clientsvoice)){
  ?>
<div class="carousel-cell">
  <img src="../Clients/<?php echo $client_voice['img'] ?>"/><br>
  <p><span id="rep-det"><?php echo $client_voice['name'] ?></br>
  <?php echo $client_voice['pos'] ?>,
  <?php echo $client_voice['off'] ?><br><br></span> 
  <?php echo $client_voice['msg'] ?> <br>
  </p>  
  </div>
  <?php
}
?>
<!--
  
  <div class="carousel-cell">
  <img src="../Students/student.png"/><br>
  <p><span id="rep-det">Representatives' Name</br>
  Unknown Office</br>
  Unknown Address<br><br></span> 
  I am extremely satisfied with the service of Gold Stone Consultancy Pvt. Ltd. Very good company with dedicated group of staff member, I hope to do business with you guys in future as well. Thanks For Everything. <br>
   </p>
  </div>
  <div class="carousel-cell">
  <img src="../Students/student.png"/><br>
  <p><span id="rep-det">Representatives' Name</br>
  Unknown Office</br>
  Unknown Address<br><br></span> 
  I am extremely satisfied with the service of Gold Stone Consultancy Pvt. Ltd. Very good company with dedicated group of staff member, I hope to do business with you guys in future as well. Thanks For Everything. <br>
   </p>
  </div>
  -->
</div>
</div> 
</div><!-- Testimonials end here -->
<div id="last_main_content">

<div id="footer">
<?php include '../Includes/footer.php'; ?>
</div>
</div>
    </body>
</html>