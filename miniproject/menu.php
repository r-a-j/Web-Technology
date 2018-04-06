<!DOCTYPE html>
<html>
<head>
  <title>About-Foodie</title>
  <style>
    
    body
    {
      margin: 0;
      padding: 0;
      background: #262626;
    }
    .ul1 ul
    {
      position: absolute;
      top: 15%;
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

    .ul3 ul
    {
      position: absolute;
      bottom: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      margin: 0;
      padding: 0;
      display: flex;
    }
    .ul3 ul li
    {
      list-style: none;
      color: #484848;
      font-family: arial;
      font-size: 5em;
      letter-spacing: 15px;
      animation: animate .1s linear infinite;
    }

  .fullscreen-bg {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  overflow: hidden;
  z-index: -100;
}

.fullscreen-bg__video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

@media (min-aspect-ratio: 16/9) {
  .fullscreen-bg__video {
    height: 300%;
    top: -100%;
  }
}

@media (max-aspect-ratio: 16/9) {
  .fullscreen-bg__video {
    width: 300%;
    left: -100%;
  }
}

@media (max-width: 767px) {
  .fullscreen-bg {
    background: url('../img/videoframe.jpg') center center / cover no-repeat;
  }

  .fullscreen-bg__video {
    display: none;
  }
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
  <div class="ul3">
    <ul>
      <li>Pizza</li>
      <li>/</li>
      <li>Burger</li>
      <li>/</li>
      <li>Pasta</li>
      
    </ul>
  </div>
  <div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <source src="video.mp4" type="video/mp4">        
    </video>
</div>
</body>
</html>