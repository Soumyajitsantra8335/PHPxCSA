

<?php
// for the mailer class 
// go to php composer website and download composer library 
// go to xampp/htdocs/your project  open cmd and type the command
// composer require phpmailer/phpmailer

use PHPMailer\PHPMailer\PHPMailer;// for the class
use PHPMailer\PHPMailer\Exception;// for the exception class

 //PHPMailer files include
//require 'PHPMailer/src/PHPMailer.php'; //main php mailer file
//require 'PHPMailer/src/SMTP.php';      // for smtp protocol
//require 'PHPMailer/src/Exception.php'; //main php exception file
require 'vendor/autoload.php';


$mail = new PHPMailer(true);

try {

    // SMTP Enable
    $mail->isSMTP();

    // SMTP Server
    $mail->Host = 'smtp.gmail.com';

    // SMTP Authentication
    $mail->SMTPAuth = true;




    // Gmail ID
    $mail->Username = 'soumosantra588@gmail.com';

    // Gmail App Password
    $mail->Password = 'sumn knrl catg zshi';

    // Encryption
    $mail->SMTPSecure = 'tls';

    // Port
    $mail->Port = 587;

    // Sender Email
    $mail->setFrom('soumosantra588@gmail.com', 'Soumo');

    // Receiver Email
    $mail->addAddress('sunnysantra64@gmail.com');

    // Subject
    $mail->Subject = 'PHPMailer Test';

    // Message Body
    $mail->Body = 'This is a test email using PHPMailer';

    // Send Mail
    $mail->send();

    echo "Mail Sent Successfully";

} catch (Exception $e) {

    echo $e;
}

?>