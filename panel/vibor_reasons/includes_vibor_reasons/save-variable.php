<?php
require_once "../../connection/connect.php";
$title=$_POST["title"];
$text=$_POST["text"];
$id=$_POST["id"];
    
    var_dump($_FILES);
    $path="uploads/".$_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"],'../../'.$path);
    $image="../../panel/".$path;
    mysqli_query($connect," UPDATE `vibor_reasons` SET `image` = '$image', `title` = '$title', `text` = '$text' WHERE `vibor_reasons`.`id` = $id;");
    
 
header('Location: /dip/panel/vibor_reasons/vibor_reasons.php');







