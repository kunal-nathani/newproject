<?php

$email = $_POST['email'];
$passwd = $_POST['passwd'];

$conn = new mysqli('localhost','root','','project1');
if($conn->connect_error){
	die('connection failed :' .$conn->connect_error);
}
else
{

	$result = mysqli_query($conn,"select * from signup where email='$email' and passwd='$passwd'");

	$row= mysqli_fetch_array($result);

	if($row['email']==$email && $row['passwd']==$passwd){
		header('Location: login1.html');
	}
	else{
		echo "wrong password!";
	}
}
?>