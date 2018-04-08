<?php

$connection = mysqli_connect('localhost', 'root', '', 'test_db');

	if(!$connection)
	{
		die("Database Connection Failed...!" . mysqli_error($connection));
	}
 
?>
