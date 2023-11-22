<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if( file_exists($php_mailer = './vendor/phpmailer/phpmailer/src/PHPMailer.php' )) {
    include( $php_mailer );
} 
else {
    die( 'Unable to load the "PHP Mailer Form" Library!');
}

if( file_exists($php_mailer_exception = './vendor/phpmailer/phpmailer/src/Exception.php' )) {
    include( $php_mailer_exception );
} 
else {
    die( 'Unable to load the "PHP Mailer Exception Form" Library!');
}

if( file_exists($php_mailer_smtp = './vendor/phpmailer/phpmailer/src/SMTP.php' )) {
    include( $php_mailer_smtp );
    } 
else {
    die( 'Unable to load the "PHP Mailer SMTP Form" Library!');
}
// Load PHPMailer
// require 'PHPMailer/Exception.php';
// require 'PHPMailer/PHPMailer.php';
// require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Create a PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Replace with your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'petekim211@gmail.com'; // Replace with your SMTP username
        $mail->Password   = 'euid xujv orcu ldyn'; // Replace with your SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable TLS, or you can use PHPMailer::ENCRYPTION_SMTPS for SSL
        $mail->Port       = 465; // Adjust the port according to your SMTP server

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('petekim211@gmail.com'); // Replace with your email address

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "Name: $name<br>Email: $email<br>Message:<br>$message";

        $mail->send();
        echo 'Thank you for contacting us!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: testmail.html");
}
?>
