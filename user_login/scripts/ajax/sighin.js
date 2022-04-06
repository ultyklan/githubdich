
$("#sighin").on("submit",

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
        success: function (data)
            {   $('.error_text').remove();
                        if(data['success']){
                            location='profile.php';
                        }
                            else{
                                if(data['error_login']){
                                var error='Логин не может быть меньше 4 символов';
                                }

                                if(data['error_user']){
                                var error='Пользователя нема';
                                }
                                if(data['error_pass']){
                                var error='Пароль не может быть меньше 6 символов';
                                }
                                let row=`<div class="error_text"> <label class="error_text_text">${error}</label></div>`
                                $("#error").append(row);

                                }
        
            },
        error: function () {
        console.log("ашибачька");
        },
    });
    

}
)