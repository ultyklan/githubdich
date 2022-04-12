<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style_registration.css">
    <link rel="stylesheet" href="./styles/stars.css">
    <link rel="stylesheet" href="./styles/style-buttons.css">
    <link rel="stylesheet" href="styles/style_preloader.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@18.6.0/dist/css/suggestions.min.css" type="text/css"
		rel="stylesheet" />
	<script type="text/javascript"
		src="https://cdn.jsdelivr.net/npm/suggestions-jquery@18.6.0/dist/js/jquery.suggestions.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<script src="scripts/preloader.js"></script> 
<?php include "menu/preloader.html"; ?>
<form action="<?php echo "includes/registration.php"?>" id="registration" method="POST" enctype="multipart/form-data">
    <div class="content">
        <div class="block">
            <div class="name_and_image">
              
                    <label class="image_input">
                        <img class="img_img" src="img/image/1.png" alt="">
                        <input type="file" name="image" id="file" class="inp_image">
                    </label>
                   
                    
                
                <div class="name">
                    <input class="inp_name" name="name" placeholder="Имя профиля" type="text">
                </div>

            </div>
            <div class="personal_inf">
                <div class="login_div">
                    <div class="image_div"> <img class="img" src="img/image/login.svg" alt=""></div>
                    <div class="input"><input class="inp" name="login" type="text" placeholder="Логин"></div>
                </div>

                <div class="login_div">
                    <div class="image_div"> <img class="img" src="img/image/mail.svg" alt=""></div>
                    <div class="input"><input class="inp" name="email"type="email" placeholder="Email"></div>
                </div>
                <div class="address">
                    <div class="address_header">
                        <img class="img" src="img/image/mail.svg" alt="">
                    </div>
                 
                    <div class="address_position">
                     <div class="form_group">
                        <input class="form_input address" placeholder="Адрес" id="form-address" type="text" name="address">
                            </div>
                            <script src="scripts/address.js"></script>

                            </div>
    

                </div>
                <div class="login_div">
                    <div class="image_div"> <img class="img" src="img/image/password.svg" alt=""></div>
                    <div class="centralelem">
                    <div class="input"><input class="inp" name="password" type="password" placeholder="Пароль"></div>
                    <div class="input"><input class="inppass" name="password_confirm" type="password" placeholder="Повторите пароль"></div>
                    </div>
                  
                </div>
               
            </div>
            <div class="error" id="error">

            </div>
          
            <div class="button">
                <button type="submit"  class="slide_from_left">Зарегистрироваться</button>
        
            </div>
            
            <div class="button">
                <a href="index.php">
                <button type="button" class="slide_from_left">Назад</button>
                </a>
            </div>
           
            
        </div>
    </div>
    </form>

<script src="scripts/ajax/registration.js"></script>




  
</body>
</html>