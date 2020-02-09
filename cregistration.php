<?php

$host= 'localhost';
$dbuser= 'root';
$dbpass = '';
$dbname= 'project1' ;

$fname= filter_input(INPUT_POST,'fname');
$mname= filter_input(INPUT_POST,'mname');
$lname= filter_input(INPUT_POST,'lname');
$phone1= filter_input(INPUT_POST,'phone1');
$phone2= filter_input(INPUT_POST,'phone2');
$addr= filter_input(INPUT_POST,'addr');
$state= filter_input(INPUT_POST,'state');
$city= filter_input(INPUT_POST,'city');
$pincode= filter_input(INPUT_POST,'pincode');
$email= filter_input(INPUT_POST,'email');
$passwd= filter_input(INPUT_POST,'passwd');
$age= filter_input(INPUT_POST,'age');
$blood= filter_input(INPUT_POST,'blood');
$gender= filter_input(INPUT_POST,'gender');

$conn = new mysqli($host, $dbuser, $dbpass, $dbname) or die("unable to connect");
  
  		$sqL="INSERT INTO signup (fname,mname,lname,phone1,phone2,addr,state,city,pincode,email,passwd,age,blood,gender)
  		values ($fname,$mname,$lname,$phone1,$phone2,$addr,$state,$city,$pincode,$email,$passwd,$age,$blood,$gender)";

  		echo "successful";
  

 

?>
