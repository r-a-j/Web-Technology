<?php
    session_start();
 
    if(isset($_POST['login'])) 
    {
        include_once("config.php");
        // $username = $_POST['username'];
        // $password = $_POST['password'];
        
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
 
        $username = stripslashes($username);
        $password = stripslashes($password);
       
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
 
        $password = md5($password);

        $sql = "SELECT * FROM `users` WHERE username='$username' LIMIT 1";
        $query = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($query);



        $id = $row['id'];
        $db_password = $row['password'];
 
        if($password == $db_password) 
        {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            header("Location: user.php");
        } 
        else 
        {
            echo "<font color='red'>";
            echo "<h4>";
            echo "Username or Password Incorrect ...";
            echo "</h4>";
            echo "</font>";
        }
 
    }
?>


<html>
<head>
	<title>Login</title>

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
    </ul>
  </div>

  <form method="POST" class="form-group">
      <div class="container">
      <h1 class="display-2" class="card-title" style=" color: black; text-shadow: 2px 2px 50px #000000;">Login</h1><br>
      
      <label for="username"><b style="text-shadow: 0px 0px 1px #000000; font-size: 30px;" >Username</b></label>
      <input class="form-control form-control" type="text" placeholder="Enter Username" name="username" required><br><br>

       <label for="password"><b style="text-shadow: 0px 0px 1px #000000; font-size: 30px;" >Password</b></label>
      <input class="form-control form-control" type="password" placeholder="Enter Password" name="password" required><br><br>

      	<div align="center">
        <button type="submit" name="login" class="btn btn-primary btn-lg"><b style="text-shadow: 0px 0px 30px #000000;" >Login</b></button>
        </div>
  </form>

</body>
</html>
