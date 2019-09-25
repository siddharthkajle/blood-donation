<?php
$name=$_GET["name"];
$email=$_GET["email"];
$number=$_GET["number"];
$city=$_GET["city"];$time=$_GET["time"];
$ser="localhost";
$user="root";
$pass="1234";
$db="blood";
$conn=mysqli_connect($ser,$user,$pass,$db);
if($conn)
{echo "";}
else{echo "<script>alert('ERROR in regester')</script>";}





$q="INSERT INTO event VALUES('$name','$number','$email','$city','$time')";
mysqli_query($conn,$q);
?>

<html>
<head>
<script>alert('Event is register successfully');setTimeout(function(){window.location.href='index3.php'},100);</script>
</head>
<body background="g7ds.gif" style="background-size:cover;background-position:center;">
<div ><br><br><br><h1 id='load' align ='center' style="color:white;">LOADING...<h2></div>
</body>
</html>