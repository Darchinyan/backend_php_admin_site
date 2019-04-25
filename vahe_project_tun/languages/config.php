<?php
	$connect=@mysql_connect('localhost','root','')or die('Error Connecting');
	mysql_query("set names utf8");
	$db_connect=@mysql_select_db('vahe_project_tun',$connect);
	if(!$db_connect){
		echo "db connect Error";
	};
?>