<?php
require_once "connection/connect.php";
$id = $_POST["id"];
$tabel =$_POST["variables"];
var_dump($id);
var_dump($tabel);




mysqli_query($connect, "DELETE FROM `$tabel` WHERE `$tabel`.`id` = $id");
mysqli_close($connect);
//header('Location: /dip/panel/reasons/reasons.php');
