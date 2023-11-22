<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  if( file_exists($php_mailer = '../vendor/phpmailer/phpmailer/src/PHPMailer.php' )) {
      include( $php_mailer );
  } 
  else {
      die( 'Unable to load the "PHP Mailer Form" Library!');
  }

  if( file_exists($php_mailer_exception = '../vendor/phpmailer/phpmailer/src/Exception.php' )) {
      include( $php_mailer_exception );
  } 
  else {
      die( 'Unable to load the "PHP Mailer Exception Form" Library!');
  }

  if( file_exists($php_mailer_smtp = '../vendor/phpmailer/phpmailer/src/SMTP.php' )) {
      include( $php_mailer_smtp );
      } 
  else {
      die( 'Unable to load the "PHP Mailer SMTP Form" Library!');
  }


  $receiving_email_address = 'petekim211@gmail.com';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Get form data
      $name = $_POST["name"];
      $email = $_POST["email"];
      $subject = $_POST["subject"];
      $message = $_POST["message"];
      $lang = $_POST["lang"];

      // Create a PHPMailer instance
      $mail = new PHPMailer(true);

      try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Replace with your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'petekim211@gmail.com'; // Replace with your SMTP username
        $mail->Password   = 'euid xujv orcu ldyn'; // Replace with your SMTP password
        $mail->SMTPSecure = 'ssl'; // Enable TLS, or you can use PHPMailer::ENCRYPTION_SMTPS for SSL
        $mail->Port       = 465; // Adjust the port according to your SMTP server

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress($receiving_email_address); // Replace with your email address
        $mail->addReplyTo($email, $name);
    
        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $body = file_get_contents('mailhtml.html');

        $email_vars = array(
          'name' => $name,
          'email' => $email,
          'message' => $message,
        );
        
        if(isset($email_vars)){
            foreach($email_vars as $k=>$v){
                $body = str_replace('{'.strtoupper($k).'}', $v, $body);
            }
        }

        $mail->Body = $body;
        $mail->send();
        if($lang == 'en'){
          $resultMessage = "'Thank you for contacting us!'"; 
        }else{
          $resultMessage = "'Danke, dass Sie uns kontaktiert haben!'"; 
        } 
    } catch (Exception $e) {
        if($lang == 'en'){
            $resultMessage = "'Apologies, Email Sending Procedure failed, please try again or send us a message directly to our email!'";
        }else{      
            $resultMessage = "'Entschuldigung, der E-Mail-Sendevorgang ist fehlgeschlagen. Bitte versuchen Sie es erneut oder senden Sie uns eine Nachricht direkt an unsere E-Mail-Adresse!'";
        }
    }
    // Redirect to the form page with a query parameter indicating the result
    echo "<script>alert(".$resultMessage.")</script>";
    echo "<script>window.location.href = '../index.html';</script>";

  } else {
    // If the form is not submitted, redirect to the form page
    // echo "<script>alert(".$resultMessage.")</script>";
    echo "<script>window.location.href = '../index.html';</script>";

  }
?>