$(document).ready(function() {
    /* Verifica envio datos de Formulario Login*/

    $("#login-ssh").on("submit", function(e) {
        e.preventDefault();
        const formDate = new FormData(document.getElementById('login-ssh'));
        
        $('#create-ssh').html('<div style="text-align: center"><img width="120px" src="./public/images/load.gif" alt="loading" /><br/><p style="color: ##6c757d;font-family: Poppins">Creando su cuenta, espere, por favor...</p></div>');
        $.ajax({
            url: "libs/save.php",
            type: "POST",
            dataType: "html",
            data: formDate,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(res) {
            const data = JSON.parse(res);
            console.log(data.success)
            if(data.success){

                const html = `
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p>Payload: <b>
                    </br>GET shi://host.com HTTP/1.1</br>
                     Host: internet-vip.cf</br>
                     Upgrade: websocket[crlf][crlf]
                    </b>
                </p>
    
                     <p>Usuario: ${data.user}</p>
                     <p>Clave: ${data.password}</p>
                     <p>fecha de expiración: ${data.date}</p>
           </div>
                `;
                $('#create-ssh').html(html);
            }else{
                const html = `
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <div class="loading"><img width="120px" src="./public/images/error.gif" alt="loading" /><br/><p style="color: #020202;font-family: Poppins">${data.message}</p></div>
                </div>
                `;
                $('#create-ssh').html(html);
            }
        });
        
    })
})