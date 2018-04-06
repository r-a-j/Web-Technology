<?php 

$databaseHost = 'localhost';
$databaseName = 'registration';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>
	<title>deleteuser</title>
	<style>
    
    body
    {
      margin: 0;
      padding: 0;
      background: #ffffff;
    }
    .ul1 ul
    {
      position: absolute;
      bottom: 10%;
      left: 50%;
      transform: translate(-50%,-50%);
      margin: 0;
      padding: 0;
      display: flex;
    }
    .ul1 ul li
    {
      list-style: none;
      color: #484848;
      font-family: arial;
      font-size: 5em;
      letter-spacing: 15px;
      animation: animate 1.4s linear infinite;
    }
    @keyframes animate
    {
      0%
      {
        color: #484848;
        text-shadow: none;        
      }
      90%
      {
        color: #484848;
        text-shadow: none;        
      }
      100%
      {
        color: #fff900;
        text-shadow: 0 0 7px #fff900, 0 0 50px #ff6c00;        
      }
    }
    .ul1 ul li:nth-child(1)
    {
      animation-delay: .2s;
    }
    .ul1 ul li:nth-child(2)
    {
      animation-delay: .4s;
    }
    .ul1 ul li:nth-child(3)
    {
      animation-delay: .6s;
    }
    .ul1 ul li:nth-child(4)
    {
      animation-delay: .8s;
    }
    .ul1 ul li:nth-child(5)
    {
      animation-delay: 1s;
    }
    .ul1 ul li:nth-child(6)
    {
      animation-delay: 1.2s;
    }

    .ul2 ul 
    {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }

    .ul2 li
    {
        float: left;
    }

    .ul2 li a
    {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .ul2 li a:hover
    {
        background-color: #111;
    }
  </style>
</head>
<body>
	<div class="ul1">
    <ul>
      <li>F</li>
      <li>O</li>
      <li>O</li>
      <li>D</li>
      <li>I</li>
      <li>E</li>
    </ul>
  </div>	
  <div align="center" class="ul2">
    <ul>
        <li><a href="login.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
    </ul>
  </div>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Username</td>
		<td>E-Mail</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result))
	{ 		
		echo "<tr>";
		echo "<td>".$res['username']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>| <a href=\"deletefinal.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</body>
</html>