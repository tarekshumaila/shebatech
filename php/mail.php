<?php


$to      = 'tarekshumaila@gmail.com';
$subject = 'Shebatech.com Inquiry | ' . $_POST["name"];
$message = wordwrap($_POST["msg"], 70, "\r\n");
$headers = 'From: info@shebatech.com' . "\r\n" .
    'Reply-To: info@shebatech.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
	echo'success';
}
?>