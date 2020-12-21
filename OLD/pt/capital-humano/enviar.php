<?php 

	/* ==========================  Define variables ========================== */

	#Your e-mail address
	define("__TO__", "reservasrecoleta@kerhoteles.com.ar");

	#Message subject
	define("__SUBJECT__", "Capital Humano - Ker Hoteles");

	#Success message
	define('__SUCCESS_MESSAGE__', "Sua mensagem foi enviada.");

	#Error message 
	define('__ERROR_MESSAGE__', "Erro, sua mensagem não pode ser enviada.");

	#Messege when one or more fields are empty
	define('__MESSAGE_EMPTY_FILDS__', "Preencha os campos necessários.");

	/* ========================  End Define variables ======================== */	//Send mail function	
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
		$mail->setFrom($email);
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

	//Check e-mail validation
	function check_email($email){
		if(!@eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
			return false;
		} else {
			return true;
		}
	}

	//Get post data
	if(!empty($_POST['name-field']) and !empty($_POST['apellido-field']) and !empty($_POST['email-field']) 
	and !empty($_POST['pais-field']) and !empty($_POST['hotel-field']) and !empty($_POST['motivo-field']) and !empty($_POST['message-field'])){
		$name 	 = $_POST['name-field'];
		$apellido 	 = $_POST['apellido-field'];
		$mail 	 = $_POST['email-field'];
		$pais 	 = $_POST['pais-field'];
		$hotel 	 = $_POST['hotel-field'];
		$motivo 	 = $_POST['motivo-field'];
		$comment = $_POST['message-field'];

		//Send Mail
		$to = __TO__;
		$subject = __SUBJECT__;
		$message = '
		<html>
		<head>
		  <title>Mail de '.$name.' '.$apellido.'</title>
		</head>
		<body>
		  <table style="width: 500px; font-family: arial; font-size: 14px;" border="1">
			<tr style="height: 32px;">
			  <th align="right" style="width:150px; padding-right:5px;">Nombre:</th>
			  <td align="left" style="padding-left:5px; line-height: 20px;">'. $name .'</td>
			</tr>
			<tr style="height: 32px;">
			  <th align="right" style="width:150px; padding-right:5px;">Apellido:</th>
			  <td align="left" style="padding-left:5px; line-height: 20px;">'. $apellido .'</td>
			</tr>
			<tr style="height: 32px;">
			  <th align="right" style="width:150px; padding-right:5px;">E-mail:</th>
			  <td align="left" style="padding-left:5px; line-height: 20px;">'. $mail .'</td>
			</tr>
			<tr style="height: 32px;">
			  <th align="right" style="width:150px; padding-right:5px;">Pais:</th>
			  <td align="left" style="padding-left:5px; line-height: 20px;">'. $pais .'</td>
			</tr>
			<tr style="height: 32px;">
			  <th align="right" style="width:150px; padding-right:5px;">Hotel:</th>
			  <td align="left" style="padding-left:5px; line-height: 20px;">'. $hotel .'</td>
			</tr>
			<tr style="height: 32px;">
			  <th align="right" style="width:150px; padding-right:5px;">Motivo:</th>
			  <td align="left" style="padding-left:5px; line-height: 20px;">'. $motivo .'</td>
			</tr>
			<tr style="height: 32px;">
			  <th align="right" style="width:150px; padding-right:5px;">Mensaje:</th>
			  <td align="left" style="padding-left:5px; line-height: 20px;">'. $comment .'</td>
			</tr>
		  </table>
		</body>
		</html>
		';

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= 'From: ' . $mail . "\r\n";
		send_mail($to,$subject,$message,$mail);
	} else {
		echo json_encode(array('mailSent' => false, 'message' => __MESSAGE_EMPTY_FILDS__));
	}
 ?>