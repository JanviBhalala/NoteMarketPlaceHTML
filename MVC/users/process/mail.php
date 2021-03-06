<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Imort PHPMailer classes to your php file for sending mail
require_once '../SMTP/src/Exception.php';
require_once  '../SMTP/src/PHPMailer.php';
require_once  '../SMTP/src/SMTP.php';


function sendMail($senderMail,$senderName,$txtSubject,$txtBody,$txtAltBody,$i){
	//Create an object of the Phpmailer class
$mail= new PHPMailer(true);
try{
	$mail->isSMTP();
	$mail->Host ='smtp.gmail.com';
	$mail->SMTPAuth= true;
    if($i==1){
    $mail->AddEmbeddedImage('../img/logo/colored-logo.png','logo');
    }
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->Port = 587;
	
	$config_email = 'bhalalajanvi9999@gmail.com';
	$mail->Username = $config_email;
	$mail->Password = 'janvi15399';
	
	$mail->setFrom($config_email,' NoteMarket Place');
	
	$mail->addAddress($senderMail,$senderName);
	$mail->addReplyTo($config_email,'NoteMarket Place');
	
	$mail->IsHTML(true);
	
	$mail->Subject = $txtSubject;
	$mail->Body = $txtBody;
	$mail->AltBody = $txtAltBody;
	$mail->send();
	return true;
	
	
	
	
}
catch(Exception $e){
	return false;
	
}
}

?>