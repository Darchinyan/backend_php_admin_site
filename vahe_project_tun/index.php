<?php 
	include "header.php";
	require_once "config.php";
	$result=mysql_query("select * from home");
	$row=mysql_fetch_array($result);
?>
	
	<div id="slide_div">
		<div class="slide_class">
			<img src="images/slider01.jpg" />
			<div id="slide_text">
				<div id="slide_text_rel">
					<span id="slide_text_span">artistic eye</span>
				</div>
			</div>
		</div>
	</div>
	<div id="white_div">
		<div id="white_div_center">
			<h1><?php echo $row['home_title_eng']; ?></h1>
			<div id="for_img">
				<img src="uploads/<?php echo $row['home_image']; ?>" />
			</div>
			<div id="rel_text">
				<div id="text_abs">
					<p><?php echo $row['home_text_eng']; ?></p>
				</div>
			</div>
		</div>
	</div>
	
<?php 
	include "footer.php";
?>