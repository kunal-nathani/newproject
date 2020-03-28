 <html>
<head>
<Title>Efficient portal</Title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/feedback.css">
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
 <style type="text/css">
  body{
    position: sticky;
    background-image: url("lol4.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  } 
  </style>
<div class="feedback">
	<form action="feedbackb.php" method="post">
		<h2>Feedback</h2>
			<label for="email">Email</label>
    		<input type="email" id="email" name="email" placeholder="Your Email id.."/required>
    		<label for="Any suggestion">Any suggestion</label>
    		<input type="text" id="Any suggestion" name="suggestion" 
    		placeholder="Your any suggestion.." row="4" column="10"/required>
     Rate us:<br>
		<fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    </fieldset>
  <input type="submit" name="submit"onclick="myalert()"> 
   <script> 
        function myalert() { 
            alert("Welcome to to our portal\n " + 
                "Thanks!for giving feedback"); 
        } 
    </script>
</form>	
</div>
</header>
</body>
</html>