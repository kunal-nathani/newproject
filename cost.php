<!DOCTYPE html>
<html>
<head>
    <div class =title><h2>Auto Cost Calculation</h2></div>
   <title>Auto Cost Calculation</title>
</head>

<style> 
         .title{ 
         background-color: #008080; 
         border:2px solid #ffffff;
         text-align: center;
         width: 100%;
         height: auto;
         color: white;
         padding: 20px;
         margin-top: -10px;
         margin-left: -10px;
         text-shadow: 1px 1px 2px black, 0 0 25px #008080, 0 0 5px white;
         } 
  
         .Button {
         width: 100%;
         background-color: #4CAF50;
         color: white;
         padding:40px;
         margin: 8px 0;
         border: none;
         border-radius: 4px;
         cursor: pointer;
         }

         Button:hover {
           background-color: #45a049;
         }
  
         input[type=text], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
         }
         input[type=number], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
         }
          .cost{
            margin: 100px;
            background-color: #008080;
            border: 2px solid black;
            padding: 20px;
            color: white;
            box-shadow: 10px 10px 5px grey
          }  
      </style>  
   <!-- create table -->
   <body>
      <form action="calculate.php" method="post">
      <div class="cost">
      <label for="Doctor's name">Doctor's name</label>
      <input type="text" name="dname"  placeholder="Doctor's name.."><br>
      <label for="Patient's name">Patient's name</label>
      <input type="text" name="pname" placeholder="Patient's name.."><br>
      <label for="Doctor's price">Doctor's price</label>
      <input type="number" name="dprice" placeholder="Doctor's price.."><br>
      <label for="Internet charges">Internet charges</label> 
      <input type="number" name="icharges" placeholder="Internet charges..">
       <label for="discount">Discount</label> 
      <input type="number" name="discount" placeholder="Discount..">
      <button type="submit"  value="calculate" >Calculate</button>
        </div>
        </form> 
   </body>
</html>
<?php
$index = 1;
if(isset($_POST['dname'])){$dname = $_POST['dname'];}
if(isset($_POST['pname'])){$pname = $_POST['pname'];}
if(isset($_POST['dprice'])){$dprice = $_POST['dprice'];}
if(isset($_POST['icharges'])){$icharges = $_POST['icharges'];}
if(isset($_POST['discount'])){$discount = $_POST['discount'];}
$conn = new mysqli('localhost','root','','project1') ;
if($conn->connect_error){
      die('connection failed :' .$conn->connect_error);
}
else
{
      $stmt = $conn->prepare("INSERT INTO signup (dname,pname,dprice,icharges,discount)
            values(?,?,?,?,?)");
            echo $conn -> error;
            $stmt->bind_param("ssiii", $dname, $pname, $dprice, $icharges, $discount);
            $stmt->execute();
            echo "registration successful";
            header('Location: homepage2.php');
            $stmt->close();
            $conn->close();
}
?>