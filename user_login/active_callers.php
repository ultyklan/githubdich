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
                            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                            <link rel="stylesheet" href="./styles/style_active_callers.css">
                            <link rel="stylesheet" href="./styles/style-buttons.css">
                            <link rel="stylesheet" href="./styles/style_menu.css">
                            <link rel="stylesheet" href="./styles/stars.css">
                            <link rel="stylesheet" href="styles/style_preloader.css">
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
                                            if(mysqli_num_rows($callers)<=0){
                                            echo '<div class="col_callers"><label class="col_callers_text">Активные заявки отсутствуют</label></div>';
                                            }else{
                                            while($caller=mysqli_fetch_assoc($callers)){
                                                
                                            ?>
                                            <div class="active_callers_content">
                                                <div class="status_caller">
                                                    <label for="" class="label_status" >Статус</label>
                                                    <img src="img/image_active_callers/<?php echo $caller["status"];?>.svg" id="image_callers">
                                                    <script src="scripts/image_status.js"></script>
                                                </div>
                                                <div class="information_caller">
                                                    <div class="first">
                                                    <label for="" class="information">Номер заявки:</label>
                                                    <label for="" class="information" id="id_caller" ><?php echo $caller["id"]; ?></label>
                                                    </div>
                                                    <div class="information_div">
                                                        <label for="" class="information" >Номер телефона: <?php echo $caller["phone"]; ?></label>
                                                    </div>
                                                    <div class="information_div">
                                                        <label for="" class="information" >Адрес: <?php echo $caller["address"]; ?></label>
                                                    </div>
                                                    <div class="information_div">
                                                        <label for="" class="information" >Назначенная дата: <?php echo $caller["date"]; ?></label>
                                                    </div>
                                                    <div class="information_div">
                                                        <label for="" class="information" >Выбранная причина: <?php echo $caller["reason"]; ?></label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="rewiew_caller">
                                                    <div class="central_button">
                                                    <button type="button" class="slide_from_left" onclick="openForm(this)" >Оставить отзыв</button>
                                                    </div>
                                                </div>



                                                

                                            </div><?php }}; ?>
                                        

                                        </div>

                                    </div>

                                </div>

                            </div>
                            
                        </div>
                            <div class="form-modal" style="display:none;" id=""> 
                                <div class="form-popup" >
                                    <form action="includes/send_review.php" id="send_review" method="POST" enctype="multipart/form-data" class="form-container">
                                        <div class="review_text">
                                            <label class="rewiev_label">Отзыв о заявке</label>
                                        </div>
                                        <div class="number_review">
                                            <label>Заявка номер:&nbsp;</label>
                                            <input id="id_caller1" value="" class="kostil_inp" name="id_caller">
                                            <label name="id_caller" id="id_caller2"></label>
                                        </div>
                                        <div class="status_review">
                                            <label>Статус заявки:&nbsp;</label>
                                            <img src="" id="image_review">
                                        </div>

                                        <div class="positive_review">
                                            <label class="text_positive_review" for="">Расскажите что понравилось:</label>
                                            <textarea name="positive_text"class="review_input"  id="text_area_positive" maxLength="1000" cols="30" rows="10"></textarea>
                                            <div class="counter">Осталось символов: <span id="counter1"></span></div>

                                        </div>
                                        <div class="negative_review">
                                            <label for="">Расскажите что не понравилось:</label>
                                            <textarea name="negative_text"class="review_input" id="text_area_negative" maxLength="1000" cols="30" rows="10"></textarea>
                                            <div class="counter">Осталось символов: <span id="counter"></span></div>
                                        </div>
                                        <div class="button_group">
                                            <button type="button" class="slide_from_left cancel" onclick="closeForm()">Отменить</button>
                                            <button type="submit" class="slide_from_left sub" >Отправить</button>
                                        </div>
                                        <div class="error" id="error"></div>
                                       
                                    </form>
                                    
                                </div>
                            </div>
                            <script src="scripts/preloader.js"></script>
                            <script src="scripts/ajax/send_review.js"></script>
                            <script src="scripts/popup_callers.js"></script>



</body>
</html>