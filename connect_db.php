<?php
	$link =mysql_connect("localhost","rosa","root");
	if($link){
		mysql_select_db("academias",$link);
	}
?>