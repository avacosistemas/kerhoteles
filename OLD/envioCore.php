<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

/* ==========================  Define variables ========================== */


#Success message
define('__SUCCESS_MESSAGE__', "Su mensaje ha sido enviado.");

#Error message
define('__ERROR_MESSAGE__', "Error, su mensaje no se puedo enviar.");

#Messege when one or more fields are empty
define('__MESSAGE_EMPTY_FILDS__', "Complete los campos necesarios.");

/* ========================  End Define variables ======================== */

/* ==========================  MAILGUN DATA ========================== */
define('MAILGUN_DOMAIN','mailing.kerhoteles.com.ar');
define('MAILGUN_KEY','key-79rtmyxi0hahmv-ai5azrhyp7qh47ke2');
define('MAILGUN_FROM','noreply@kerhoteles.com.ar');
/* ==========================  End MAILGUN DATA ========================== */
/**
 * Send mail function
 * @deprecated a fin de usar mailgun por bloque del server sobre  esta funcion
 **/
function send_mail($to,$subject,$message,$email){
    require($_SERVER['DOCUMENT_ROOT'].'/phpmailer/phpmailer.class.php');
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'kerhoteles.com.ar';
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply@kerhoteles.com.ar';
    $mail->Password = '710c67m3';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('noreply@kerhoteles.com.ar');
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $message;
    if($mail->send()){
        echo json_encode(array('mailSent' => true, 'message' => __SUCCESS_MESSAGE__));
    } else {
        echo json_encode(array('mailSent' => false, 'message' => __ERROR_MESSAGE__));
    }
}

/**
 * Send email thought mailgun
 * @param $to
 * @param $subject
 * @param $htmlMessage
 * @param $plainMessage
 * @throws Exception
 */
function send_mail_mailgun($to,$subject,$htmlMessage,$plainMessage)
{

    try {
        //Your credentials
        $mg = new Mailgun(MAILGUN_KEY);
        //Customise the email - self explanatory
        $mg->sendMessage(MAILGUN_DOMAIN, array(
                'from' => MAILGUN_FROM,
                'to' => $to,
                'subject' => $subject,
                'html' => $htmlMessage,
                'text' => $plainMessage,
            )
        );
    }
    catch(Exception $e)
    {
        var_dump($e->getMessage());exit;
        throw  $e;
    }
}


//Check e-mail validation
function check_email($email){
    if(!@eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
        return false;
    } else {
        return true;
    }
}

//make the html body
function make_html($name,$apellido,$mail,$pais,$motivo,$comment,$hotel=null)
{
    $html=  '
		<html>
		<head>
		  <title>Mail de ' . $name . ' ' . $apellido . '</title>
		</head>
		<body>
		  <table style="width: 500px; font-family: arial; font-size: 14px;" border="1">
			<tr style="height: 32px;">
			  <th align="right" style="width:150px; padding-right:5px;">Nombre:</th>
			  <td align="left" style="padding-left:5px; line-height: 20px;">' . $name . '</td>
			</tr>
			<tr style="height: 32px;">
			  <th align="right" style="width:150px; padding-right:5px;">Apellido:</th>
			  <td align="left" style="padding-left:5px; line-height: 20px;">' . $apellido . '</td>
			</tr>
			<tr style="height: 32px;">
			  <th align="right" style="width:150px; padding-right:5px;">E-mail:</th>
			  <td align="left" style="padding-left:5px; line-height: 20px;">' . $mail . '</td>
			</tr>
			<tr style="height: 32px;">
			  <th align="right" style="width:150px; padding-right:5px;">Pais:</th>
			  <td align="left" style="padding-left:5px; line-height: 20px;">' . $pais . '</td>
			</tr>';
        if(isset($hotel))
        {
    		$html.= '<tr style="height: 32px;">
    		  <th align="right" style="width:150px; padding-right:5px;">Hotel:</th>
    		  <td align="left" style="padding-left:5px; line-height: 20px;">' . $hotel . '</td>
    		</tr>';
        }
		$html.= '<tr style="height: 32px;">
		  <th align="right" style="width:150px; padding-right:5px;">Motivo:</th>
		  <td align="left" style="padding-left:5px; line-height: 20px;">' . $motivo . '</td>
		</tr>
		<tr style="height: 32px;">
		  <th align="right" style="width:150px; padding-right:5px;">Mensaje:</th>
		  <td align="left" style="padding-left:5px; line-height: 20px;">' . $comment . '</td>
		</tr>
	  </table>
	</body>
	</html>';
    return $html;
}
//make the plain body
function make_plain($name,$apellido,$mail,$pais,$motivo,$comment,$hotel=null)
{

    $plainText = 'Nombre:' . $name . "\n";
    $plainText .= 'Apellido:' . $apellido . "\n";
    $plainText .= 'E-mail:' . $mail . "\n";
    $plainText .= 'Pais:' . $pais . "\n";
    if(isset($hotel)){
        $plainText .= 'Hotel:' . $hotel . "\n";
    }
    $plainText .= 'Motivo:' . $motivo . "\n";
    $plainText .= 'Mensaje:' . $comment . "\n";
    return  $plainText;
}

//Get post data
if(
    !empty($_POST['name-field']) &&
    !empty($_POST['apellido-field']) &&
    !empty($_POST['email-field']) &&
    !empty($_POST['pais-field']) &&
    //!empty($_POST['hotel-field']) &&
    !empty($_POST['motivo-field']) &&
    !empty($_POST['message-field']
)) {
    $name = $_POST['name-field'];
    $apellido = $_POST['apellido-field'];
    $mail = $_POST['email-field'];
    $pais = $_POST['pais-field'];
    $hotel = (isset($hotelField)) ?  $hotelField : null;
    $motivo = $_POST['motivo-field'];
    $comment = $_POST['message-field'];

    //Send Mail
    $to = $hotel;
    $htmlText =make_html($name,$apellido,$mail,$pais,$motivo,$comment,$hotel);
    $plainText = make_plain($name,$apellido,$mail,$pais,$motivo,$comment,$hotel);
    //$headers  = 'MIME-Version: 1.0' . "\r\n";
    //$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    //$headers .= 'From: ' . $mail . "\r\n";
    //send_mail($to,$subject,$message,$mail);
    try {
        send_mail_mailgun($to, __SUBJECT__, $htmlText, $plainText);
        die(json_encode(array('mailSent' => true, 'message' => __SUCCESS_MESSAGE__)));
    } catch (Exception $e) {
        die(json_encode(array('mailSent' => false, 'message' => __ERROR_MESSAGE__)));
    }
}
else
{
    die(json_encode(array('mailSent' => false, 'message' => __MESSAGE_EMPTY_FILDS__)));
}

?>
