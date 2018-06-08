<?php
	$link =mysql_connect("localhost","","");
	if($link){
		mysql_select_db("academias",$link);
	}
?>