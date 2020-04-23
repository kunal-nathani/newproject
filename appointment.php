<!DOCTYPE html>
<html>
<head>
  <title>Efficient Doctor Patient Portal</title>
  <script src="js/new.js"></script>
</head>
<body>
  <style type="text/css">
    *{
  margin:0px;
  padding:0px;
  font-family:times new roman;
}
.new h2{
   text-shadow: 1px 1px 2px black, 0 0 25px #008080, 0 0 5px white;
}

#sidebar{
  margin-top: 93px;
  position:fixed;
  width:200px;
  height:100%;
  background:#151719;
  left:-200px;
}
#sidebar.active{
  left:0px;
  transition: 0.7s;
}
#sidebar ul li{
  color:rgba(230,230,230,0.9);
  list-style:none;
  padding:15px 10px;
  border-bottom:1px solid rgba(100,100,100,0.3);
}
#sidebar .toggle-btn{
  position:absolute;
  left:230px;
  top:20px;
}
#sidebar .toggle-btn span{
  display:block;
  width:30px;
  height:5px;
  background:#151719;
  margin:5px 0px;
}

* {
  box-sizing: border-box;
}
.new {
  position: fixed;
  background-color: #008080;
  margin-top: -10px;
  padding: 20px;
  width: 100%;
  height: auto;
  text-align: center;

  color: #ffffff ;

}
.new img
{ 
  margin-top: 5px;
  margin-bottom: 5px;
  position: fixed;
  width: 50px;
  height: auto;
}
.new a{
  margin: 2px;
  padding: 1px;
  background-color:#01B636;
  float: right;
  color: white;
  size: 10px;
  border:1px solid white;
}
form.example input[type=text] {
  float: right;
  padding: 5px;
  font-size: 17px;
  border: 1px solid black;
  width: 20%;
  background: #f1f1f1;
}

form.example button {
  float: right;
  width: 5%;
  padding: 7px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
.footer{
  text-align-last: right;
   padding: 15px;
   background: #008080;
   margin-top: 100px;

}
.footer ul{
  list-style-type: none;
}
.footer ul li{
  display: inline-block;
  margin: 10px;
}
.footer ul li a{
color: white;
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
  <div class="new">
  <div class="img1" align="left"><image src="images/logo.jpg"></div>
  <a href="login.html">Login</a><a href="registration.html">Signup</a>                
<h2>DOCTOR PATIENT PORTAL</h2>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- The form -->
<form class="example" action="action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
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
  <li><a href="organdonation.php">Organ Donation</a></li>
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
    <a href="appointment.php">Past records</a>
  <a href="appointment2.php">New records</a>
<table style="width:80%" id="Pasttable">
  <tr>
    <th>Date</th>
    <th>Time</th>
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