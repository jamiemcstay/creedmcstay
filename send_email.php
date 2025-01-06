<?php

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Create an instance of PHPMailer
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'sandbox.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Port = 2525;
$mail->Username = 'dc099d8d52c30d';
$mail->Password = '42deaefcbca58e';

$mail->isHTML(true); // Set email format to HTML
$mail->Subject = 'Test Email from PHPMailer'; // Set email subject
$mail->Body    = 'This is a <b>test</b> email sent using PHPMailer!'; // Set email body

// Set the "From" email address
$mail->setFrom('jamiemcstay@hotmail.com', 'Jamie McStay'); // Replace with your email and name

// Add recipient's email address
if (!$mail->addAddress('jamiemcstay@hotmail.com', 'Recipient Name')) {
    throw new Exception('Recipient email address is invalid.');
}

// Check if the email was sent successfully
if ($mail->send()) {
    echo 'Message has been sent';
} else {
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
}
?>