<?php 
$connection = mysql_connect("localhost", "root", "");
mysql_select_db("db_gold", $connection);
$id = $_GET['id'];
$qry = mysql_query("delete from tbl_contact where id = '$id'", $connection);
if($qry){
	header ("location: ../IT/admin.php");
}
?>