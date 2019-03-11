<?php 

namespace App\Http\Helper;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;

class Sendmail{

	public function sendmail($sender, $receiver,$name,$message,$reply,$subject){
		$mail = new PHPMailer;
		$mail->SMTPDebug = 2;
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->setFrom($sender, 'Renova8');
 		//To address and name
		 $mail->addAddress($receiver); 
         $mail->addReplyTo($reply, "{$name}");
         $mail->isHTML(true);
		 $mail->Subject = $subject;
         $mail->msgHTML($message);

		 $status = $mail->send();
		 

}

}

