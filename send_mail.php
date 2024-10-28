<?php


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
// require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'webmail.nteos.ca';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@nteos.ca';                     //SMTP username
    $mail->Password   = '!%TSgDe%kvw;';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@nteos.ca', 'Mailer');
    // $mail->addAddress('joe@example.net', 'Joe User');     
    $mail->addAddress($email);               
    $mail->addReplyTo($email, $name);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "New message from $name regarding: $subject";
    $mail->Body    = "<h2>You have received a new message!</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Subject:</strong> $subject</p>
    <p><strong>Message:</strong></p>
    <p>$message</p>
";
    $mail->AltBody = 'You have received a new message!
    
    Name: $name
    Email: $email
    Phone: $phone
    Subject: $subject
    Message:
    $message';

    $mail->send();
    // echo 'Message has been sent';
    ?>
    <script language="javascript" type="text/javascript">
    alert('Thank you for the message. We will contact you shortly.');
    window.location = 'ContactUs.php';
  </script>
  <?php
    
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    ?>
    <script language="javascript" type="text/javascript">
    alert('Server Error! Please try again later.');
    window.location = 'ContactUs.php';
  </script>
  <?php
}
}
?>