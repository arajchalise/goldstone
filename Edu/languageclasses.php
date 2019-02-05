<? include '../Includes/connection.php';
include '../Includes/link.php';
$language1 = $_GET['language'];
$data1 = mysqli_query($connection, "select * from tbl_language where language='$language1'");
$language = mysqli_fetch_array($data1);
$lng = $language['language'];
$id = $language['id'];
$data = mysqli_query($connection, "select * from tbl_languaged where tid='$id'");
$datat = mysqli_query($connection, "select * from tbl_languaged where tid='$id'");
?>
<!DOCTYPE html>
<html>
<head>
<title><? echo $lng ?> Language Classes</title>
 <style type="text/css">
        	#language-classes #header{
        		background: #00415a;
        	}


        </style>
</head>
<body>
<div id="language-classes">
<?php include '../Includes/edu_header.php'; ?>
<div style="height: 150px; width: 100%;"></div>
<div class="language-classes">
<h1><? echo $lng ?> Language Classes</h1>
<div id="par" style="width: 59%; margin-right: 1%;">
<?
while($res = mysqli_fetch_array($data)){
	?>
		<h3><? echo $res['topic'] ?></h3>
	</p><? echo $res['detail']?></p><br>
	
<? } ?>
</div>
</div>
</div>


<!--<div id="id_img"><img src="../Upload/<? echo $country['img'] ?>" /></div> -->

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