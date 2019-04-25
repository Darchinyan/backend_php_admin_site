<?php
	include "header.php";
	require_once "config.php";
	$result=mysql_query("select * from about");
	$row=mysql_fetch_array($result);
 ?>
	<div id="about_center">
		<h1><?php echo $row['about_title_eng']; ?></h1>
		<div id="img_div_rel">
			<div id="img_div_abs">
				<img src="uploads/<?php echo $row['about_image']; ?>" />
			</div>
		</div>
		<div id="text_div_rel">
			<div id="text_div_abs">
				<p id="about_title"><?php echo $row['mini_title_eng']; ?></p><br><br>
				<p class="about_text"><?php echo $row['about_text1_eng']; ?></p>
				<p class="about_text"><?php echo $row['about_text2_eng']; ?></p>
				</div>
		</div>
	</div>
	<div id="about_image">
		<img src="images/slider03.jpg" />
	</div>
<?php 
	include "footer.php";
?>