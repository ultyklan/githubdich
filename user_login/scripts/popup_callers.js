function openForm(e) {
    document.getElementById('text_area_positive').value ="";
    document.getElementById('text_area_negative').value ="";
    
    if(document.getElementById('error_text'))document.getElementById('error_text').remove();
    let pohui = e.parentNode.parentNode.parentNode;
    document.querySelector('#id_caller2').innerHTML = pohui.querySelector('#id_caller').innerHTML;
    document.querySelector('#id_caller1').value = pohui.querySelector('#id_caller').innerHTML;
    document.querySelector('#image_review').src=pohui.querySelector('#image_callers').getAttribute('src')
    document.querySelector('.form-modal').style.display = "flex";
   
    }

    function closeForm() {
        document.querySelector('.form-modal').style.display = "none";

    }
    $(document).ready(function(){
        var maxCount = 1000;
    
        $("#counter").html(maxCount);
        $("#counter1").html(maxCount);
    
        $("#text_area_positive").keyup(function() {
        var revText = this.value.length;
    
            if (this.value.length > maxCount)
                {
                this.value = this.value.substr(0, maxCount);
                }
            var cnt = (maxCount - revText);
            if(cnt <= 0){$("#counter1").html('0');}
            else {$("#counter1").html(cnt);}
    
        });
        $("#text_area_negative").keyup(function() {
            var revText = this.value.length;
        
                if (this.value.length > maxCount)
                    {
                    this.value = this.value.substr(0, maxCount);
                    }
                var cnt = (maxCount - revText);
                if(cnt <= 0){$("#counter").html('0');}
                else {$("#counter").html(cnt);}
        
            });
    });