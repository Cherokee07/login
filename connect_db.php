<?php
	$link =mysql_connect("localhost","rosa","rosa");
	if($link){
		mysql_select_db("academias",$link);
	}
?>