<?php
require_once "../../connection/connect.php";
$id = $_GET["id"];
$status =$_POST["status"];
var_dump($id);
var_dump($status);
mysqli_query($connect, "UPDATE `callers` SET  `status` = '$status' WHERE `callers`.`id` = $id");
header('Location: /dip/panel/callers/callers.php');