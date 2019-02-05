<?php
include '../Includes/connection.php';
include '../Includes/link.php';

$data = mysqli_query($connection, "select * from tbl_faq where tid=1");

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Frequently Asked Question</title>
 	 <style type="text/css">
        	#faq #header{
        		background: #00415a;
        	}


        </style>
 </head>
 <body>
 <div id="faq">
<?php include '../Includes/edu_header.php'; ?>
<div style="height: 150px; width: 100%;"></div>
<div class="faq">
<h1 style="color: #00415a;">Frequently Asked Question</h1>
<hr width="100%" size="5px" style="border-radius: 5px; margin-top: -10px; margin-bottom: 20px;"/>
<?php
while($res = mysqli_fetch_array($data)){
	?>
		<h4><?php echo $res['question']; ?></h4>
	<p><?php echo $res['answer']; ?></p>
	
<? } ?>
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