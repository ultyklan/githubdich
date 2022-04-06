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
    <title>panel</title>
</head>

<body>
    <?php include "../header/header.html"; ?>

    <div class="middle">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Название</th>
                        <th scope="col">Текст</th>
                        <th scope="col">Действие</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                   
                    while ($var = mysqli_fetch_assoc($variables_index)) {
                    
                        ?>
                                <tr  id=<?php echo $var["id"];?>>
                                    <th scope="row"><?php echo $var["id"];?></th>
                                    <td><?php echo $var["title"];?></td>
                                    <td class="td-img"><img class="img-value"  src="<?php echo $var["value"];?>" alt="<?php echo $var["value"];?>"></td>
                                    <td class="buttd">
                                        <div class="dropdown">
                                            <button type="button" class="dropbtn">Действие</button>
                                            <div class="dropdown-content">
                                                <a href="includes/edit.php?id=<?php echo $var["id"]; ?>&tabel=variables">Изменить</a>
                                                <a onclick="del(<?php echo $var['id']; ?>,'variables',)" id="del" >Удалить</a>
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

                <form action="<?php echo "includes/add-variable.php"?>"id="sub"method="POST" enctype="multipart/form-data">
                    <div class="add_title">
                        <h3>Добавить элемент</h3>
                    </div>
      

                    <div class="var-title">
                        <label for="var-title">Название</label>

                        <select name="title" id="var-title" class="select-items">
                            <option>image</option>
                            <option>city</option>
                            <option>problems1</option>
                        </select>
                    </div>
                    <div class="type">
                        <label for="data-type">Тип</label>
                        <select type="data-type" class="form-select" name="type">
                            <option value="1" selected>Текст</option>
                            <option value="2">Изображение</option>
                        </select>
                    </div>
                    <div class="valuev_in" id="text-form">
                        <label for="text" class="form-label">Содержимое</label>
                        <input type="text" name="value" class="form-control" id="text">
                    </div>
                    <div id="image-form">
                        <label for="image" class="form-label">Изображение</label>
                        <input type="file" name="image" class="form-control-file" id="image">
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