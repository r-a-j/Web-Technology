<?php

include_once("config.php");

$id = $_GET['id'];

$DelSql = "DELETE FROM `users` WHERE id=$id";

$res = mysqli_query($connection, $DelSql);

if($res)
{
	header('location: view.php');
}
else
{	
	echo "<font color='green'>";
    echo "<h1>";
    echo "Error Deleting";
    echo "</h1>";
    echo "</font>";
}

?>