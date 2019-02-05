<style type="text/css">
	form textarea{
		height: 200px;
		width: 500px;
	}

</style>



<? $id = $_GET['id'];

include 'connection.php';
if($id==1){
	?>
<form method="post" action="cms_insert_done.php">
<input type="text" name="id" value="<? echo $id ?>" hidden />
<table>
<tr><td>Choose Topic:</td><td>
<select name="topic">
<option value="2" >News and Updates</option>
</select>
</td></tr>
<tr><td>Title</td><td><input type="text" name="title" /></td></tr>
<tr><td>Detail</td><td><textarea name="data"></textarea></td></tr>
<tr><td colspan="2"><input type="submit" value="Submit" name="text" /></td></tr>
</table>
</form>
<form method="post" action="cms_insert_done.php" enctype="multipart/form-data">
<input type="text" name="id" value="<? echo $id ?>" hidden />
<table>
<tr><td>Topic:</td><td>
<input type="text" value="4" name="title" hidden />
<input type="text" value="We are Associated With" readonly />
</td></tr>
<tr><td>URL</td><td><input type="text" name="url" /></td></tr>
<tr><td>Image/Logo</td><td><input type="file" name="pic" /></td></tr>
<tr><td colspan="2"><input type="submit" value="Submit" name="img" /></td></tr>
</table>
</form>
	<?
}
else if($id==2){

	
}
else if($id==3){
	?>
	<form method="post" action="cms_insert_done.php">
	<input type="text" name="id" value="<? echo $id ?>" hidden />
<table>
<tr><td>Choose Test: </td><td>
<select name="test">
<? $test = mysqli_query($connection, "select * from tbl_test");
while($testname = mysqli_fetch_array($test)){
	?>
	<option value="<? echo $testname['id'] ?>"><? echo $testname['test'] ?></option>
	<?
}?>
</select>
</td></tr>
<tr><td>Detail</td><td><textarea name="data"></textarea></td></tr>
<tr><td colspan="2"><input type="submit" value="Submit" name="text" /></td></tr>
</table>
</form>
<?	
}
else if($id==4){
	?>
	<form method="post" action="cms_insert_done.php">
	<input type="text" name="id" value="<? echo $id ?>" hidden />
<table>
<tr><td>Choose Country: </td><td>
<select name="country">
<? $country = mysqli_query($connection, "select * from tbl_country");
while($countryname = mysqli_fetch_array($country)){
	?>
	<option value="<? echo $countryname['id'] ?>"><? echo $countryname['country'] ?></option>
	<?
}?>
</select>
</td></tr>
<tr><td>Topic:</td><td><textarea name="topic"></textarea></td></tr>
<tr><td>Detail:</td><td><textarea name="data"></textarea></td></tr>
<tr><td colspan="2"><input type="submit" value="Submit" name="text" /></td></tr>
</table>
</form>
<?	
}
else if($id==5){
	?>
	<form method="post" action="cms_insert_done.php" enctype="multipart/form-data">
	<input type="text" name="id" value="<? echo $id ?>" hidden />
<table>
<tr><td>Choose Country: </td><td>
<select name="country">
<? $country = mysqli_query($connection, "select * from tbl_country");
while($countryname = mysqli_fetch_array($country)){
	?>
	<option value="<? echo $countryname['id'] ?>"><? echo $countryname['country'] ?></option>
	<?
}?>
</select>
</td></tr>
<tr><td>School:</td><td><input type="text" name="school"/></td></tr>
<tr><td>Add:</td><td><input type="text" name="add"/></td></tr>
<tr><td>Tel:</td><td><input type="text" name="tel"/></td></tr>
<tr><td>Url:</td><td><input type="text" name="url"/></td></tr>
<tr><td>Img:</td><td><input type="file" name="pic"/></td></tr>
<tr><td colspan="2"><input type="submit" value="Submit" name="text" /></td></tr>
</table>
</form>
	<?
}