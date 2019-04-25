<?php
	session_start();
	require_once "config.php";
	if(isset($_POST['username'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$result=mysql_query("select * from admin where username='$username' and password='$password'");
		$row=mysql_num_rows($result);
		if($row==1){
			$_SESSION['admin'] = 'Vahe';
			echo "1";
		}else{
			echo "0";
		}
	}else{
		header('Location:http://localhost/vahe_project_tun/admin/index.php');
	}
?>
