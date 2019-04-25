<?php 
	include "header.php";
	require_once "config.php";
?>
	<div id="news_center">
		<h1>LATEST EVENTS</h1>
		<?php 
			$result=mysql_query("select * from events ORDER BY id DESC");
			
			while($row = mysql_fetch_array($result)){?>
				<div class="news_rel">
					<div class="news_abs">
						<div class="news_mini_img">
							<img src="uploads/<?php echo $row['image']; ?>" class="news_img"/>
						</div>
						<div class="news_mini">
							<h3><?php echo $row['eng_title']; ?></h3>
							<p><?php echo $row['eng_text']; ?></p>
						</div>
					</div>
				</div>		
		<?php } ?>
	</div>
	<div id="nesw_img">
			<img src="images/events.jpg" />
	</div>
	
<?php 
	include "footer.php";
?>