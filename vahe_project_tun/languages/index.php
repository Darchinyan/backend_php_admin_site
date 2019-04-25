<?php
	session_start();
	//include "header.php";
	require_once "config.php";
	$menu_a = ['home', 'about','news', 'events', 'gallery'];
	if(!isset($_SESSION['lang']) || $_SESSION['lang'] == 'arm'){
		$lang = 'arm';
		$menu = ['Գլխավոր', 'Մեր մասին','Նորություններ', 'Իրադարձությւոններ', 'Նկարներ'];
		//$text
	}
	else if($_SESSION['lang'] == 'eng'){
		$lang = 'eng';
		$menu = ['Home', 'About','News', 'Events', 'Gallery'];
		//$text
	}
	$select = mysql_query("select * from events");
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<a href="lang.php?lang=arm">Հայ</a>
		<a href="lang.php?lang=eng">Eng</a>
		<ul>
			<?php 
				for($i = 0; $i<count($menu); $i++){
					echo "
						<li><a href='".$menu_a[$i].".php'>".$menu[$i]."</a></li>
					";
				}
			?>
		</ul>
		<div id="news_center">
		<h1>LATEST EVENTS</h1>
		<?php 
			$result=mysql_query("select * from events ORDER BY id DESC");
			
			while($row = mysql_fetch_array($result)){?>
				<div class="news_rel">
					<div class="news_abs">
						<div class="news_mini">
							<h3><?php echo $row[$lang.'_title']; ?></h3>
							<p><?php echo $row[$lang.'_text']; ?></p>
						</div>
					</div>
				</div>		
		<?php } ?>
	</div>
		
	</body>
</html>