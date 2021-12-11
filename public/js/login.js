$(document).ready(function() {
    /* Verifica envio datos de Formulario Login*/

    $("#auth-login").on("submit", function(e) {
        e.preventDefault();
        const formDate = new FormData(document.getElementById('auth-login'));
        
        $('#loading').html('<div class="loading"><img width="120px" src="./public/images/load.gif" alt="loading" /><br/><p style="color: #f1f1f1">Un momento, por favor...</p></div>');
        $.ajax({
            url: "./moduls/autentication.php",
            type: "POST",
            dataType: "html",
            data: formDate,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(res) {
            if(res == "success"){
                window.location.href = 'index.php'
            }else{
                $('#loading').html('<p style="color: #f1f1f1">Datos no encontrado</p>')
            }
        });
        
    })
})