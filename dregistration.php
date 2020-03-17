<?php
$index = 1;
if(isset($_POST['fname'])){$fname = $_POST['fname'];}
if(isset($_POST['number1'])){$number1 = $_POST['number1'];}
if(isset($_POST['gender'])){$gender = $_POST['gender'];}
if(isset($_POST['addr'])){$addr = $_POST['addr'];}
if(isset($_POST['state'])){$state = $_POST['state'];}
if(isset($_POST['city'])){$city = $_POST['city'];}
if(isset($_POST['pincode'])){$pincode = $_POST['pincode'];}
if(isset($_POST['university'])){$university = $_POST['university'];}
if(isset($_POST['doctor'])){$doctor = $_POST['doctor'];}


$conn = new mysqli('localhost','root','','project1') ;
if($conn->connect_error){
	die('connection failed :' .$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("INSERT INTO doctor(fname,number1,gender,addr,state,city,pincode,university,doctor)
		values(?,?,?,?,?,?,?,?,?)");
		echo $conn -> error;
		$stmt->bind_param("sissssiss", $fname, $number1, $gender, $addr, $state, $city, $pincode, $university, $doctor);
		$stmt->execute();
		echo "registration successful";
		header('Location: homepage2.html');
		$stmt->close();
		$conn->close();
}
  

 ?>
