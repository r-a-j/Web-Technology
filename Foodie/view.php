<?php

include_once("config.php");

$ReadSql = "SELECT * FROM `users`";

$res = mysqli_query($connection, $ReadSql);



    session_start();

    if(!isset($_SESSION['id']))
    {
      header("Location: login.php");
    }
    
  

?>

<!DOCTYPE html>
<html>
<head>
	<title>View Database</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<body>
<meta http-equiv="refresh" />
	<div class="card text-center" style="font-size: 20px; text-shadow: 0px 0px 1px #000000;">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">      
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><button type="submit" class="btn btn-warning btn-lg"><font style="text-shadow: 0px 0px 1px #000000; font-size: 30px;" >Logout</font></button></a>
      </li>
    </ul>
  </div>

	<div class="container">
		<div class="row">
			<table class="table">
				<tr>
					<th style="text-shadow: 0px 0px 1px #000000; font-size: 30px;" >#tag</th>
					<th style="text-shadow: 0px 0px 1px #000000; font-size: 30px;" >Username</th>
					<th style="text-shadow: 0px 0px 1px #000000; font-size: 30px;" >E-Mail</th>
					<th style="text-shadow: 0px 0px 1px #000000; font-size: 30px;" >Extras</th>					
				</tr>

				<?php
					while($r = mysqli_fetch_assoc($res))
					{						
				?>

				<tr>
					<td><?php echo $r['id'];?></td>
					<td><?php echo $r['username'];?></td>
					<td><?php echo $r['email'];?></td>
					<td><a href="edit.php?id=<?php echo $r['id']; ?>"><button type="submit" class="btn btn-primary">Edit</button></a> | <a href="delete.php?id=<?php echo $r['id']; ?>"><button type="submit" class="btn btn-danger">Delete</button></a></td>
				</tr>
				
				<?php } ?>


			</table>
			
		</div>
		
	</div>

</body>
</html>