<?php
require_once '../../connection/connect.php';


$title=$_REQUEST["title"];
if($_REQUEST["type"]==1)
{
$value=$_REQUEST["value"];

if(
    mysqli_query($connect,"INSERT INTO `variables` (`id`, `title`, `value`) VALUES (NULL, '$title', '$value')")
)
{
    $mas = mysqli_query($connect, "SELECT * FROM `variables` WHERE `title`='".$title."' AND `value`='".$value."' ORDER BY id DESC LIMIT 1");
    $res = [];
    while($object = mysqli_fetch_assoc($mas)) {
        $res[] = $object;
    }


 echo json_encode($res);   
} else {
    echo json_encode("error");   
}

}



else
{ 
$path="uploads/".$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],'../../'.$path);

$value="../../panel/".$path;
if(mysqli_query($connect,"INSERT INTO `variables` (`id`, `title`, `value`) VALUES (NULL, '$title', '$value')"))
{
    $mas = mysqli_query($connect, "SELECT * FROM `variables` WHERE `title`='".$title."' AND `value`='".$value."' ORDER BY id DESC LIMIT 1");
    $res = [];
    while($object = mysqli_fetch_assoc($mas)) {
        $res[] = $object;
    }
    echo json_encode($res); 
}




}

// if (!$_REQUEST["ajax"]) header('Location: /dip/panel/main/index.php');