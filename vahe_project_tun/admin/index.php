<?php
	session_start();
	session_destroy();
	//session_unset($_SESSION['admin']);
?>
<html>
	<head>
		<link rel="stylesheet" href="../css/admin_style.css">
		<script src="../js/jquery.js"></script>
		<script src="../js/admin_init.js"></script>
	</head>
	<body>
		<div id="bg">
		</div>
		<div id="log_in">
			<h1><span class="color_sp">M</span>ark <span class="color_sp">J</span>ohnsonh</h1>
			<span id="sp1">Admin Login</span>
			<span class="us_span">Username</span> 
			<input type="text" id="user"/><br><br>
			<span class="us_span">Password</span> 
			<input type="password" id="pass"/> <br><br>
			<button type="button" id="login">Login</button>
			<p class="error"></p>
		</div>
	</body>
</html>
	
	