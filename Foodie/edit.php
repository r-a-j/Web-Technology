<?php

include_once("config.php");

$id = $_GET['id'];

$SelSql = "SELECT * FROM `users` WHERE id=$id";

$res = mysqli_query($connection, $SelSql);

$r = mysqli_fetch_assoc($res);


if(isset($_POST) & !empty($_POST))
{
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);

	$UpdateSql = "UPDATE `users` SET username = '$username', email = '$email', password = '$password' WHERE id=$id";

	$res = mysqli_query($connection, $UpdateSql);

	if($res)
	{
		echo "<font color='green'>";
    echo "<h1>";
    echo "Updated Successfully";
    echo "</h1>";
    echo "</font>";
	}
	else
	{
		echo "Not Updated Successfully or Partially...!";
	}
}

?>


<html>
<head>
	<title>Edit</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<body>
<meta http-equiv="refresh" />
  <div class="card text-center" style="font-size: 20px; text-shadow: 0px 0px 1px #000000;">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view.php">View</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add.php">Sign Up</a>
      </li>
    </ul>
  </div>

	<form method="POST">
      <div class="container">
      <h1 >Edit Data</h1>
      
      <label for="username"><b>Username</b></label>
      <input type="text" class="form-control form-control-sm" value="<?php echo $r['username']; ?>"  placeholder="Enter Username" name="username" ><br><br>

      <label for="email"><b>E-Mail</b></label>
      <input type="text" class="form-control form-control-sm" value="<?php echo $r['email']; ?>" placeholder="Enter E-Mail" name="email" ><br><br>

      <label for="password"><b>Password</b></label>
      <input type="password" class="form-control form-control-sm" value="<?php echo $r['password']; ?>" placeholder="Enter Password" name="password" ><br><br>
       <div align="center">
        <button type="submit" class="btn btn-success">Update</button>
      </div>
    </div>
  </form>

<div align="center">
  <a href="view.php"><button type="submit" class="btn btn-warning">View Database</button></a>
  <a href="add.php"><button type="submit" class="btn btn-primary">Sign Up</button></a>
</div>

</body>
</html>

