
<?php
require_once "../../connection/connect.php";
$id=$_GET["id"];
require_once "../../connection/variables.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../styles/style-buttons.css">
    <link rel="stylesheet" href="../../styles/style-edit.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,100;1,400&display=swap" rel="stylesheet">
</head>
<body>
<?php var_dump($id); ?>
        <div class="title-center">
        <div class="title">
            <div class="btn-back"><a href="../reasons.php">Back></a></div>
           <div class="edit-text"> Редактирование</div> 
        </div>
        </div>
            <div class="form-edit">
        <form method="post" action="save-variable.php" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $var_reasons["id"];?>" name="id">
        <div class="inp-namevar1">
            
        
         <div class="inp-value1">
             <label class="text-on-horizon">Содержимое</label>
             <input class="valuev" type="text" name="value" value="<?php echo $var_reasons["value"];?>" id="text">
         </div>
        
        
         <div class="btn-sub">
            <div class="bt-sub-center"><button type="submit" class="slide_from_left">Сохранить</button></div>
        </div>
         </form>
        
    </div>
    
</body>
</html>