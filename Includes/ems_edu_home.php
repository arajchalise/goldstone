<?php 
include 'connection.php'; 
require 'function.php';
$title = $_POST['title'];
$message = $_POST['message'];
insert($title, $message, $connection);

?>