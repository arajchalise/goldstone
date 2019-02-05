<!DOCTYPE html>
<html>
<head>
<title>Services</title>
<?php include '../Includes/link.php'; ?>
  <script>
 /* $( function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  } ); */
    $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
  <!--<style>
  .ui-tabs-vertical { width: 55em; }
  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
  .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; }
  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
  </style> -->
  <style type="text/css">
          #services_main_content #header{
            background: #00415a;
          }


        </style>
</head>
<div id="services_main_content">
<?php include '../Includes/header.php'; 
include '../Includes/connection.php';
?>
<div style="width: 100%; height: 100px;"></div>
<div class="services">
<div class="serv">
<br>
<br>
<br>
<br>
<h1>What We Do?</h1>
<hr width="100%" size="5px" style="border-radius: 5px;"/>
  <div id="feature-service" style="width: 100%; margin-top: 20px;">
  <?php 

$acc = mysqli_query($connection, "select * from tbl_service");
while ($accdata = mysqli_fetch_array($acc)) {
  ?>
  <div style="width: 32%; margin-left: 10px; height: 400px; background: #00415a; float: left; margin-bottom: 20px; border-radius: 10px;">
  <p style="text-align: center; padding: 5px; margin-top: 10px; color: #93d1ff; font-size: 22px;"><?php echo $accdata['topic'] ?></p>
  <hr size="3px;" width="90%" style="margin-right: auto; margin-left: auto; border-radius: 2px; background: #fff;">
  <p style="font-size: 16px; color: #93d1ff; padding: 5px; width: 90%; margin-right: auto; margin-left: auto; text-align: center; padding-top: 0px;"><?php echo $accdata['detail'] ?></p>
<!--<center><li><a href="readmore.php?t=<?php echo $accdata['id'] ?> && type=<?php echo $accdata['topic'] ?>">Know More</a></li></center> -->
  </div>
    <?php } ?>
  </div>


</div>



<!--<p>We are focused on the following sectors.</p>
<div class="it_accordion">
<?php 

$acc = mysqli_query("select * from tbl_service");
while ($accdata = mysqli_fetch_array($acc)) {
  ?>
  <h4><?php echo $accdata['topic'] ?></h4>
  <p><?php echo $accdata['detail'] ?></p>
  <?php
}
?>
<!--
                <h4>Web Design & Development</h4>
                <p>Most popular tweak of all time that every jailbreak fans are aware of. Not to worry if you are not
Aware of it as name suggests you can do almost anything with this tweak on your device.
Why not try out yourself.
</p>
                <h4>Web Hosting </h4>
                <p>Ever bored with ios stock font then not to worry byta font is here to change that.
With byta font you can change you device stock ios font to any fonts you want
Given there are hundreds of font to choose from cydia.

                </p>
                <h4>Software Development</h4>
                <p>Want to add more toggles to your control center? Well I think it is way too much hassle for me to
Go to settings and then turn on cellular data. Well flip control center is here to save your time.
You can add more toggles to control center get your job done right of the bat.
</p>
                <h4>ICT Training</h4>
                <p>Do you like Microsoft cursor on word isn’t it smooth. That’s right you can get that cursor on your device with smooth cursor
				</p>
                <h4>Maintenance</h4>
                <p>Like activator one of the most popular jailbreak tweak which essentially changes the color temperature of your screen to a warmer tone in order to get rid of that nasty blue hue that screens emit, which can cause eye strain and mess up your natural sleep schedule.
You can say that nightshift was the idea taken by apple on its major ios 10.
</p>
                <h4>Domain Registration </h4>
                <p>This tweak gives older iPhones taste of 3D touch capability. Well there are other tweaks
But this one’s rather stable and has more options available.
</p> -->
</div>
</div>
</div>

</div>
<div id="last_main_content">
<div id="footer">
<?php include '../Includes/footer.php'; ?>
</div>
</div>
</html>
