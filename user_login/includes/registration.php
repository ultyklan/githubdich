<?php
require_once 'connect.php';
session_start();
// Файлы phpmailer
require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';
require '../phpmailer/Exception.php';


$name =$_REQUEST['name'];
$login =$_REQUEST['login'];
$email =$_REQUEST['email'];
$password =$_REQUEST['password'];
$address =$_REQUEST['address'];
$password_confirm =$_REQUEST['password_confirm'];
$hash= md5($login.time());
$response=array();
$check = "SELECT * FROM users WHERE login='$login' ";
$result= mysqli_query($connect,$check) or die(mysqli_error($connect));
$count=mysqli_num_rows($result);





if(strlen($login)<4)
{
    $response['error0']='Логин не может быть короче 4 символов';
} 
else {
        if($count!=0){
            $response['error2']='Такой логин уже существует';
        }
        else{ 
                if (strlen($password)<6)
                {
                    $response['error1']='Пароль слишком короткий';
                    
                } 
                    else{
                            if($password!=null){
                                if($password===$password_confirm){
                                    
                                    $path='upload/'.$_FILES['image']['name'];
                                move_uploaded_file($_FILES['image']['tmp_name'],'../'.$path);
                                    $response['success']='1';
                                    
                                   mysqli_query($connect,"INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`, `photo`, `address`,`hash`,`email_confirm`) 
                                    VALUES (NULL, '$name', '$login', '$email', '$password', '$path', '$address','$hash','0')");
                                    
                                    
                                                                            
                                        $title = "Подтверждение регистрации";
                                        $body = "
                                        <h2>Подтвердите email указанный на Electrokar</h2></br>
                                        <h2>Привет $name !</h2>
                                        <p>Чтобы подтвердить ваш email перейдите по ссылке: http://localhost:8888/dip/user_login/includes/confirm_email.php?hash=$hash</p> <br>


                                        ";


                                        $mail = new PHPMailer\PHPMailer\PHPMailer();

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
                                            $mail->setFrom('zpokostraviz@gmail.com', 'Electrokar'); // Адрес самой почты и имя отправител
                                            $mail->addAddress($email);  
                                            $mail->isHTML(true);
                                            $mail->Subject = $title;
                                            $mail->Body = $body;    

                                        if (!$mail->send()) {
                                            $response['error5']='Не удалось отправить подтвержение на ваш email ';
                                        }
                                        $response['error6']='Регистрация успешно завершена';

                                    }
                                else{
                                    $response['error3']='Введенные пароли не совпадают';
                                    
                                }
                            }
                            else{
                                $response['error4']='Введите пароль';
                                
                            }
                    }
            }
    }    
          
            echo json_encode($response);








            





?>

