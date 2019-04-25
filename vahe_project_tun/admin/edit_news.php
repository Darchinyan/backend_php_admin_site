<?php 

	include "header.php";
	require_once "config.php";
	$id=$_GET['id'];
	echo  $id;
	if(isset($_POST['news_submit'])){
		$arm_title=$_POST['arm_title'];
		$arm_text=$_POST['arm_text'];
		$rus_title=$_POST['rus_title'];
		$rus_text=$_POST['rus_text'];
		$eng_title=$_POST['eng_title'];
		$eng_text=$_POST['eng_text'];
		mysql_query("update news set arm_title='$arm_title',arm_text='$arm_text',rus_title='$rus_title',rus_text='$rus_text',eng_title='$eng_title',eng_text='$eng_text' where id='$id'");
	}
	if(isset($_POST['news_upload'])){
		$array=['png','jpg','jpeg','gif'];
		$explode=explode(".",$_FILES['file']['name']);
		$extension=end($explode);
		if($_FILES['file']['size']<2000000000 && in_array($extension, $array)){
			move_uploaded_file($_FILES['file']['tmp_name'],'../uploads/'.$_FILES['file']['name']);
			$image=$_FILES['file']['name'];
			echo "<div id='upload_div'>Upload is successfully done</div> ";
			mysql_query("update news set image='$image' where id='$id'");
		}else{
			echo "<div id='upload_div_2'>Invalid file</div> ";
		}
	}
	$result=mysql_query("select * from news where id='$id'");
	$row=mysql_fetch_array($result);
?>
	
	<form action="" method="post" enctype="multipart/form-data">
		<div id="news_center">
			
			<div class="news_rel1">
					<div class="news_mini_img">
							<img src="../uploads/<?php echo $row['image']; ?>" class="up_img"/>
							<input type="file" name="file" />
							<input type="submit" name="news_upload" value="Upload "/>
					</div>
					<div class="news_class">
						News1 paragraphe Arm<input type="text" name="arm_title" class="home_inp" value="<?php echo $row['arm_title']; ?>"/><br><br>
						News1 paragraphe Rus<input type="text" name="rus_title" class="home_inp" value="<?php echo $row['rus_title']; ?>" /><br><br>
						News1 paragraphe Eng<input type="text" name="eng_title" class="home_inp" value="<?php echo $row['eng_title']; ?>" /><br><br><br>
						News1 text Arm<textarea type="text" name="arm_text" rows="10" cols="80"><?php echo $row['arm_text']; ?></textarea><br>
						News1 text Rus<textarea type="text" name="rus_text" rows="10" cols="80"><?php echo $row['rus_text']; ?></textarea><br>
						News1 text Eng<textarea type="text" name="eng_text" rows="10" cols="80"><?php echo $row['eng_text']; ?></textarea><br>
						<div id="sub_div"><input type="submit" name="news_submit" value="OK" id="sub" /></div>
					</div>	

			</div>
		</div>
		
	</form>
<?php
	include "footer.php";
?>
