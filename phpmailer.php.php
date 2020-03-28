//Top of my send.php code:

<?php 
sleep(2)/
require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();  // telling the class to use SMTP
$mail->Host     = "IP Address"; // SMTP server

//bottom of code:
$success = mail( implode(',', array( $R_email, $S_email )), $subject, $body, $headers, '-f [email]user123@company.com[/email]' ); 
echo 'Thank you, your request has been sent!';	

?>