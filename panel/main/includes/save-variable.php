<?php
require_once "../../connection/connect.php";
$title = $_POST["title"];

$id = $_POST["id"];
if ($_POST["type"] == 1) {
    $value = $_POST["value"];

    mysqli_query($connect, "UPDATE `variables` SET  `title` = '$title', `value` = '$value' WHERE `variables`.`id` = $id");
} else {


    var_dump($_FILES);
    $path = "uploads/" . $_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"], '../' . $path);
    $value = "panel/" . $path;
    mysqli_query($connect, "UPDATE `variables` SET  `title` = '$title', `value` = '$value' WHERE `variables`.`id` = $id");
}





