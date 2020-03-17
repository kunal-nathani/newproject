<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/newcost.css">
	<title>Auto Cost Calculation</title>
</head>
<body>

<?php
if(isset($_POST['dname'])){$dname = $_POST['dname'];}
if(isset($_POST['pname'])){$pname = $_POST['pname'];}
if(isset($_POST['dprice'])){$dprice = $_POST['dprice'];}
if(isset($_POST['icharges'])){$icharges = $_POST['icharges'];}
if(isset($_POST['discount'])){$discount = $_POST['discount'];}
?>
<div class="lorem">
<h2><u>Bill Invoice</u></h2>
<?php
echo "Doctor's Name:$dname...";
?>
<br>
..................................
<br>
<?php
echo "Patient's Name:$pname..";
?>
<br>
....................................
<br>
<?php
echo "Doctor's Price:Rs$dprice..";
?>
<br>
....................................
<br>
<?php
echo "Discount:$discount%..";
?>
<br>
....................................
<br>
<?php
echo "Internet Charges:Rs$icharges..";
?>
<br>
..................................
<br>
<?php

$result1=$dprice+$icharges;
$result= $result1-($result1*$discount/100);
echo "Cost:Rs$result..";
?>
<br>
....................................
<br>
<?php
$Sgst=$result*9/100;
echo "SGST:Rs$Sgst..";
?>
<br>
....................................
<br>
<?php
$Cgst=$result*9/100;
echo "CGST:Rs$Cgst..";
?>
<br>
....................................
<br>
<?php
$total=$result+$Cgst+$Sgst;
echo "Total Cost:Rs$total..";
?>
<br>
....................................
</div>
</body>
</html>