<?php
require_once 'connect.php';
session_start();



$login =$_REQUEST['login'];
$password =$_REQUEST['password'];
$response=array();
$log_in= mysqli_query($connect,"SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'");
if (strlen($login)<4)
{
    $response['error']='Логин короче 4 символов';
}
else{
      if (strlen($password)<6)
        {
            $response['error']='Пароль короче 6 символов'; 
        }
        else{

                if (mysqli_num_rows($log_in)>0){
                   
                    $user=mysqli_fetch_assoc($log_in);
                    $conf=$user['email_confirm'];
                    if ($conf=="0"){
                        $response['error']=' Подтвердите email';
                    }
                    else{
                        $response['success']='1';
                        $_SESSION['user'] = [
                        "id" => $user['id'],
                        "name" => $user['name'],
                        "login"=> $user['login'],
                        "photo" => $user['photo'],
                        "address" => $user['address'],
                        "email" => $user['email']
                        
                    
                        ];
                    }
            
               
                    
                
                //header('Location:../profile.php');


                }
                else{
                    $response['error']='Пользователя нема';
                // header('Location:../index.php');

                }
        }
    }



echo json_encode($response);
?>
