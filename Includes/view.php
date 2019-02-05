<?php 
$connection = mysqli_connect("localhost", "root", "");
mysqli_select_db($connection, "db_gold");
$id = $_GET['id'];
$res = mysqli_query($connection, "select * from tbl_contact where id= '$id'");	
$data = mysqli_fetch_array($res); 
?>
<h1><?php echo $data['topic']; ?></h1>
<p>From: <?php echo $data['name']; ?><br>
Email: <?php echo $data['email']; ?><br>
Contact: <?php echo $data['contact']; ?>
</p>
<p>Message: <?php echo $data['mess']; ?></p>

<br>
<a href="reply.php?id=<?php echo $data['id']; ?>">Reply</a>