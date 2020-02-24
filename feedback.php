<?php
$index = 1;
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['suggestion'])){$suggestion = $_POST['suggestion'];}
if(isset($_POST['rating'])){$rating = $_POST['rating'];}


$conn = new mysqli('localhost','root','','project1') ;
if($conn->connect_error){
	die('connection failed :' .$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("INSERT INTO feedback (email,rating,suggestion)
		values(?,?,?)");
		echo $conn -> error;
		$stmt->bind_param("sis", $email, $rating, $suggestion);
		$stmt->execute();
		echo "feedback submitted successfully";
		header('Location: homepage2.html');
		$stmt->close();
		$conn->close();
}
  

 ?>

