<?php

require_once 'connect.php';
session_start();
$id_caller=$_REQUEST['id_caller'];
$positive=$_REQUEST['positive_text'];
$negative=$_REQUEST['negative_text'];
$name=$_SESSION['user']['name'];
$photo=$_SESSION['user']['photo'];
$response=array();

if(mysqli_num_rows(mysqli_query($connect,"SELECT * FROM `reviews` WHERE `id_caller`=$id_caller"))>0){
    $response['message']='Вы уже оставили отзыв об этой заявке';
}
else{
if($check=mysqli_query($connect,"INSERT INTO `reviews` (`id`, `name`, `photo`, `positive_text`, `negativa_text`, `id_caller`) VALUES (NULL, '$name', '$photo', '$positive', '$negative', '$id_caller');" ))$response['message']='Отзыв добавлен';
}
 echo json_encode($response);