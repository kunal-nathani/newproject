<?php
$index = 1;
if(isset($_POST['fname'])){$fname = $_POST['fname'];}
if(isset($_POST['mname'])){$mname = $_POST['mname'];}
if(isset($_POST['lname'])){$lname = $_POST['lname'];}
if(isset($_POST['phone1'])){$phone1 = $_POST['phone1'];}
if(isset($_POST['phone2'])){$phone2 = $_POST['phone2'];}
if(isset($_POST['addr'])){$addr = $_POST['addr'];}
if(isset($_POST['state'])){$state = $_POST['state'];}
if(isset($_POST['city'])){$city = $_POST['city'];}
if(isset($_POST['pincode'])){$pincode = $_POST['pincode'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['passwd'])){$passwd = $_POST['passwd'];}
if(isset($_POST['age'])){$age = $_POST['age'];}
if(isset($_POST['blood'])){$blood = $_POST['blood'];}
if(isset($_POST['gender'])){$gender = $_POST['gender'];}

$conn = new mysqli('localhost','root','','project1') ;
if($conn->connect_error){
	die('connection failed :' .$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("INSERT INTO signup (fname,mname,lname,phone1,phone2,addr,state,city,pincode,email,passwd,age,blood,gender)
		values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		echo $conn -> error;
		$stmt->bind_param("sssiisssisssss", $fname, $mname, $lname, $phone1, $phone2, $addr, $state, $city, $pincode, $email, $passwd, $age, $blood, $gender);
		$stmt->execute();
		echo "registration successful";
		header('Location: homepage2.html');
		$stmt->close();
		$conn->close();
}
  

 ?>
