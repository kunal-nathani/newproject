<?php
$index = 1;
if(isset($_POST['fname'])){$fname = $_POST['fname'];}
if(isset($_POST['mname'])){$mname = $_POST['mname'];}
if(isset($_POST['lname'])){$lname = $_POST['lname'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['state'])){$state = $_POST['state'];}
if(isset($_POST['subject'])){$subject = $_POST['subject'];}


$conn = new mysqli('localhost','root','','project1') ;
if($conn->connect_error){
	die('connection failed :' .$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("INSERT INTO contact(fname,mname,lname,email,state,subject)
		values(?,?,?,?,?,?)");
		echo $conn -> error;
		$stmt->bind_param("ssssss", $fname, $mname, $lname, $email, $state, $subject);
		$stmt->execute();
		echo "registration successful";
		header('Location: homepage2.html');
		$stmt->close();
		$conn->close();
}
  

 ?>
