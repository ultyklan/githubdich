
$("#sub").on("submit",

    function send(event)
    { 
        let url = $(this).attr("action");
        console.log($(this).serialize())
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: url,
            dataType: "json",
            data: {data: $(this).serialize(), ajax: true},
            success: function (res) {
            console.log(res)

            let row = '<tr id='+res[0]['id']+'>\
                            <th scope="row">' + res[0]['id'] + '</th>\
                            <td>' + res[0]['value'] + '</td>\
                            <td class="buttd">\
                                <div class="dropdown">\
                                    <button type="button" class="dropbtn">Действие</button>\
                                    <div class="dropdown-content">\
                                        <a href="includes_reasons/edit.php?id='+res[0]['id']+'">Изменить</a>\
                                        <a  onclick="del('+ res[0]['id'] +',)" id="del" >Удалить</a>\
                                    </div>\
                                    </div>\
                            </td>\
                        </tr>';
                        $("table tbody").append(row)



            },
            error: function () {
            console.log("ашибачька");
            },
        });
        

    }
)
function del(id,variables) {
   
    $.ajax({
      url: '../delete-variable.php',
      type: 'POST',
      data: {'id' : id,
            'variables' : variables},
     
      success: function () {
            document.getElementById(id).remove();
        },
        error: function () {
            console.log('hey');
            },
    });
  }