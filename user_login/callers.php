<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
require_once 'includes/connect.php';
require_once '../panel/connection/variables.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style_preloader.css">
    <link rel="stylesheet" href="./styles/style_callers.css">
    <link rel="stylesheet" href="./styles/stars.css">
    <link rel="stylesheet" href="./styles/style-buttons.css">
    <link rel="stylesheet" href="./styles/style_menu.css">
    <link rel="stylesheet" href="./custom_select/custom_select_style.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>
    <script src="assets/datedropper/datedropper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/datedropper/datedropper.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@18.6.0/dist/css/suggestions.min.css" type="text/css"
		rel="stylesheet" />
	<script type="text/javascript"
		src="https://cdn.jsdelivr.net/npm/suggestions-jquery@18.6.0/dist/js/jquery.suggestions.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<script src="scripts/preloader.js"></script> 
<?php include "menu/preloader.html"; ?>

<?php include "styles/stars.html";?>
  
        <div class="content">
       


        <div class="block">
            <?php include "menu/menu.html"; ?>
        
             <div class="callers">
             <div class="logo">
                  <div class="logo_image"> <img  class ="logo_imaage_profile" src="<?php echo $_SESSION['user']['photo']?>" onError="this.src='img/image/logo.svg'"></div>
            </div>
            <form method="post" id="form" onsubmit="send(event, 'send.php')">

                    <div class="callers_add">
                        <div class="name">
                            <div class="label_name">
                                <label for="">Имя:</label>
                            </div>
                        
                            <div class="name_div">
                                <div class="name_echo">
                                    <label for="" class="name_echo_label"><?php echo $_SESSION['user']['login'] ?></label>
                                </div>
                            </div>
            

                        </div>

                        <div class="reason">
                            <div class="callers_header">
                                <label for=""class="callers_label_reasons">Причина</label>
                            </div>

                            <div class="callers_spisok"> 
                                <select name="reason" class="select_reasons"> 
                                    <option value="Не выбрано">Не выбрано</option> 
                                     
                                    <?php

                                    while ($var=mysqli_fetch_assoc($select_reasons_reason)){
                                            echo'
                                            
                                        <option value='.$var["value"].'>'.$var["value"].'</option>
                                        ';}
                                    ?>
                                    
                                </select>
                                
                            </div>
                        </div>
                        
                        <div class="phone">
                            <div class="phone_header">
                                <label for="">Номер телефона</label>
                            </div>
                            <div class="phone_input">
                                <input  value="" name="number" class="tel">	
                            </div>

                        </div>
                        
                        


                        <div class="address">
                            <div class="address_header">
                                <label for="">Адрес</label>
                            </div>
                        
                            <div class="address_position">
                                <div class="form_group">
                                    <input class="form_input address" placeholder="Адрес" value="<?php echo $_SESSION['user']['address'] ?>" id="form-address" type="text" name="address">
                                </div>
                                    <script src="scripts/address.js"></script>

                            </div>

                        </div>
                        <div class="date">
                            <div class="date_header">
                                <label for="">Дата</label>
                            </div>
                            <div class="date_input">
                                <input id="ddinput" class="date_input_input" type="text" name="date">	

                                    <script> $('#ddinput').dateDropper();</script>
                            </div>

                        </div>
                        <div class="error" id="error">
                        </div>
                        
                        <div class="button_enter">
                            <button type="submit" class="slide_from_left">Оформить</button>
                        </div>
            </form>
            
                           
              

        </div>

</div>

<script src="mail.js"> </script>





<script src="./scripts/date.js"></script>

<script src="scripts/js-inputmask.js"></script>
<script src="scripts/js-inputmask.min.js"></script>



</body>
</html>