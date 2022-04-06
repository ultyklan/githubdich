$(".address").suggestions({
    token: "7fb334ed6eba11bab362baea2dd5f54de1c5a49f",
    type: "ADDRESS",
    /* Вызывается, когда пользователь выбирает одну из подсказок */
    onSelect: function (suggestion) {
        console.log(suggestion);
    }
});