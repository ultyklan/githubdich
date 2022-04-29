<?php
session_start();
require_once 'connect.php';
//вывод данных
$variables_index = mysqli_query($connect, "SELECT * FROM `variables`");
$select_reasons_reason = mysqli_query($connect, "SELECT * FROM `select_reasons`");
$variables_vibor_reasons = mysqli_query($connect, "SELECT * FROM `vibor_reasons`");
$callers = mysqli_query($connect, "SELECT * FROM `callers` WHERE `name_user`='$cal' ");
$callersv = mysqli_query($connect, "SELECT * FROM `callers`");
$status = mysqli_query($connect, "SELECT * FROM `status`");
$review = mysqli_query($connect, "SELECT * FROM `reviews`");

//редактирование
$var_reasons = mysqli_fetch_assoc(mysqli_query($connect, "SELECT*FROM `select_reasons` WHERE `id`=$id"));
$var_main = mysqli_fetch_assoc(mysqli_query($connect, "SELECT*FROM `variables` WHERE `id`=$id"));
$var_vibor_reasons = mysqli_fetch_assoc(mysqli_query($connect, "SELECT*FROM `vibor_reasons` WHERE `id`=$id"));
