<?php
	$link =mysql_connect("35.231.97.12","root","root");
	if($link){
		mysql_select_db("academias",$link);
	}
?>