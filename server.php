<?php 
header('Content-type: text/html; charset=utf-8');
	$name = $_GET['user-name'];
	$phone = $_GET['user-phone'];
	$street = $_GET['user-street'];
	$house = $_GET['user-house'];
	$houseBlock = $_GET['user-houseBlock'];
	$apartament = $_GET['user-apartment'];
	$floor = $_GET['user-floor'];
	$message = $_GET['user-message'];

	$disturb = $_GET['dont-disturb']; // 1 или null 
    $disturb = isset($disturb) ? 'НЕТ' : 'ДА'; 

	$mail_message = '
	<html>
	  <head>
	  	<title>Заявка</title>
	  </head>
	  <body>
	  	<h2>Заказ</h2>
	  	<ul>
	  		<li>Имя: ' . $name . '</li>
	  		<li>Номер телефона: ' . $phone . '</li>
	  		<li>Улица: ' . $street . '</li>
	  		<li>Дом: ' . $house . '</li>
	  		<li>Корпус: ' . $houseBlock . '</li>
	  		<li>Квартира: ' . $apartament . '</li>
	  		<li>Этаж: ' . $floor . '</li>
	  		<li>Сообщение: ' . $message . '</li>
	  	</ul>
	  </body>
	</html>
	';

   
   
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'nikitas.danya@yandex.ru';                 // SMTP username
$mail->Password = '31081998d';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('nikitas.danya@yandex.ru', 'Daniil Nikitas');
$mail->addAddress('vip.kolovrat.98@mail.ru', 'Joe User');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Burger';
$mail->Body    = $mail_message;
$mail->AltBody = 'Это сообщение в формате plain text';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo 'Все хорошо, письмо улетело';
}

?>