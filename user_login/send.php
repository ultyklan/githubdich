<?php
require 'includes/connect.php';
session_start();
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$login =$_SESSION['user']['login'];
$name = $login;
$reasons = $_POST["reason"];
$number = $_POST['number'];
$address = $_POST['address'];
$date = $_POST['date'];
mysqli_query($connect, "INSERT INTO `callers` (`id`, `name_user`,`phone`,`address`,`date`,`reason`,`status`) VALUES (NULL,'$login','$number','$address','$date','$reasons','inprocess');");

$title = "Опа, сюда заявочка";
$body = "
<h2>Тебе заявочка котик</h2>
<b>Имя:</b> $name<br>
<b>Номер телефона:</b> $number<br>
<b>Адрес:</b> $address<br>
<b>Дата:</b> $date<br><br>
<b>Причина:</b> $reasons<br>

";


$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

   
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'zpokostraviz@gmail.com'; // Логин на почте
    $mail->Password   = 'Alo12345'; // Пароль на почте
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->setFrom('zpokostraviz@gmail.com', 'Хеллоу китти'); // Адрес самой почты и имя отправителя

    
    $mail->addAddress('ultyklan@gmail.com');  
   
   

$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} 
catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);