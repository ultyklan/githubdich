<?php
require_once '../../connection/connect.php';
$data=[];
parse_str($_REQUEST["data"],$data);

$value = $data["value"];

if(mysqli_query($connect, "INSERT INTO `select_reasons` (`id`, `value`) VALUES (NULL, '$value');"))
{
    $mas = mysqli_query($connect, "SELECT * FROM `select_reasons` WHERE `value`='".$value."' ORDER BY id DESC LIMIT 1");
    $res = [];
    while($object = mysqli_fetch_assoc($mas)) {
        $res[] = $object;
    }
    echo json_encode($res); 

}
else {
    echo json_encode("ошибОчка");   
}
//mysqli_close($connect);


//header('Location: /dip/panel/reasons/reasons.php');
