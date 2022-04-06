<?php
require_once '../../connection/connect.php';

$title = $_REQUEST["title"];
$text = $_REQUEST["text"];


$path="uploads/".$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],'../../'.$path);
$image="../../panel/".$path;


if(
    mysqli_query($connect,"INSERT INTO `vibor_reasons` (`id`, `image`, `title`, `text`) VALUES (NULL, '$image', '$title', '$text');")
){
    $mas = mysqli_query($connect, "SELECT * FROM `vibor_reasons` WHERE `title`='".$title."' AND `text`='".$text."' ORDER BY id DESC LIMIT 1");
    $res = [];
    while($object = mysqli_fetch_assoc($mas)) {
        $res[] = $object;
    }
    echo json_encode($res);   
}else {
    echo json_encode("приветики");   
}



// header('Location: /dip/panel/vibor_reasons/vibor_reasons.php');