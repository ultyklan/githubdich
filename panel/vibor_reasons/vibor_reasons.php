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
                        <th scope="col">Изображение</th>
                        <th scope="col">Заголовок</th>
                        <th scope="col">Контент</th>
                        <th scope="col">Действие</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($var = mysqli_fetch_assoc($variables_vibor_reasons)) {
                    ?>
                        <tr id=<?php echo $var["id"];?>>
                            <th scope="row"><?php echo $var["id"]; ?></th>
                            <td class="td-img"><img class="img-value" onerror="this.style.visibility='hidden'" src="<?php echo $var["image"]; ?>"/></td>
                            <td><?php echo $var["title"]; ?></td>
                            <td><?php echo $var["text"]; ?></td>
                            <td class="buttd">
                                <div class="dropdown">
                                    <button type="button" class="dropbtn">Действие</button>
                                    <div class="dropdown-content">
                                        <a href="includes_vibor_reasons/edit.php?id=<?php echo $var["id"]; ?>">Изменить</a>
                                        <a  onclick="del(<?php echo $var['id']; ?>,'vibor_reasons',)" id="del" >Удалить</a>
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

            <form action="<?php echo "includes_vibor_reasons/add-variable.php"?>"id="sub"method="POST" enctype="multipart/form-data">
                    <div class="add_title">
                        <h3>Добавить элемент</h3>
                    </div>

                    <div class="valuev_in" id="text-form">
                        <label for="text" class="form-label">Заголовок</label>
                        <input type="text" name="title" class="form-control" id="text">
                    </div>
                    <div class="valuev_in" id="text-form">
                        <label for="text" class="form-label">Контент</label>
                        <input type="text" name="text" class="form-control" id="text">
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