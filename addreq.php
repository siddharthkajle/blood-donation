<?php
$name=$_GET["name"];
$fname=$_GET["fname"];
$gender=$_GET["gender"];
$subject=$_GET["subject"];
$country=$_GET["country"];
$sub=$_GET["sub"];
$ser="localhost";
$user="root";
$pass="1234";
$db="blood";
$conn=mysqli_connect($ser,$user,$pass,$db);
if($conn)
{echo "";}
else{echo "<script>alert('ERROR in regester')</script>";}





$q="INSERT INTO request VALUES('$name','$fname','$gender','$subject','$country','$sub')";
mysqli_query($conn,$q);
?>

<html>
<head>
<link rel="stylesheet" href="retrive.css">
<script>setTimeout(function(){window.location.href='index2.php'},3000);</script>
</head>
<body background="g7.gif" style="background-size:cover;background-position:center;">
<div ><br><br><br><h1 id='load' align ='center' style="color:white;">LOADING...<h2></div>
</body>
</html>