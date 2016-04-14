

<?php
function SendMail( $ToEmail, $MessageHTML, $MessageTEXT ) {
  require_once ( 'PHPMailer-master/class.phpmailer.php' ); // Add the path as appropriate
  require_once('PHPMailer-master/class.smtp.php');
 

  $Mail = new PHPMailer();
  //$Mail->IsSMTP(); // Use SMTP
  $Mail->Host        = "smtp.gmail.com"; // Sets SMTP server
  $Mail->SMTPDebug   = 2; // 2 to enable SMTP debug information
  $Mail->SMTPSecure = 'ssl'; //<----------------- You missed this 
  $Mail->SMTPAuth    = TRUE; // enable SMTP authentication
  $Mail->SMTPSecure  = "tls"; //Secure conection
  $Mail->Port        = 587; // set the SMTP port
  $Mail->Username    = 'saganod2@gmail.com'; // SMTP account username
  $Mail->Password    = '122525dan'; // SMTP account password
  $Mail->Priority    = 1; // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
  $Mail->CharSet     = 'UTF-8';
  $Mail->Encoding    = '8bit';
  $Mail->Subject     = 'Test Email Using Gmail';
  $Mail->ContentType = 'text/html; charset=utf-8\r\n';
  $Mail->From        = 'saganod2@gmail.com';
  $Mail->FromName    = 'GMail Test';
  $Mail->WordWrap    = 900; // RFC 2822 Compliant for Max 998 characters per line

  $Mail->AddAddress( $ToEmail ); // To:
  $Mail->isHTML( TRUE );
  $Mail->Body    = $MessageHTML;
  $Mail->AltBody = $MessageTEXT;
  $Mail->Send();
  $Mail->SmtpClose();

  if ( $Mail->IsError() ) { // ADDED - This error checking was missing
  	echo "Mailer Error: " . $Mail->ErrorInfo;
    return FALSE;
  }
  else {
    return TRUE;
  }
}

$ToEmail = 'saganod2@gmail.com';
$ToName  = 'Dan Saganome';

$Send = SendMail( $ToEmail, "This is test", "This is a test message" );
if ( $Send ) {
  echo "<h2> Sent OK</h2>";
}
else {
  echo "<h2> ERROR</h2>";
}

die;



?>






<?php
/*
require_once('PHPMailer-master/class.phpmailer.php');
require_once('PHPMailer-master/class.smtp.php');


$mail = new PHPMailer();
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->Username = "saganod2@gmail.com";
$mail->Password = "122525dan";

$mail->SetFrom('saganod2@gmail.com');
$mail->Subject = "A Transactional Email From Web App";
$mail->MsgHTML("This is the body");

$mail->AddAddress("x12danx@aol.com");
$mail->Subject = "Here is the subject";
$mail->Body    = "This is the HTML message body <b>in bold!</b>";

if($mail->Send()) {
  echo "Message sent!";
} else {
  echo "Mailer Error: " . $mail->ErrorInfo;
}
   
*/
?>
