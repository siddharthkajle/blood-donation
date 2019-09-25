<?php
$email=$_GET["email"];
$ser="localhost";
$user="root";
$pass="1234";
$db="blood";
$conn=mysqli_connect($ser,$user,$pass,$db);
if($conn)
{echo "";}
else{echo "<script>alert('ERROR in regester')</script>";}



$q="INSERT INTO news (email)VALUES('$email')";
mysqli_query($conn,$q);
?>

<html>
<head>
<link rel="stylesheet" href="c1.css">
<script>setTimeout(function(){window.location.href='first.php'},3000);</script>
</head>
<body background="g6.gif" style="background-size:cover;background:black;">
<div ><br><br><br><h1 id='load' align ='center' style="color:white;">LOADING...<h2></div>
</body>
</html>