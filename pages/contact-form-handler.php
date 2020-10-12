<?php

    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new phpmailer;
    //$mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='ozhanfaruk@gmail.com';
    $mail->Password='faruk1982';

    $mail->setFrom('ozhanfaruk@gmail.com','ImperialTrade');
    $mail->addAddress('info@theimperialtrade.com');
    $mail->addReplyTo('ozhanfaruk@gmail.com');

    $mail->isHTML(true);
    $mail->Subject='PHP Mailer Subject';
    $mail->Body='<h1 align=center>Name :.$_POST['name'].<br>Email:.$_POST['email'].<br>Message: .$_POST['msg'].'</h1>;

    if(!$mail->send()){
        echo "Failed. Please try again!";
    }
    else {
        echo "Message has been sent !"
    }
?>