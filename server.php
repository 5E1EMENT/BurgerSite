<?php 
$username= $_POST['user-name'];
$telephone= $_POST['user-phone'];
$street= $_POST['user-street'];
$house= $_POST['user-house'];
$houseBlock= $_POST['user-houseBlock'];
$apartment= $_POST['user-apartment'];
$floor= $_POST['user-floor'];
$message = $_POST['user-message'];

$cashoption = $_POST['cash-option'];
$payoption = $_POST['pay-option'];
$dontdisturb = $_POST['dont-disturb'];


require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$mail_message = '
	<html>
	  <head>
	  	<title>Заявка</title>
	  </head>
	  <body>
	  	<h2>Заказ</h2>
	  	<ul>
	  		<li>Имя: ' . $username . '</li>
	  		<li>Номер телефона: ' . $telephone . '</li>
	  		<li>Улица: ' . $street . '</li>
	  		<li>Дом: ' . $house . '</li>
	  		<li>Корпус: ' . $houseBlock . '</li>
	  		<li>Квартира: ' . $apartment . '</li>
	  		<li>Этаж: ' . $floor . '</li>
	  		<li>Сообщение: ' . $message . '</li>
            <hr>
            <li>Потребуется сдача: ' . $cashoption . '</li>
            <li>Оплата по карте: ' . $payoption . '</li>
            <li>Не перезванивать: ' . $dontdisturb . '</li>
	  	</ul>
	  </body>
	</html>
	';
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'burger.site@yandex.kz';                 // SMTP username
$mail->Password = '31081998d';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('burger.site@yandex.kz', 'Nikitas');
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
} 
?>