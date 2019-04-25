<?php 
	include "header.php";
	require_once "config.php";
	if(isset($_POST['news_submit'])){
		
		$arm_title=$_POST['arm_title'];
		$arm_text=$_POST['arm_text'];
		$rus_title=$_POST['rus_title'];
		$rus_text=$_POST['rus_text'];
		$eng_title=$_POST['eng_title'];
		$eng_text=$_POST['eng_text'];
		$image="";
		if(!empty ($_FILES['file']['name'])){
			$array=['png','jpg','jpeg','gif'];
			$explode=explode('.',$_FILES['file']['name']);
			$extension=end($explode);
			
			if($_FILES['file']['size']<2000000000 && in_array($extension,$array)){
				move_uploaded_file($_FILES['file']['tmp_name'], '../uploads/'.$_FILES['file']['name']);
				$image=$_FILES['file']['name'];
				echo "<div id='upload_div'>Upload is successfully done</div> ";
				mysql_query("insert into news (arm_title,arm_text,rus_title,rus_text,eng_title,eng_text,image) values ('$arm_title','$arm_text','$rus_title','$rus_text','$eng_title','$eng_text','$image')");
				echo "<div id='upload_div'>Your News are Insertad</div> ";
			}else{
				echo "<div id='upload_div_2'>Invalid file</div> ";
			}
		}else{
			mysql_query("insert into news (arm_title,arm_text,rus_title,rus_text,eng_title,eng_text,image) values ('$arm_title','$arm_text','$rus_title','$rus_text','$eng_title','$eng_text','$image')");
			echo "<div id='upload_div'>Your News are Insertad</div> ";
		}
		
	}
	$result=mysql_query("select * from news ORDER BY id DESC");
	$row=mysql_fetch_array($result);

	
	
	
?>
	<form action="" method="post" enctype="multipart/form-data">
		<div id="news_center">
			
			<div class="news_rel">
				
					<div class="news_mini">
						<div class="news_mini_img">
							<img src="../images/img04.jpg" />
							<input type="file" name="file" />
						</div>
						News1 paragraphe Arm<input type="text" name="arm_title" class="home_inp" value=""/><br><br>
						News1 paragraphe Rus<input type="text" name="rus_title" class="home_inp" value="" /><br><br>
						News1 paragraphe Eng<input type="text" name="eng_title" class="home_inp" value="" /><br><br><br>
						News1 text Arm<textarea type="text" name="arm_text" rows="7"> </textarea>
						News1 text Rus<textarea type="text" name="rus_text" rows="7"> </textarea>
						News1 text Eng<textarea type="text" name="eng_text" rows="7"> </textarea>
					</div>
				
			</div>
		</div>
		<div id="sub_div"><input type="submit" name="news_submit" value="OK" id="sub" /></div>
	</form>
	
	<table class='news'>
		<tr>
			<th>N</th>
			<th>Image</th>
			<th>Arm Title</th>
			<th>Arm Text</th>
			<th>Rus Title</th>
			<th>Rus Text</th>
			<th>Eng Title</th>
			<th>Eng Text</th>
			<th>Edit</th>
			<th>Delet</th>
			<th>Check All<br>
				<input type="button" value="Delete" class="delete" name="news"></button><br><input type="checkbox" class="check_all">
			</th>
			
		</tr>
		<?php 
			$result=mysql_query("select * from news");
			while($row=mysql_fetch_array($result)){
			echo "
				<tr class='table_class_".$row['id']."'>
					<td>".$row['id']."</td>
					<td> <img src='../uploads/".$row['image']."' class='img_tb' /></td>
					<td>".$row['arm_title']."</td>
					<td>".$row['arm_text']."</td>
					<td>".$row['rus_title']."</td>
					<td>".$row['rus_text']."</td>
					<td>".$row['eng_title']."</td>
					<td>".$row['eng_text']."</td>
					<td> <a href='edit_news.php?id=".$row['id']."'> <img src='../images/edit.png' class='table_img' /></a></td>
					<td> <img src='../images/delete.png' class='table_img delet_class' name='".$row['id']."' value='news' /></td>
					<td><input type='checkbox' class='checkbox' value='news' name='".$row['id']."'/></td>
				</tr>";
			};
		?>
	</table>
	
<?php
	include "footer.php";

?>
	