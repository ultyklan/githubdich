<?php
require_once '../connection/connect.php';
require_once '../connection/variables.php';

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
    <div class="middle">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>

                        <th scope="col">Текст</th>
                        <th scope="col">Действие</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while ($vars = mysqli_fetch_assoc($select_reasons_reason)) {
                    ?>
                        <tr id=<?php echo $vars["id"];?>>
                            <th scope="row"><?php echo $vars["id"]; ?></th>

                            <td><?php echo $vars["value"]; ?></td>
                            <td class="buttd">
                                <div class="dropdown">
                                    <button type="button" class="dropbtn">Действие</button>
                                    <div class="dropdown-content">
                                        <a href="includes_reasons/edit.php?id=<?php echo $vars["id"];?>">Изменить</a>
                                        <a  onclick="del(<?php echo $vars['id']; ?>,'select_reasons',)" id="del" >Удалить</a>
                                        
                                        </ul>
                                    </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
             
            </table>


            <div class="form-add">

            <form action="<?php echo "includes_reasons/add-variable.php"?>"id="sub"method="POST" enctype="multipart/form-data">
                    <div class="add_title">
                        <h3>Добавить причину</h3>
                    </div>

                    <div class="valuev_in" id="text-form">
                        <label for="text" class="form-label">Содержимое</label>
                        <input type="text" name="value" class="form-control" id="text">
                    </div>

                    <div class="save">
                        <button type="submit" class="slide_from_left">Сохранить</button>
                    </div>

                </form>
                <script src="scripts/ajax-add-delete.js"></script>
            </div>
        </div>





</body>

</html>