 <html>
<head>
<Title>Efficient portal</Title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/display.css">
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
  <li><a href="dhomepage.php">Home</a></li>
  <li><a href="dlogin.php">Login page</a></li>
  <li><a href="dfeedback.php">Feedback</a></li>
</ul>
</div>
  <style type="text/css">

  body{
    position: sticky;
    background-image: url("lol4.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  } 
    #Pasttable{
      margin-top: 200px;
      margin-left:100px; 
       font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
       background-color: #87CEEB;
       border:2px solid black;
    }
    

#Pasttable td, #Pasttable th {
  border: 1px solid #ddd;
  padding: 8px;
}

#Pasttable tr:nth-child(even){background-color: #ADD8E6;}

#Pasttable tr:hover {background-color: #ddd;}

#Pasttable th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#87CEEB;
  color: white;
}
  </style>

<table style="width:80%" id="Pasttable">
  <tr>
    <th>Serial number</th>
    <th>Doctor name</th>
    <th>Date</th>
    <th>Time</th>
    <th>Re</th>
    <th>To</th>
  </tr>
  <tr>
    <th> rahul</th>
    <th>roy</th>

 </tr>
  <tr>
   <th>raju</th>
   <th>rani</th>
  </tr>
</table>

<div class="footer">
  <ul>
    <li><a href="contact.html">Contactus</a></li>
    <li><a href="feedback.html">Feedback</a></li>
</ul>
</div>
</body>
</html>
