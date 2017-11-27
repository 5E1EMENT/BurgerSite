<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

header('Content-Type: text/html; charset=utf-8');
	$name = $_POST['user-name'];
	$phone = $_POST['user-phone'];
	$street = $_POST['user-street'];
	$house = $_POST['user-house'];
	$houseBlock = $_POST['user-houseBlock'];
	$apartament = $_POST['user-apartment'];
	$floor = $_POST['user-floor'];
	$message = $_POST['user-message'];

	$disturb = $_POST['dont-disturb']; // 1 или null 
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

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'burger.github@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'Superburger18'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('burger.github@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('daniil_nikitas@mail.ru');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$headers = "From:  <burger.github@mail.ru>\r\n".
    "MIME-Version: 1.0" . "\r\n" .
    "Content-type: text/html; charset=UTF-8" . "\r\n";

$mail = mail('daniil_nikitas@mail.ru', 'Заказ', $mail_message, $headers);

	if($mail) {
   		echo 'done';
   		} else {
   		echo 'error';
   	}
?>