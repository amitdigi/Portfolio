<?php
$user_email = $_POST['fromEmail'];
require('class.phpmailer.php');

/**************************Function for Email Sending *******************/
 function send_mail($user_email,$content,$subject,$head){
	 

$to=$user_email;
$subject = $subject;
$message = $content;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: " . $head . "\r\n";
mail($to, $subject, $message, $headers);
header("location: thankyou.html");
return;
}
if($user_email){
	 $to = $user_email;
	 $content = 'thank you message here...';
	 $subject = 'Thank You for your enquiry!';
	 $head = "amitmehtamv@gmail.com";
	 send_mail($to,$content,$subject,$head);
 }

?>