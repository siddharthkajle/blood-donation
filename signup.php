<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="design.css">
</head>
<body style='background:url(s4.png);'>

<center><h2>: Camp Organisation : </h2></center>

<div class="container">
  <form action="addevent.php" method="get">
    <label for="fname">Cordinator Name</label>
    <input type="text" id="fname" name="name" placeholder="Enter name..">

    <label for="lname">Cordinator Number</label>
    <input type="text" id="lname" name="number" placeholder="Enter number..">

    <label for="lname">Cordinator Email</label>
    <input type="text" id="lname" name="email" placeholder="Enter Email..">

    <label for="city">City</label>
    <select id="city" name="city">
      <option value="Indore">Indore</option>
      <option value="Bhopal">Bhopal</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Delhi">Delhi</option>
      <option value="Hydrabad">Hydrabad</option>
      <option value="Kolkata">Kolkata</option>
    </select>

<label for="lname">Time</label>
    <input type="text" id="lname" name="time" placeholder="Time of Event..">


    <input type="submit" value="Add Details">
  </form>
</div>

</body>
</html>