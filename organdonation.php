<?php
$index = 1;
if(isset($_POST['fname'])){$fname = $_POST['fname'];}
if(isset($_POST['phone'])){$phone = $_POST['phone'];}
if(isset($_POST['gender'])){$gender = $_POST['gender'];}
if(isset($_POST['addr'])){$addr = $_POST['addr'];}
if(isset($_POST['state'])){$state = $_POST['state'];}
if(isset($_POST['city'])){$city = $_POST['city'];}
if(isset($_POST['pincode'])){$pincode = $_POST['pincode'];}
if(isset($_POST['age'])){$age = $_POST['age'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['blood'])){$blood = $_POST['blood'];}
if(isset($_POST['mname'])){$mname = $_POST['mname'];}
if(isset($_POST['lname'])){$lname = $_POST['lname'];}
if(isset($_POST['drug'])){$drug = $_POST['drug'];}
if(isset($_POST['disease'])){$disease = $_POST['disease'];}
if(isset($_POST['others'])){$others = $_POST['others'];}
if(isset($_POST['organ'])){$organ = $_POST['organ'];}


$conn = new mysqli('localhost','root','','project1') ;
if($conn->connect_error){
	die('connection failed :' .$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("INSERT INTO register(fname,mname,lname,phone,age,addr,state,city,pincode,email,organ,gender,blood,drug,disease,others)
		values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		echo $conn -> error;
		$stmt->bind_param("sssiisssisssssss", $fname, $mname, $lname, $phone, $age, $addr, $state, $city, $pincode, $email, $organ, $gender, $blood, $drug, $disease, $others);
		$stmt->execute();
		echo "registration successful";
		header('Location: homepage2.html');
		$stmt->close();
		$conn->close();
}
  

 ?>
