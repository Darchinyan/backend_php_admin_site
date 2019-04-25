<?php
	require_once "config.php";
	
	if(isset($_POST['ajax_table_name'])){
		$id_array = $_POST['ajax_id_array'];
		$id_string = implode(",",$id_array);
		$table_name = $_POST['ajax_table_name'];
		$select = mysql_query("select * from $table_name where id in ($id_string)");
		while($select_array = mysql_fetch_array($select)){
			if(!empty($select_array['image'])){
				unlink('../uploads/'.$select_array['image']);
			}
		}
		$del = mysql_query("delete from $table_name where id in ($id_string)");
		if($del){
			echo "deleted";
		}
	}
	
?>