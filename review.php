<?php
 require_once 'panel/connection/connect.php';
 require_once 'panel/connection/variables.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/fonts.css">
	<link rel="stylesheet" href="styles/reset.css">
	<link rel="stylesheet" href="styles/style_review.css">
</head>
<body>
    <header class="header" data-aos="fade-down" data-aos-delay="1200">
        <div class="container">
            <div class="header__content">
                <a href="/dip/index.php" class="header__logo">
                    <div class="header__logo_img"><img src="img/form/vk.svg" alt="">
                    </div>
                    <div class="header__logo_text">ЭлектроКар</div>
                </a>
                <div class="header__right">
                    <div class="header__right_social">
                        <a href="#" class="vk">
                        <img src="img/form/vk_social.svg" alt="">

                        </a>

                        <a href="#" class="whatsapp">
                        <img src="img/form/whatsapp.svg" alt="">
                        </a>
                        <a href="user_login/profile.php">
                        <div class="button_login">
                        <button class="btn_login"></button>
                        
                        </div>	
                        </a>

                    
                    </div>

                    <div class="header__right_call">
                        <div class="header__right_phone"><a href="tel:89023992929">+7-902-399-29-29</a></div>
                        <div onclick="$('html, body').stop().animate({scrollTop : $('#question-form').offset().top}, 1000);" class="header__right_btn"><span>Перезвонить вам?</span></div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="titlemain">
        <div class="container">
            <div class="block_review">
                <?php
                while($reviews=mysqli_fetch_assoc($review)){
                ?>
                <div class="review">
                    <div class="personal_info">
                        <div class="image">
                            <div class="logo_image">
                                <img class="image_profile" src="user_login/<?php echo $reviews["photo"]; ?>" alt="ворона">
                            </div>
                        </div>
                        <div class="name">
                            <label class="name_text" for=""><?php echo $reviews["name"]; ?></label>
                        </div>

                    </div>
                    <div class="review_block">
                        <div class="review_positive">
                            <label class="title_text">Что понравилось:</label><br><br>
                            <label class="positive_text" for=""><?php echo $reviews["positive_text"]; ?></label>
                        </div>
                        <div class="review_negative">
                            <label class="title_text">Что не понравилось:</label><br><br>
                            <label class="positive_text" for=""><?php echo $reviews["negativa_text"]; ?></label>
                        </div>
                    </div>
                </div>
                <?php } ?>


            </div>
        </div>
    </div>
        



</body>
</html>