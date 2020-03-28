 <html>
<head>
<Title>Efficient portal</Title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/login.css">
<script src="js/new.js"></script>
</head>
<body>
  <div class="new">
  <div class="img1" align="left"><image src="logo.jpg"></div>              
<h2>DOCTOR PATIENT PORTAL</h2>
<p>your name:</p>
</div>
<div id="sidebar">
<div class="toggle-btn" onclick="togglesidebar()">
  <span></span>
  <span></span>
  <span></span>
  </div>
  <ul>
  <li><a href="homepage2.php">Home</a></li>
  <li><a href="choose.html">Login page</a></li>
  <li><a href="registration.php">Registration</a></li>
  <li><a href="history.php">History</a></li>
  <li><a href="#">Appointment</a></li>
  <li><a href="organdonationl.php">Organ Donation</a></li>
  <li><a href="feedback.php">Feedback</a></li>
</ul>
</div>
	 <header>
	<div class="Login"> 
	<h2>Login</h2>
	<form  action="login1.php" method="post"><t>
 	<label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your Email id.."><br>
     <label for="Password">Password</label>
    <input type="Password" id="Password" name="passwd" placeholder="Your Password.."
    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

    <input type="submit" value="Submit"><br>
      OR
    <br>
   <a href="registration.html">Signup</a>
  </form>
	</div>
   <style type="text/css">
  body{
    position: sticky;
    background-image: url("lol4.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  } 
  </style>
<div class="footer">
  <ul>
    <li><a href="contact.html">Contactus</a></li>
    <li><a href="feedback.html">Feedback</a></li>
</ul>
</div>  
</header>
</body>
</html>
