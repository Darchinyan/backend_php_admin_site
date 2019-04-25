<?php 

	include "header.php";
	require_once "config.php";
	if(isset($_POST['gallery_sub'])){
		$array=['png','jpg','jpeg','gif'];
		for($i = 0; $i < count($_FILES['file']['name']); $i++){
			$explode=explode('.',$_FILES['file']['name'][$i]);
			$extention=end($explode);
			if($_FILES['file']['size'][$i]<2000000000 && in_array($extention,$array)){
					move_uploaded_file($_FILES['file']['tmp_name'][$i], '../uploads/'.$_FILES['file']['name'][$i]);
					$image_uploaded_name=$_FILES['file']['name'][$i];
					mysql_query("insert into gallery(image) values('$image_uploaded_name')");
					echo "<div id='upload_div'>Upload is successfully done</div> ";
					
			}else{
				echo "<div id='upload_div_2'>Invalid file</div> ";
				}
		}
			
	}
?>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="gal_center">
			<div  class="gal_left">
				<img src="../images/img04.jpg" />
				<input type="file" name="file[]" multiple />
				<input type="submit" name="gallery_sub" value="Upload">
			</div>
			<div class="gal_right">
				<div style="text-align:center;">
					<input type="button" value="Delete" class="delete" name="gallery"></button><br>
					Check all<br> <input type="checkbox" class="check_all">
				</div>
				<?php
					$result=mysql_query("select * from gallery ORDER BY id DESC");
					while($row=mysql_fetch_array($result)){
						echo"
							<div class='gallery_img_div table_class_".$row['id']."'>
								<div>
									<img src='../uploads/".$row['image']."'class='gallery_mini_img' />
									<img src='../images/delete.png' class='delet_class table_img' name=".$row['id']." value='gallery' />
									<input type='checkbox' class='checkbox' value='gallery' name='".$row['id']."'/>
								</div>
							</div>
						";
					};
				?>
			</div>
		</div>
	</form>
	<?php
		include "footer.php";
	?>





