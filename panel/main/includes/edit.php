
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
        <div class="title-center">
        <div class="title">
            <div class="btn-back"><a href="../index.php">Back></a></div>
           <div class="edit-text"> Редактирование</div> 
        </div>
        </div>
            <div class="form-edit">
        <form method="post" action="save-variable.php" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $var_main["id"];?>" name="id">
        <div class="inp-namevar">
            <label >Имя переменной</label>
            
            <div class="namevar1">
            <input class="namevar" name="title" value="<?php echo $var_main["title"];?>" type="text">
            </div>
        </div>
        <div class="inp-type">
            <label class="form-label">Тип Значения</label>
            <div class="select-inp">
            <select name="type">
                <option value="1" selected> Текст</option>
                <option value="2"> Изображение</option>
            </select>
            </div>
        </div>
         <div class="inp-value">
             <label class="text-on-horizon">Содержимое</label>
             <input class="valuev" type="text" name="value" value="<?php echo $var_main["value"];?>" id="text">
         </div>
         <div class="inp-image">
         
            <label for="image" class="form-label" >Изображение</label>
            <div class="file"><input type="file" name="image"  id="image"></div>
        </div>
        
         <div class="btn-sub">
            <div class="bt-sub-center"><button type="submit" class="slide_from_left">Сохранить</button></div>
        </div>
         </form>
        
    </div>
    
</body>
</html>