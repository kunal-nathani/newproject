<?php
if(isset($_POST['email1'])){$email = $_POST['email1'];}
if(isset($_POST['passwd1'])){$pass = $_POST['passwd1'];}

$conn = new mysqli('localhost','root','','project1') ;
if($conn->connect_error){
	die('connection failed :' .$conn->connect_error);
}
else
{
	$query=mysqli_query("select * from signup where email='".$email."' AND passwd='".$pass."'");
	$rowcount=mysqli_num_rows($query);
	if($rowcount==1 ){
			header('Location: homepage2.html');
	}
	else{
			header('Location: registration.html');
	}
}

?>