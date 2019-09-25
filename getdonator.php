<?php
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];$age=$_POST["age"];$slot=$_POST["slot"];$blood=$_POST["blood"];
$filename=$_FILES['photo']['name'];
$temp=$_FILES['photo']['tmp_name'];
$folder=$filename;
move_uploaded_file($temp,$folder);
$ser="localhost";
$user="root";
$pass="1234";
$db="blood";
$conn=mysqli_connect($ser,$user,$pass,$db);
if($conn)
{echo "";}
else{echo "<script>alert('ERROR in regester')</script>";}

$q="INSERT INTO donation VALUES('$name','$email','$number','$age','$slot','$blood','$folder')";
mysqli_query($conn,$q);

echo "<script>var email='$email';</script>";
?>

<html>
<head>
<link rel="stylesheet" href="retrive.css">
<script>setTimeout(function(){window.location.href='index2.php?email='+email},3000);</script>
</head>
<body background="g6.gif" style="background-size:cover;background-position:buttom;">
<div ><br><br><br><h1 id='load' align ='center' style="color:white;">LOADING...<h2></div>
</body>
</html>
