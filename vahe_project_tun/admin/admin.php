<?php
	include "header.php";
	require_once "config.php";
	if(isset($_POST['home_submit'])){
		$home_title_arm=$_POST['home_title_arm'];
		$home_title_rus=$_POST['home_title_rus'];
		$home_title_eng=$_POST['home_title_eng'];
		$home_text_arm=$_POST['home_text_arm'];
		$home_text_rus=$_POST['home_text_rus'];
		$home_text_eng=$_POST['home_text_eng'];
		$image=$_FILES['file']['name'];
		mysql_query("update home set home_title_arm='$home_title_arm',home_title_rus='$home_title_rus',home_title_eng='$home_title_eng',home_text_arm='$home_text_arm',home_text_rus='$home_text_rus',home_text_eng='$home_text_eng',home_image='$image'");
		$array=['png','jpg','jpeg','gif'];
		$explode=explode('.',$_FILES['file']['name']);
		$extension=end($explode);
		if($_FILES['file']['size']<2000000000 && in_array($extension, $array)){
			move_uploaded_file($_FILES['file']['tmp_name'], '../uploads/'.$_FILES['file']['name']);
			echo "<div id='upload_div'>Upload is successfully done</div> ";
		}else{
			echo "<div id='upload_div_2'>Invalid file</div> ";
		}
	}
	$result=mysql_query("select * from home");
	$row=mysql_fetch_array($result);
	
?>	
	<div id="white_div">
		<div id="white_div_center">
			<form action="" method="post" enctype="multipart/form-data">
				Home title Arm:<input type="text" name="home_title_arm" value="<?php echo $row['home_title_arm']; ?>" class="home_inp"/><br>
				Home title Rus:<input type="text" name="home_title_rus" value="<?php echo $row['home_title_rus']; ?>" class="home_inp"/><br>
				Home title Eng:<input type="text" name="home_title_eng" value="<?php echo $row['home_title_eng']; ?>" class="home_inp"/><br><br><br>
				<div id="for_img">
					<img src="../uploads/<?php echo $row['home_image']; ?>" />
					<input type="file" name="file" /><br><br><br>
				</div>
				<div id="rel_text">
					<div>
						<span class="rel_text_span">Home text Arm:</span><span class="rel_text_span">Home text Rus:</span><span class="rel_text_span">Home text Eng:</span>
					</div>
					<textarea type="text" name="home_text_arm" rows="20" cols="50"><?php echo $row['home_text_arm']; ?> </textarea>
					<textarea type="text" name="home_text_rus" rows="20" cols="50"><?php echo $row['home_text_rus']; ?> </textarea>
					<textarea type="text" name="home_text_eng" rows="20" cols="50"><?php echo $row['home_text_eng']; ?> </textarea>
				</div>
				<input type="submit" name="home_submit" value="OK" id="sub"/> 
			</form>
		</div>
	</div>
<?php
	include "footer.php";
?>