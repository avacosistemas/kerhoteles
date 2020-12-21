<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$name = $_POST["name-field"];
$apellido = $_POST["apellido-field"];
$email = $_POST["email-field"];
$pais = $_POST["pais-field"];
$motivo = $_POST["motivo-field"];
$message = $_POST["message-field"];



$body = 'Nombre: '.$name.'<br>';
$body .= 'Apellido: '.$apellido.'<br>';
$body .= 'E-mail: '.$email.'<br>';
$body .= 'País: '.$pais.'<br>';
$body .= 'Motivo: '.$motivo.'<br>';
$body .= 'Mensaje: '.$message.'<br>';


$mail = new PHPMailer(true);

//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'envios.kerhoteles.com.ar';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'no-reply@envios.kerhoteles.com.ar';                     // SMTP username
$mail->Password   = 'Sdll0!24';      
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   
$mail->Port       = 25; 
$mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

$mail->From = 'no-reply@envios.kerhoteles.com.ar';
$mail->FromName = 'Ker Website';
$mail->addAddress('reservasrecoleta@kerhoteles.com.ar');
$mail->isHTML(true);
$mail->Subject = 'Nueva consulta desde la web · Ker ';
$mail->Body   = $body;


$mail->CharSet = 'UTF-8';

if(!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;

} else {
    echo 'success';
}