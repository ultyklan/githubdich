<?php
require_once 'connect.php';
session_start();



$name =$_REQUEST['name'];
$login =$_REQUEST['login'];
$email =$_REQUEST['email'];
$password =$_REQUEST['password'];
$address =$_REQUEST['address'];
$password_confirm =$_REQUEST['password_confirm'];
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
                                    
                                   mysqli_query($connect,"INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`, `photo`, `address`) 
                                    VALUES (NULL, '$name', '$login', '$email', '$password', '$path', '$address')");
                                    
                                    
                                    


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

