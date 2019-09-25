<script>var temp=0;</script>
<?php
$email=$_POST["email"];
$password=$_POST["password"];
$ser="localhost";
$user="root";
$pass="1234";
$db="blood";
$temp=2;
$conn=mysqli_connect($ser,$user,$pass,$db);
if($conn)
{echo "";}
else{echo "<script>alert('ERROR in regester')</script>";}

$p="SELECT password from user where email='$email' && password='$password'";
$q=mysqli_query($conn,$p);
$temp=mysqli_num_rows($q);
if($temp==1)
{echo "<script>temp=1;email='$email'</script>";}
else
{
echo "<script>temp=2;alert('Invalid details');</script>";
}


?>

<html>
<head>
<link rel="stylesheet" href="retrive.css">
<script>if(temp==1){setTimeout(function(){window.location.href="index2.php?email="+email},3000);}</script>
<script>if(temp==2){setTimeout(function(){window.location.href='login.php'},3000);}</script>
</head>
<body>
<div ><br><br><br><h1 id='load' align ='center' style="color:white;">LOADING...<h2></div>
</body>
</html>
