<?php
error_reporting(0);
if($_GET['email']){$email=$_GET['email'];}
echo "<script>var email='$email';</script>";
?>
<html>
 <head>
 <link rel="stylesheet" href="style123.css"/> 
 <title>Blood camp | Welcome</title>
</head>
<body>
 <header>
 <nav>
 <div class="logo">
<h1><font color='#2EFEF7'style='text-shadow:2px 2px 5px yellow;'>HU</font><font color='white'>manity</font></h1>
                </div>
 <div class="menu">
  <ul>
<li><a href="#">HOME</a></li>
 <li><a href="first.php">DONATION</a></li>
 <li><a href="request.html">REQUEST</a></li>
 <li><a href="contact.html">CONTACT</a></li>
 <li><a href="main.php">LOGOUT</a></li>
 &nbsp;&nbsp;
</ul>
</div>
 </nav>

 <div class="scroll">
<a href='#down'><img src="scroll.png"></a>
   </div>      
    <div class="brand">
<a href="signup2.php">Get Started</a>
</div>  
</header>
<div class="subscribe">
  <h4>SUBSCRIBE TO OUR NEWSLETTERS</h4>
 <form action ="news.php" method='get'>
 <input type="email" placeholder="Example@email.com" name='email'>
   <button type="submit">SUBSCRIBE</button>
</form>
 </div>
<footer>  
 <div class="social-net">
 <ul class="link">
 <li><a href="https://www.facebook.com/donateblood"><img src="facebook1.png" id='down'></a></li>
<li><a href="https://www.youtube.com/watch?v=ezafVzfJw60"><img src="youtube.png"></a></li>
 <li><a href="https://www.instagram.com/explore/tags/blooddonation/?hl=en"><img src="insta.png"></a></li>
 </ul>
 </div>
</footer>
 </body>
</html>
