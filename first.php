
<html>
<title>WELCOME to BLOOD CAMP</title>
<head>
<link rel="stylesheet" href="form.css" type="text/css">
</head>
<body background ="m1.jpg">
<div class="body-content">
  <div class="module">
    <h1>Blood Donaor</h1>
    <form class="form" action="getdonator.php" method="post" enctype="multipart/form-data" autocomplete="on">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="name" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="text" placeholder="Number" name="number" required />
      <input type='text' placeholder='Age' name='age' required />
      <fieldset padding='3px'>
    <legend> Time :</legend><br>
     <input type="radio" class = "button1" name='slot' value='08:00-09:00am' onclick="setColour(event)">08:00-09:00am</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" class = "button1" name='slot' value='09:00-10:00am'  onclick="setColour(event)">09:00-10:00am</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input  type="radio" class = "button1" name='slot' value='10:00-11:00am'  onclick="setColour(event)">10:00-11:00am</button><br>
			<input type="radio" class = "button1" name='slot' value='11:00-12:00am'  onclick="setColour(event)">11:00-12:00pm</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			
			
			<input  type="radio" class = "button1" name='slot' value='01:00-02:00am'  onclick="setColour(event)">01:00-02:00pm</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input  type="radio" class = "button1" name='slot'  value='02:00-02:00am' onclick="setColour(event)">02:00-03:00pm</button><br>
			<input  type="radio" class = "button1" name='slot'  value='03:00-04:00am' onclick="setColour(event)">03:00-04:00pm</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" class = "button1" name='slot'  value='04:00-05:00am' onclick="setColour(event)">04:00-05:00pm</button><br>
 <br> </fieldset>





 <fieldset padding='3px'>
    <legend> Blood Details :</legend><br>
          <input type="text" placeholder="Blood Group" name="blood" required />
  <br> </fieldset>

 <div class="avatar"><label>Select your Image: </label><input type="file" name="photo"  required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>

</body>
</html>