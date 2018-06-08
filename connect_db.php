<?php
	$link =mysql_connect("localhost","chero","root");
	if($link){
		mysql_select_db("academias",$link);
	}
?>