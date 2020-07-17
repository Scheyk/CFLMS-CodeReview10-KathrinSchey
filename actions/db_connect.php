<?php

	$host = "localhost";
	$user = "root";
	$pw = "";
	$db_name = "cr10_kathrinschey_biglibrary";

	$conn = mysqli_connect($host,$user,$pw,$db_name);

	if(!$conn) {
		echo "alarm!";
	}
	
?>