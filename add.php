
<?php
$name=$_GET["name"];
$last=$_GET["last"];
$country=$_GET["country"];
$subject=$_GET["subject"];
$ser="localhost";
$user="root";
$pass="1234";
$db="blood";
$conn=mysqli_connect($ser,$user,$pass,$db);
if($conn)
{echo "";}
else{echo "<script>alert('ERROR in regester')</script>";}





$q="INSERT INTO contact VALUES('$name','$last','$country','$subject')";
mysqli_query($conn,$q);
?>

<html>
<head>
<link rel="stylesheet" href="retrive.css">
<script>alert('We will contact to you');setTimeout(function(){window.location.href='index3.php'},3000);</script>
</head>
<body background="g7.gif" style="background-size:cover;background-position:center;">
<div ><br><br><br><h1 id='load' align ='center' style="color:white;">LOADING...<h2></div>
</body>
</html>
