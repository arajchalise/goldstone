<style type="text/css">

</style>



<? include 'connection.php' ?>
<div id="header">
<div class="first_header">
<div class="comp_name">
<a href="../"><img src="../Images/logo.png" name="logo" id="logo" alt="GS" /></a>
</div>
<div id="connect">
<a href="http://facebook.com/goldstoneconsultancy" onMouseOver="document.fbh.src='../Icon/facebook.png'" onMouseOut="document.fbh.src='../Icon/facebook-stable.png'" target="_blank"><img src="../Icon/facebook-stable.png" name="fbh"/></a>
<a href="http://twitter.com/" onMouseOver="document.twth.src='../Icon/twt-hover.png'" onMouseOut="document.twth.src='../Icon/twt-stable.png'" target="_blank"><img src="../Icon/twt-stable.png" name="twth"/></a>
<a href="http://instagram.com/" onMouseOver="document.instah.src='../Icon/insta-hover.png'" onMouseOut="document.instah.src='../Icon/insta-stable.png'" target="_blank"><img src="../Icon/insta-stable.png" name="instah"/></a>
</div>
<nav id="edu-nav">
<ul>

<li><a href="index.php">Home</a></li>
<li id="abt"><a href="#">About Us</a>
<div id="a-drop">
<ul>
<?php $about_detail = mysqli_query($connection, "select topic from tbl_about where tid=1 order by id desc");
while($about_topic = mysqli_fetch_array($about_detail)){
	?>
<li><a href="about.php?title=<?php echo $about_topic['topic'] ?>"><?php echo $about_topic['topic'] ?></a></li>


<?php } ?>

</ul>
</div>
</li>

<li id="service"><a href="#">Services</a>
<div id="serv-drop">
<ul>
<li id="test"><a href="#">Tests Preparation</a>
<div id="drop">
<ul>
<? $res = mysqli_query($connection, "select * from tbl_test");
while($test = mysqli_fetch_array($res))
{?>
<li><a href="testprep.php?test_preparation=<?echo $test['test']?>"><? echo $test['test']?></a></li>
<? } ?>
</ul>
</div>
</li>
<li id="language"><a href="#">Language Classes</a>
<div id="l-drop">
	<ul>
		<? $cres = mysqli_query($connection, "select * from tbl_language");
while($ctest = mysqli_fetch_array($cres))
{?>
<li><a href="languageclasses.php?language=<?echo $ctest['language']?>"><? echo $ctest['language']?></a></li>
<? } ?>
	</ul>
</div>
</li>
<li id="country"><a href="#">Study Abroad</a>
<div id="c-drop">
<ul>
<? $cres = mysqli_query($connection, "select * from tbl_country");
while($ctest = mysqli_fetch_array($cres))
{?>
<li><a href="studyabroad.php?studyabroad=<?echo $ctest['country']?>"><? echo $ctest['country']?></a></li>
<? } ?>
</ul>
</div>
</li>
</ul>
</div>
</li>
<li><a href="contact.php">Contact Us</a></li>
<li><a href="faq.php">FAQs</a></li>
</ul>

</nav>
</div>
</div>
<div class="header">
<div class="first_header">
<div class="comp_name">
<a href="../"><img src="../Images/logo.png" name="logo" id="fixed-logo" /></a>
</div>
<div id="connect">
<a href="http://facebook.com/goldstoneconsultancy" onMouseOver="document.fb.src='../Icon/facebook.png'" onMouseOut="document.fb.src='../Icon/facebook-stable.png'" target="_blank"><img src="../Icon/facebook-stable.png" name="fb"/></a>
<a href="http://twitter.com/" onMouseOver="document.twt.src='../Icon/twt-hover.png'" onMouseOut="document.twt.src='../Icon/twt-stable.png'" target="_blank"><img src="../Icon/twt-stable.png" name="twt"/></a>
<a href="http://instagram.com/" onMouseOver="document.insta.src='../Icon/insta-hover.png'" onMouseOut="document.insta.src='../Icon/insta-stable.png'" target="_blank"><img src="../Icon/insta-stable.png" name="insta"/></a>
</div>
<nav id="edu-nav">
<ul>
<li><a href="index.php">Home</a></li>
<li id="abt"><a href="#">About Us</a>
<div id="a-drop">
<ul>
<?php $about_detail = mysqli_query($connection, "select topic from tbl_about where tid=1 order by id desc");
while($about_topic = mysqli_fetch_array($about_detail)){
	?>
<li><a href="about.php?title=<?php echo $about_topic['topic'] ?>"><?php echo $about_topic['topic'] ?></a></li>


<?php } ?>

</ul>
</div>
</li>

<li id="service"><a href="#">Services</a>
<div id="serv-drop">
<ul>
<li id="test"><a href="#">Tests Preparation</a>
<div id="drop">
<ul>
<? $res = mysqli_query($connection, "select * from tbl_test");
while($test = mysqli_fetch_array($res))
{?>
<li><a href="testprep.php?test_preparation=<?echo $test['test']?>"><? echo $test['test']?></a></li>
<? } ?>
</ul>
</div>
</li>
<li id="language"><a href="#">Language Classes</a>
<div id="l-drop">
	<ul>
		<? $cres = mysqli_query($connection, "select * from tbl_language");
while($ctest = mysqli_fetch_array($cres))
{?>
<li><a href="languageclasses.php?language=<?echo $ctest['language']?>"><? echo $ctest['language']?></a></li>
<? } ?>
	</ul>
</div>
</li>
<li id="country"><a href="#">Study Abroad</a>
<div id="c-drop">
<ul>
<? $cres = mysqli_query($connection, "select * from tbl_country");
while($ctest = mysqli_fetch_array($cres))
{?>
<li><a href="studyabroad.php?studyabroad=<?echo $ctest['country']?>"><? echo $ctest['country']?></a></li>
<? } ?>
</ul>
</div>
</li>
</ul>
</div>
</li>
<li><a href="contact.php">Contact Us</a></li>
<li><a href="faq.php">FAQs</a></li>
</ul>

</nav>
</div>
</div>
