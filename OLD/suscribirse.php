<?php

$idioma = (isset($_POST['idioma'])) ? $_POST['idioma'] : 'ES';
if($idioma == 'EN'){
    define(__SUCCESS_MESSAGE__, "Your message has been sent.");
    define(__ERROR_MESSAGE__, "Error, your message can not be sent.");
    define(__MESSAGE_EMPTY_FILDS__, "Please fill out all fields.");
}elseif($idioma == 'PT'){
    define(__SUCCESS_MESSAGE__, "Sua mensagem foi enviada.");
    define(__ERROR_MESSAGE__, "Erro, sua mensagem não pode ser enviada.");
    define(__MESSAGE_EMPTY_FILDS__, "Preencha os campos necessários.");
}else{
    define(__SUCCESS_MESSAGE__, "Su mensaje ha sido enviado.");
    define(__ERROR_MESSAGE__, "Error, su mensaje no se puedo enviar.");
    define(__MESSAGE_EMPTY_FILDS__, "Complete los campos necesarios.");
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'global/lib/Exception.php';
require 'global/lib/PHPMailer.php';
require 'global/lib/SMTP.php';

$email = $_POST['email'];


$body = '<html>
        <head>
          <title>Suscripcion</title>
        </head>
        <body>
          <table style="width: 500px; font-family: arial; font-size: 14px;" border="1">
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">Email:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $email .'</td>
            </tr>
          </table>
        </body>
        </html>
        ';


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
$mail->Subject = 'Suscripcion a Ker Hoteles';
$mail->Body   = $body;


$mail->CharSet = 'UTF-8';

 //Get post data
if(!empty($_POST['email'])){
       if(!$mail->send()) {
            die(json_encode(array('mailSent' => false, 'message' => __ERROR_MESSAGE__,'error'=>$e->getMessage())));

    } else {
        die(json_encode(array('mailSent' => true, 'message' => __SUCCESS_MESSAGE__)));
    }
} else {
    echo json_encode(array('mailSent' => false, 'message' => __MESSAGE_EMPTY_FILDS__));
}

