<?php

if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new phpmailer;

    $mail->Host='stmp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='ozhanfaruk@gmail.com';
    $mail->Password='faruk1982';

    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('info@theimperialtrade.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);

    if(!$mail->send()) {
    $result="Something went wrong. Please try again.";
}
else{
$result="Thanks".$_POST['name']. " for contacting us. We will get back to you soon!";
}
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = "farukozhan@yahoo.com";
$email_subject = "New Form Submission";
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User Message: $message.\n";
$to = "info@theimperialtrade.com";
$headers = " From: $email_from\r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

?>