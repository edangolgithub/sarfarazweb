<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmail/Exception.php';
require 'phpmail/PHPMailer.php';
require 'phpmail/SMTP.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try
 {
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'sarmila2basnet@gmail.com';             // SMTP username
    $mail->Password   = 'SPAN1234';                             // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    $mail->setFrom('sarmila2basnet@gmail.com', 'Mailer');
    $mail->addAddress('sarfarazuddin7860@gmail.com', 'Sarf');    // Add a recipient
    $mail->addAddress('anzitgc741@gmail.com', 'anz');             // Add a recipient
    $mail->addAddress('smartevu@gmail.com', 'evu');             // Add a recipient
    $mail->Subject = 'email in php';
    $mail->Body    = 'hi how are you';

    $mail->send();
    echo 'Message has been sent';

} 
catch (Exception $e)
 {
    echo "error".$mail->Error_Info;
}