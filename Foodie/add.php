<?php

include_once("config.php");

if(isset($_POST) & !empty($_POST))
{
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);
	$password = md5($password);
	$CreateSql = "INSERT INTO `users` (username, email, password) VALUES ('$username','$email', '$password') ";

	$res = mysqli_query($connection, $CreateSql);

	if($res)
	{
		echo "<font color='green'>";
		echo "<h1>";
		echo "Sign Up Success";
		echo "</h1>";
		echo "</font>";
	}
	else
	{
		echo "Not entered into the database.";
	}
}

?>


<html>
<head>
	<title>signup</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<body>
<meta http-equiv="refresh" />
	<div class="card text-center" style="font-size: 20px; text-shadow: 0px 0px 1px #000000; background-color: lightgray;">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
  </div>

	<form method="POST" class="form-group">
      <div class="container">
      <h3 class="display-1" class="card-title" style=" color: black;                                                                                                    ;
    text-shadow: 2px 2px 50px #000000; fint-family: Tahoma; ">Sign Up</h3><br>
      
      <label for="username"><b style="text-shadow: 0px 0px 1px #000000; font-size: 30px;">Username</b></label>
      <input class="form-control form-control" type="text" placeholder="Enter Username" name="username" required><br><br>

      <label for="email"><b style="text-shadow: 0px 0px 1px #000000; font-size: 30px;" >E-Mail</b></label>
      <input class="form-control form-control" type="email" placeholder="Enter E-Mail" name="email" required><br><br>

      <label for="password"><b style="text-shadow: 0px 0px 1px #000000; font-size: 30px;" >Password</b></label>
      <input class="form-control form-control" type="password" placeholder="Enter Password" name="password" required><br><br>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
       <div align="center">
        <button type="submit" class="btn btn-success btn-lg"><b style="text-shadow: 0px 0px 30px #000000;" >Sign Up</b></button>
      </div>

      

    </div>
  </form>
  
<div align="left" style="position: bottom; padding: 25px;">
        <label>
          Already a member ? 
            <a href="login.php"><button type="submit" class="btn btn-primary"><b style="text-shadow: 0px 0px 30px #000000;" >Login</b></button></a>
        </label>
      </div>
</body>
</html>

