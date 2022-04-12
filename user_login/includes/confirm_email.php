<?php 
require_once 'connect.php';
if ($_GET['hash']) {
    $hash = $_GET['hash'];

    if ($result = mysqli_query($connect, "SELECT `id`, `email_confirm` FROM `users` WHERE `hash`='" . $hash . "'")) {
        while( $row = mysqli_fetch_assoc($result) ) { 
            if ($row['email_confirm'] == 0) {
                mysqli_query($connect, "UPDATE `users` SET `email_confirm`=1 WHERE `id`=". $row['id'] );
                echo "Email подтверждён";
            } else {
                echo "Неудалось подтвердить email";
            }
        } 
    } else {
        echo "Учетная запись не найдена";
    }
} else {
    echo "Ошибка, попробуйте позже";
}