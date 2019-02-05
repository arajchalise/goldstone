<?php 
require 'function.php';
include 'connection.php';
$detail = $_POST['test_detail'];
$id = $_POST['test'];
$table = $_POST['idd'];
$inst = insert2($table, $id, $detail, $connection);
header ("location:../edu/edu-admin.php");
exit;
?>
