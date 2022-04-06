<?php
require_once "../../connection/connect.php";

$id=$_POST["id"];

$value=$_POST["value"];

mysqli_query($connect,"UPDATE `select_reasons` SET `value` = '$value' WHERE `select_reasons`.`id` = $id;");

mysqli_close($connect);
header('Location: /dip/panel/reasons/reasons.php');