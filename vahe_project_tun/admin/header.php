<?php 
	session_start();
	if(!isset($_SESSION['admin'])){
		header('Location:http://localhost/vahe_project_tun/admin');
	};
	echo $_SESSION['admin'];
?>
<html>
	<head>
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/admin_style.css" />
		<script src="../js/jquery.js"></script>
		<script src="../js/init.js"></script>
		<script src="../js/admin_init.js"></script>
	</head>
	<body>
		<header>
			<section id="menu_content">
				<div id="menu_content_center">
					<div id="logo">
						<a href="http://localhost/vahe_project_tun/admin/admin.php">
							<span class="log_span"><img src="../images/logo.png"></span>
							<span class="log_span log_text"><span class="log_color">M</span>ark<span class="log_color">  J</span>ohnsonh</span>
						</a>
					</div>
					<div id="menu">
						<ul>
							<li class="menu_li" style="margin-left:0px !important;">
								<a href="http://localhost/vahe_project_tun/admin/admin.php" class="log_color">Home</a>
							</li>
							<li class="menu_li">
								<a href="http://localhost/vahe_project_tun/admin/about.php">About</a>
							</li>
							<li class="menu_li">
								<a href="http://localhost/vahe_project_tun/admin/news.php">News</a>
							</li>
							<li class="menu_li">
								<a href="http://localhost/vahe_project_tun/admin/events.php">Events</a>
							</li>
							<li class="menu_li" style="margin-right:60px !important;">
								<a href="http://localhost/vahe_project_tun/admin/gallery.php">Gallery</a>
							</li>
							<li class="menu_li" style="margin-right:60px !important;">
								<a href="http://localhost/vahe_project_tun/admin">Log Out</a>
							</li>
						</ul>
					</div>
				</div>
			</section>
		</header>
		<section class="bg_black">
			<div class="del_info">
				<p>Are you sure?</p>
				<span class="yes_or_no">Yes</span>
				<span class="yes_or_no">No</span>
			</div>
		</section>
		