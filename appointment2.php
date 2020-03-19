<!DOCTYPE html>
<html>
<head>
	<title>Efficient Doctor Patient Portal</title>
</head>
<body>
	<style type="text/css">
    *{
      padding: 0px;
      margin:0px;

    }
		#Pasttable{
      margin-top: 100px;
			 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			 background-color: #87CEEB;
			 border:2px solid black;
		}
		

#Pasttable td, #Pasttable th {
  border: 1px solid #ddd;
  padding: 8px;
}

#Pasttable tr:nth-child(even){background-color: #ADD8E6;}

#Pasttable th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#87CEEB;
  color: white;
}

	</style>
  <div class="links">
	<a href="appointment.php">Past records</a>
	<a href="appointment2.php">New records</a>
</div>
<table style="width:100%" id="Pasttable">
  <tr>
    <th>Serial number</th>
    <th>Doctor name</th>
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
</body>
</html>