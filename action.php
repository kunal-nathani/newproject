<?php
$conn = new mysqli('localhost','root','','project1') ;
if($conn->connect_error){
	die('connection failed :' .$conn->connect_error);
}
else {
 $query = mysql_query(select * from register);
 $num_rows = mysql_num_rows(query);

 echo $num_rows;
}
?>