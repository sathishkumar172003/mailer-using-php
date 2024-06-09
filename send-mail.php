<?php 

// Load PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// If using Composer's autoloader
require 'vendor/autoload.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $fromAddr = 'sthshkmr172003@gmail.com';
    $fromPwd = 'hjnlswktofoewgee';

    $userEmail = $_POST['user_email'];

    $subject = 'Thanks for subscribing to our NewsLetter';
    $body = 'We have recivied your request. And we will add your email to our newsletter subscriptions list';
    $cc_list = array('sathishkumar.honeycomb@gmail.com');

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0; // Disable verbose debug output
        $mail->isSMTP(); // Use SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = $fromAddr; // SMTP username
        $mail->Password = $fromPwd; // SMTP password (use the App Password here)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to


        // Recipients
        $mail->setFrom($userEmail, 'Honey Comb');
        $mail->addAddress($userEmail); // Add a recipient

        // Add cc 
        foreach($cc_list as $css_address) {
            $mail->addCC($css_address);
        }

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;

        // Send the email
        $mail->send();
        echo 'Message has been sent successfully';


    }catch(Exception $e){
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}




?>