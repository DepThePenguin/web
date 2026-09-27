<?php
	$ten_host="localhost";
	$ten_user="tuivaikh";
	$ten_pass="hongan@2011";
	$ten_database="tuivaikh_hongan";
	$conn = mysql_connect("$ten_host", "$ten_user", "$ten_pass");
	if(!$conn)
	{
		echo "Not connect server?";
		exit;
	}
	mysql_select_db("$ten_database");
?>