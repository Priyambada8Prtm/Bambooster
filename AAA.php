<?php

$Fullname = $_POST['fullname'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Address = $_POST['address'];
$Number = $_POST['number'];

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'indonsiabambooster@gmail.com';
$mail->Password = 'ofns awbh pwjr oopr';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('indonsiabambooster@gmail.com');
$mail->addAddress($Email);
$mail->Subject = $Subject;
$mail->Body = "Data AAA: \nNama = " . $Fullname . "\nEmail = " . $Email . "\nPhone = " . $Phone . "\nAddress = \n" . $Address . "\nNumber =" . $Number;

if (!$mail->send()) {
    echo "Mailer error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent succesfully";
}