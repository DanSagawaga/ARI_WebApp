<?php
  require_once ( 'PHPMailer-master/class.phpmailer.php' ); // Add the path as appropriate
  require_once('PHPMailer-master/class.smtp.php');
 
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "smtp.TCNJ.EDU"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "smtp.TCNJ.EDU"; // sets the SMTP server
$mail->Port       = 119;                    // set the SMTP port for the GMAIL server
$mail->Username   = "saganod1@tcnj.edu"; // SMTP account username
$mail->Password   = "122525Pass6";        // SMTP account password

$mail->SetFrom('saganod1@tcnj.edu', 'First Last');

$mail->Subject    = "PHPMailer Test Subject via smtp, basic with authentication";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML("body");

$address = "x12danx@aol.com";
$mail->AddAddress($address, "John Doe");


if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>