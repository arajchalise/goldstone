<?php 

function insert($var1, $var2, $var3){
mysqli_query($var3, "insert into tbl_$var1(data) values('$var2')");
}
function insert1($var1, $var2, $var3, $var4){
mysqli_query($var4, "insert into tbl_$var1(tid, data) values('$var2', '$var3')");
}
function insert2($var1, $var2, $var3, $var4){
	mysqli_query($var4, "insert into tbl_$var1(tid, detail) values('$var2', '$var3')");
}
function insert3($var1, $var2, $var3, $var4){
	mysqli_query($var3, "insert into tbl_clients (name, image) values('$var1', '$var2')");
	
}
function select_voice($offset, $limit, $conn){
	mysqli_query($conn, "select * from tbl_clients_voice limit '$offset', '$limit'");
}
function update($var1, $var2, $var3, $var4, $var5, $var6, $var7, $var8){
	mysqli_query($var7, "update tbl_college set cid='$var1', school='$var2', add='$var3', tel='$var4', url='$var5', img='$var6' where id='$var8'");
}

function execute($var1, $connection){
	mysqli_query($connection, $var1);
}

function fetch($var1){
	mysqli_fetch_array($var1);
}

function check($var1, $var2, $var3){
	$curryear = date(y);
$gap = $curryear-$var3;
	
}

?>