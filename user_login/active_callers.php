<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
$cal=$_SESSION["user"]["login"];
require_once 'includes/connect.php';
require_once '../panel/connection/variables.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style_active_callers.css">
    <link rel="stylesheet" href="./styles/style-buttons.css">
    <link rel="stylesheet" href="./styles/style_menu.css">
    <link rel="stylesheet" href="./styles/stars.css">
    <link rel="stylesheet" href="styles/style_preloader.css">
    <title>Document</title>
</head>
<body>
<script src="scripts/preloader.js"></script> 
<?php include "menu/preloader.html"; ?>
<?php include "styles/stars.html"; ?>

    <div class="content">
             
        <div class="block">
            <?php include "menu/menu.html";?>
            <div class="active_callers">
                <div class="label_text">
                    <label for="">Ваши заявки</label>
                </div>
               
             

                <div class="callers_group">
                    
                    <div class="active_callers_block">

                    <?php
                    while($caller=mysqli_fetch_assoc($callers)){
                    ?>
                        <div class="active_callers_content">
                            <div class="status_caller">
                                <label for="" class="label_status" >Статус</label>
                                <img src="img/image_active_callers/<?php echo $caller["status"];?>.svg" id="image">
                                <script src="scripts/image_status.js"></script>
                            </div>
                            <div class="information_caller">
                                <div class="first">
                                    <label for="" class="information" >Номер заявки: <?php echo $caller["id"]; ?></label>
                                </div>
                                <div>
                                    <label for="" class="information" >Номер телефона: <?php echo $caller["phone"]; ?></label>
                                </div>
                                <div class="">
                                    <label for="" class="information" >Адрес: <?php echo $caller["address"]; ?></label>
                                </div>
                                <div>
                                    <label for="" class="information" >Назначенная дата: <?php echo $caller["date"]; ?></label>
                                </div>
                                <div>
                                    <label for="" class="information" >Выбранная причина: <?php echo $caller["reason"]; ?></label>
                                </div>
                                
                            </div>
                            <div class="rewiew_caller">
                                <div class="central_button">
                                <button type="button" class="slide_from_left"onclick="openForm(<?php echo $caller['id'];?>)" >Оставить отзыв</button>
                                </div>
                            </div>


                            <div class="form-modal" style="display:none;" id="<?php echo $caller['id']; ?>"> 
                                <div class="form-popup" >
                                    <form action="includes/send_review.php?id=<?php echo $caller['id']; ?>" method="POST" enctype="multipart/form-data" class="form-container">
                                        <div class="review_text">
                                            <label class="rewiev_label">Отзыв о заявке</label>
                                        </div>
                                        <div class="number_review">
                                            <label>Заявка номер: </label>
                                            <label name="id_caller"><?php echo $caller["id"];?></label>
                                        </div>
                                        <div class="status_review">
                                            <label>Статус заявки:</label>
                                            <img src="img/image_active_callers/<?php echo $caller["status"];?>.svg" id="image">
                                        </div>

                                        <div class="positive_review">
                                            <label class="text_positive_review" for="">Расскажите что понравилось:</label>
                                            <textarea name="positive_text"class="review_input"  id="" cols="30" rows="10"></textarea>
                                           

                                        </div>
                                        <div class="negative_review">
                                            <label for="">Расскажите что не понравилось:</label>
                                            <textarea name="negative_text"class="review_input" id="" cols="30" rows="10"></textarea>

                                        </div>
                                        <div class="button_group">
                                            <button type="button" class="slide_from_left cancel" onclick="closeForm(<?php echo $caller['id']; ?>)">Отменить</button>
                                            <button type="submit" class="slide_from_left sub" >Отправить</button>
                                        </div>
                                       
                                    </form>
                                </div>
                            </div>

                        </div>
                    <?php } ?>
                        
                            <script src="scripts/popup_callers.js"></script>

                    </div>

                </div>

            </div>

        </div>
        
    </div>
        




</body>
</html>