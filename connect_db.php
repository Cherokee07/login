<?php
	$link =mysql_connect("localhost","root","root");
	if($link){
		mysql_select_db("academias",$link);
	}
?>