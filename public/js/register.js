$(document).ready(function() {
    $("a.register").click(function(event) {
        event.preventDefault();
        $("#form-register").load("views/register.php");
    });

})



    $("#form-user").on("submit", function(e) {
        e.preventDefault();
        alert('hOLA');
        /*
        const formDate = new FormData(document.getElementById('form-user'));
        alert('Registrado');
        $('#loading').html('<div class="loading"><img width="120px" src="./public/images/load.gif" alt="loading" /><br/><p style="color: #f1f1f1">Un momento, por favor...</p></div>');
        $.ajax({
            url: "./moduls/registerUser.php",
            type: "POST",
            dataType: "html",
            data: formDate,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(res) {
            if(res == "success"){
                $('#loading').html(`<p style="color: #f1f1f1">${res}</p>`)
                //window.location.href = 'index.php'
            }else{
                $('#loading').html('<p style="color: #f1f1f1">Datos no encontrado</p>')
            }
        });
        */
    })