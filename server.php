<?php

	header('Content-type: text/html; charset=utf-8');
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

   
    $headers = "From: Администратор сайта <admin@burger.com>\r\n".
    "MIME-Version: 1.0" . "\r\n" .
    "Content-type: text/html; charset=UTF-8" . "\r\n";
    $mail = mail('daniil_nikitas@mail.ru', 'Заказ', $mail_message, $headers);
   	if($mail) {
   		echo 'done';
   	} else {
   		echo 'error';
   	}

?>