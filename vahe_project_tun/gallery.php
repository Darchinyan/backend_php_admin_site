<?php 
	include "header.php";
	require_once "config.php";
?>

	<div class="gallery_section">
		<h1>GALLERY</h1>
		<?php
			$result=mysql_query("select * from gallery ORDER BY id DESC");
			while($row=mysql_fetch_array($result)){?>
				<div class="gallery_mini">
					<div class="gallery_mini_img1">
						<img src="uploads/<?php echo $row['image']; ?>" class="gallery_img">
					</div>
				</div>
		<?php
			}
		?>
			
	</div>
	
<?php 
	include "footer.php";
?>