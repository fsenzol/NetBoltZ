<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(!filter_var($email, FILTER_VALIDAT_EMAIL)){
    echo "Invalid email address.";
    exit;
}
//Recipient Email
$to = "netboltz7@gmail.com";
//Subject
$subject = "Mail From NetBoltZ";
//Email message
$message_body = "Name:". $name . "\n"; 
$message_body .= "Email:" . $email. "\n";
$message_body .= "Message=" . $message;

//Email headers
$header = "From: " . $name  ."<" . $email . ">\r\n";
$header = "Reply-To " . $email ."\r\n";
//send email
if(mail($to, $subject, $message_body, $header){
       echo "Your message has successfully been sent";
} else{
    echo "Oops an error has occured. Please try again later";       
}

?> 
