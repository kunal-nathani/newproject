<?php
 $con= mysqli_connect("localhost","root","");
 $db= mysqli_select_db($con,'project1');

 if(isset($_POST['email1'])){
 	$email=$_POST['email1'];
 	$passwd=$_POST['passwd'];

 	$sql="select * from signup where email='".$email."' AND passwd='".$passwd."'";
 	$result= mysqli_query($con,$sql);
 	if(mysqli_num_rows($result)==1){
 		header('Location: homepage2.html');
 		echo "successfully logged in";
 	}
 	else{
 		header('Location: login.html');
 		echo "wrong passwd";
 	}
 }
?>