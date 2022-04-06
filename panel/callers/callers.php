<?php
require_once '../connection/connect.php';
require '../connection/variables.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel</title>
    <link rel="stylesheet" href="../styles/style-buttons.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,100;1,400&display=swap" rel="stylesheet">
</head>

<body>


    <?php include "../header/header.html"; ?>
    <?php
         while ($vara=mysqli_fetch_assoc($status)){
                $col[]=$vara["name"];
                }
                                          
    ?>
    
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>

                        <th scope="col">Логин</th>
                        <th scope="col">Информация о заявке</th>
                        <th scope="col">Статус</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    while ($vars = mysqli_fetch_assoc($callersv)) {
                    ?>
                        <tr id=<?php echo $vars["id"];?>>
                            <th scope="row"><?php echo $vars["id"]; ?></th>
                            <th scope="row"><?php echo $vars["name_user"]; ?></th>
                            <td>Номер телефона: <?php echo $vars["phone"]; ?></br>
                                Адрес: <?php echo $vars["address"]; ?></br>
                                Дата: <?php echo $vars["date"]; ?></br>
                                Причина: <?php echo $vars["reason"];?></br>
                                Статус: <?php echo $vars["status"]; ?>
                            </td>
                            <td class="">
                        <form action="includes/save.php?id=<?php echo $vars["id"];?>" method="post">
                            <select name="status" class="stat"> 
                                    <option value="Не выбрано">Не выбрано</option> 
                                    <option value=<?php echo $col[0]; ?>><?php echo $col[0]; ?></option>
                                    <option value=<?php echo $col[1]; ?>><?php echo $col[1]; ?></option>
                                    <option value=<?php echo $col[2]; ?>><?php echo $col[2]; ?></option>
                                </select>
                            
                            </td>
                            <td class="buttd">       
                                <button type="submit" >Сохранить</button>                
                            </td>
                        </form>
                        </tr>
                    <?php
                    }
                    
                    ?>

                </tbody>
                
             
            </table>


            
        </div>





</body>

</html>