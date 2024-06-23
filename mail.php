<php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "rtech777r@gmail.com";
$subject = "Mail From NetBoltZ";
$txt ="Name = ". $name . "\r\n Email = " . $email."\r\n message=" . $message.

$header = "From: noreply@R_Tech.com" . "\r\n" .
"CC: somebodyelse@exampple.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("location: index.html")
?> 