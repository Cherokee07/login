<?php
	$link =mysql_connect("localhost","rosa","");
	if($link){
		mysql_select_db("academias",$link);
	}
?>