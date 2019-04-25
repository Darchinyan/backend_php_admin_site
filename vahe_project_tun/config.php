<?php
	$connect=@mysql_connect('localhost','root','')or die('Error Connecting');
	$db_connect=@mysql_select_db('vahe_project_tun',$connect);
	if(!$db_connect){
		echo "db connect Error";
	};
?>