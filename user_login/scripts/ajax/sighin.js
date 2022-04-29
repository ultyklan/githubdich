
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
        beforeSend: function() {
            $("#preloader").show();
        },
        success: function (data)
            {   
                $("#preloader").hide();
                $('.error_text').remove();
            
                        if(data['success']){
                            location='profile.php';
                        }
                            else{
                              let message = data['error'];
                                let row=`<div class="error_text"> <label class="error_text_text">${message}</label></div>`
                                $("#error").append(row);

                                }
        
            },
        error: function () {
        console.log("ашибачька");
        },
    });
    

}
)