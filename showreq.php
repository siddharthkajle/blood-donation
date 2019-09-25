
<html>

<title>WELCOME to hospital</title>
<head>
<link rel="stylesheet" type="text/css" href="donation.css">
</head>

<body style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(i7.jpg);
height:100vh;
background-size:cover;
background-position:center;">

<div class="main">
<div id ="d1" ><br>
<h1 align="center"><b>Hospitality</b></h1>
</div>
<ul>
<li><a href="index3.php">HOME</a></li>
 <li><a href="first2.php">DONATION</a></li>
 <li><a href="destination2.php">DESTINATION</a></li>
 <li><a href="contact.html">CONTACT</a></li>
 &nbsp;&nbsp;
</ul>
</div>
<br><br><br><br><br><br>
<h2 class='title' style="color:white;font-size:50px;margin-left:-10%;text-shadow:2px 2px 5px grey;">Respected Blood Donor </h2>
<br><br><br><br><br><br><br>
<?php

	$ser="localhost";
$user="root";
$pass="1234";
$db="blood";
$name='';
$conn=mysqli_connect($ser,$user,$pass,$db);
if($conn)
{echo "";}
else{echo "<script>alert('ERROR in regester')</script>";}


$p="SELECT * from request";

$cost=mysqli_query($conn,$p);
$result=mysqli_fetch_assoc($cost);


    


    echo "<table border='1px' cellspacing='2px' cellpadding='7px' align ='center' height='auto' width='50%' bgcolor='#D0A9F5' style=' opacity: 0.6;font-size:28px; '>     <th>S.no. </th>
           <th>Name </th>
           <th>Email </th>
           <th>Number </th><th>Age </th><th>Slot </th><th>Blood </th>
    ";
    $i=0;
        foreach($cost as $row){
        	  $i++;
               echo"<tr>".
               "<td align='center'>".$i."</td>".
             "<td align='center'>".$row['name']."</td>".
             "<td align='center'>".$row['fname']."</td>".
             "<td align='center'>".$row['gender']."</td>".
              "<td align='center'>".$row['subject']."</td>".
              "<td align='center'>".$row['country']."</td>".
              "<td align='center'>".$row['sub']."</td>".
              "</tr>" ;
        
  
        }

echo "</table>";





?>
<br><br><br>
</body>
<html>