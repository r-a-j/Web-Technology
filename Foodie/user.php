<?php

    session_start();

    if(!isset($_SESSION['id']))
    {
      header("Location: login.php");
    }
  
?>

<!DOCTYPE html>
<html>
<head>
  <title>user</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<body>
<meta http-equiv="refresh" />
    <div class="card text-center" style="font-size: 20px; text-shadow: 0px 0px 1px #000000; background-color: lightgray;">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
        <a class="nav-link" href="view.php">View</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      
    </ul>
  </div>
<br><br>
<div align="center">
  <p style="text-shadow: 0px 0px 1px #000000; font-size: 30px;">Welcome Now You Have Exclusive rights to edit or delete the members of database </p>
</div>
<br><br>
<div align="center">
    <a href="view.php"><button class="btn btn-danger btn-lg"><b style="text-shadow: 0px 0px 30px #000000;" >View Database</b></button></a><br><br>
</div>
<br><br>
<div align="center">
    <a href="logout.php"><button class="btn btn-success"><b style="text-shadow: 0px 0px 30px #000000;" >Logout</b></button></a><br><br>
</div>
</body>
</html>