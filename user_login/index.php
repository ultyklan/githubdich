<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="./styles/stars.css">
    <link rel="stylesheet" href="./styles/style_login.css">
    <link rel="stylesheet" href="./styles/style-buttons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,100;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style_preloader.css">
    
</head>
<body>
<script src="scripts/preloader.js"></script> 
<?php include "menu/preloader.html"; ?>

<?php include "styles/stars.html"; ?>
<form action="<?php echo "includes/sighin.php"?>" id="sighin" method="POST" enctype="multipart/form-data">
        <div class="content">
            <div class="block_form" id="block_form">
                <div class="logo">
                    <div class="logo_image"> <img src="img/image/logo.svg" alt="ворона"></div>
                </div>
                <div class="hello">
                    <div class="label_hello">Welcome!</div>
                    </div>
                <div class="user_login">
                    <!--<div class="label_login">Логин</div>-->
                    <div class="input_login"><input class="input-login" placeholder="Логин" type="text" id="login" name="login"> </div>
                </div>
                <div class="user_pass">
                <!--<div class="label_pass">Пароль</div>--> 
                    <div class="input_pass"><input class="input-pass" placeholder="Пароль" type="password" id="password" name="password"> </div>
                </div>
                <div class="button_enter">
                    <button type="submit" class="slide_from_left">Войти</button>
                </div>
                <div class="div_create">
                    <div class="label_create1">
                        <label>Нет аккаунта?</label>
                    </div>
                    <div class="label_create">
                    <a href="registration.php">Зарегистрироваться!</a>
                    </div>
                    

                </div>
                   
            
                          <div class="error" id="error">

                          </div>
                           
                       
            </div>

            <script src="scripts/ajax/sighin.js"></script>   
        </div>


    </form>


    
</body>
</html>