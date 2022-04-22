<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style_profile.css">
    <link rel="stylesheet" href="styles/stars.css">
    <link rel="stylesheet" href="styles/style-buttons.css">
    <link rel="stylesheet" href="./styles/style_menu.css">
    <link rel="stylesheet" href="styles/style_preloader.css">
    <title>Document</title>
</head>
<body>
<script src="scripts/preloader.js"></script> 
<?php include "menu/preloader.html"; ?>

<?php include "styles/stars.html"; ?>
    <form >
    <div class="content">
         
    <div class="block">
        
        <?php include "menu/menu.html"; ?>
            <div class="profile_inf">
            <div class="name_and_image">
              
                    <label class="image_input">
                        <img class="img_img" src="<?php echo $_SESSION['user']['photo']?>"onError="this.src='img/image/logo.svg'" >
                        
                    </label>
            
                    
                
                <div class="name">
                    <label class="inp_name" > <?php echo $_SESSION['user']['name'] ?></label>
                </div>

            </div>
            <div class="personal_inf">
                <div class="login_div">
                    <div class="image_div"> <img class="img" src="img/image/login.svg" alt=""></div>
                    <div class="input"><label class="inp" ><?php echo $_SESSION['user']['login'] ?></label></div>
                </div>

                <div class="login_div">
                    <div class="image_div"> <img class="img" src="img/image/mail.svg" alt=""></div>
                    <div class="input"><label class="inp" ><?php echo $_SESSION['user']['email'] ?></label></div>
                </div>
                <div class="login_div">
                    <div class="image_div"> <img class="img" src="img/image/home-address.svg" alt=""></div>
                    <div class="centralelem">
                    <div class="input"><label class="inp" ><?php echo $_SESSION['user']['address'] ?></label></div>
                    
                    </div>
                    
                  
                </div>
               
            </div>
            <div class="button">
                <button class="slide_from_left">куда то</button>
            </div>

           
        </div>
        </div>
    </div>
    </form>



  
</body>
</html>