<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/includes/Exception.php';
require 'phpmailer/includes/PHPMailer.php';
require 'phpmailer/includes/SMTP.php';

//require_once('./phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer(true); //без (true)
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['phone'];
$problem = $_POST['problem'];
$date = $_POST['date'];
$address = $_POST['address'];

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';

$mail->SMTPAuth = true;
$mail->Username = 'zpokostraviz@gmail.com';
$mail->Password = 'Alo12345';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// $title = "<h1>Новая заявка на покос травы</h1>";
$nowdate = date("d.m.y H:i");
$nowdate2 = date("d.m.y");

$mail->setFrom('zpokostraviz@gmail.com', $name);
$mail->addAddress('ultyklan@gmail.com');
//$mail->addAddress('dimakukharev2002@yandex.ru');

$mail->isHTML(true);

$mail->Subject = ' Калуга заявка от ' . $nowdate;
$mail->Body = '<p><strong>Имя:</strong> ' . $name . '</p><p><strong>Телефон:</strong> ' . $phone . '</p><p><strong>Проблема:</strong> ' . $problem . '</p><p><strong>Адрес:</strong> ' . $address . '</p><p><strong>Желаемая дата:</strong> ' . $date . '</p>';
$mail->AltBody = 'Ничего не пришло :(';

if (!$mail->send()) {
	echo 'Не удалось отправить заявку';
}

?>
