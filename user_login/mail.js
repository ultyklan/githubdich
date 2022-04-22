

function send(event, php){
    console.log("Отправка запроса");
    event.preventDefault ? event.preventDefault() : event.returnValue = false;
    var req = new XMLHttpRequest();
    req.open('POST', php, true);
    req.onloadstart = function() {
        $("#preloader").show();
    }
    req.onload = function() {
        $("#preloader").hide();
        if (req.status >= 200 && req.status < 400) {
            json = JSON.parse(this.response);
            console.log(json);
            
            if (json.result == "success") {
                let row=`<div class="error_text"> <label class="error_text_text">Заявка успешно отправлена</label></div>`
                                $("#error").append(row);
            } else {
                alert("Ошибка. Попробуйте позже");
            }
        } else {alert("Ошибка сервера. Тут мы бессильны ");}}; 
    req.onerror = function()
    {alert("Ошибка отправки запроса");};
    req.send(new FormData(event.target));
    }



    