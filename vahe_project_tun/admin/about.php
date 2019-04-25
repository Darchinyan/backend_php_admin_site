<?php
	include "header.php";
	require_once "config.php";
	if(isset($_POST['about_submit'])){
		$about_title_arm=$_POST['about_title_arm'];
		$about_title_rus=$_POST['about_title_rus'];
		$about_title_eng=$_POST['about_title_eng'];
		$mini_title_arm=$_POST['mini_title_arm'];
		$mini_title_rus=$_POST['mini_title_rus'];
		$mini_title_eng=$_POST['mini_title_eng'];
		$about_text1_arm=$_POST['about_text1_arm'];
		$about_text1_rus=$_POST['about_text1_rus'];
		$about_text1_eng=$_POST['about_text1_eng'];
		$about_text2_arm=$_POST['about_text2_arm'];
		$about_text2_rus=$_POST['about_text2_rus'];
		$about_text2_eng=$_POST['about_text2_eng'];
		$image=$_FILES['file']['name'];
		mysql_query("update about set about_title_arm='$about_title_arm',about_title_rus='$about_title_rus',about_title_eng='$about_title_eng',mini_title_arm='$mini_title_arm',mini_title_rus='$mini_title_rus',mini_title_eng='$mini_title_eng',about_text1_arm='$about_text1_arm',about_text1_rus='$about_text1_rus',about_text1_eng='$about_text1_eng', about_text2_arm='$about_text2_arm', about_text2_rus='$about_text2_rus',about_text2_eng='$about_text2_eng',about_image='$image'");
		$array=['png','jpg','jpeg','gif'];
		$explode=explode('.',$_FILES['file']['name']);
		$extension=end($explode);
		if($_FILES['file']['name']<2000000000 && in_array($extension,$array)){
			move_uploaded_file($_FILES['file']['tmp_name'], '../uploads/'.$_FILES['file']['name']);
			echo "<div id='upload_div'>Upload is successfully done</div> ";
		}else{
			echo "<div id='upload_div_2'>Invalid file</div> ";
		}
	}
	$result=mysql_query("select * from about");
	$row=mysql_fetch_array($result);
	
	
 ?>
	<form action="" method="post" enctype="multipart/form-data">
		<div id="about_center">
			About title Arm<input type="text" name="about_title_arm" class="home_inp" value="<?php echo $row['about_title_arm']; ?>" />
			About title Rus<input type="text" name="about_title_rus" class="home_inp" value="<?php echo $row['about_title_rus']; ?>" />
			About title Eng<input type="text" name="about_title_eng" class="home_inp" value="<?php echo $row['about_title_eng']; ?>" />
			<div id="img_div_rel">
				<div id="img_div_abs">
					<img src="../uploads/<?php echo $row['about_image']; ?>" />
					<input type="file" name="file" />
				</div>
			</div>
			<div id="text_div_rel">
				<div id="text_div_abs">
					About mini title Arm<input type="text" name="mini_title_arm" class="home_inp" value="<?php echo $row['mini_title_arm']; ?>" /><br><br>
					About mini title Rus<input type="text" name="mini_title_rus" class="home_inp" value="<?php echo $row['mini_title_rus']; ?>" /><br><br>
					About mini title Eng<input type="text" name="mini_title_eng" class="home_inp" value="<?php echo $row['mini_title_eng']; ?>" /><br><br><br>
					About text 1 Arm<textarea type="text" name="about_text1_arm" rows="5" cols="80"><?php echo $row['about_text1_arm']; ?> </textarea><br><br>
					About text 1 Rus<textarea type="text" name="about_text1_rus" rows="5" cols="80"><?php echo $row['about_text1_rus']; ?> </textarea><br><br>
					About text 1 Eng<textarea type="text" name="about_text1_eng" rows="5" cols="80"><?php echo $row['about_text1_eng']; ?> </textarea><br><br><br>
					About text 2 Arm<textarea type="text" name="about_text2_arm" rows="5" cols="80"><?php echo $row['about_text2_arm']; ?> </textarea><br><br>
					About text 2 Rus<textarea type="text" name="about_text2_rus" rows="5" cols="80"><?php echo $row['about_text2_rus']; ?> </textarea><br><br>
					About text 2 Eng<textarea type="text" name="about_text2_eng" rows="5" cols="80"><?php echo $row['about_text2_eng']; ?> </textarea><br><br><br>
				</div>
				
			</div>
		</div>
		<input type="submit" name="about_submit" value="OK" id="sub" /> 
	</form>