$("#registration").on("submit",

function send(event)
{ 
    let url = $(this).attr("action");
    console.log($(this).serialize())
    event.preventDefault();
    let form=new FormData(this)
    $.ajax({
        type: "POST",
        url: url,
        dataType: "json",
        contentType: false,
        processData: false,
        cache: false,
        data: form,
        beforeSend: function() {
            $("#preloader").show();
        },
        success: function (data)
            {
            $("#preloader").hide();
            $('.error_text').remove();
            if (data['error5']){
                var error='Не удалось отправить подтвержение на ваш email'
            }
            else{
                if(data['success']){
                    location='index.php';
                    }
                    
                    else{
                        $('error_text').remove();
                         if(data['error0'])
                         {
                            var error='Логин не может быть короче 4 символов';
                         }
                        if(data['error1'])
                        {
                            var error='Пароль слишком короткий';
                        }
                        if(data['error2'])
                        {
                            var error='Такой логин уже существует';
                        }
                        if(data['error3'])
                        {
                            var error='Введенные пароли не совпадают';
                        }
                        if(data['error4'])
                        {
                            var error='Введите пароль';
                        }
                        let row=`<div id="error_text" class="error_text"> <label class="error_text_text">${error}</label></div>`
                                $("#error").append(row);

                        
                    }
                

                }        
        
            },
        error: function () {
        console.log("ашибачька");
        },
    });
    

}
)