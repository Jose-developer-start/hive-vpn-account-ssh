$(document).ready(function() {
    $("a.usuarios").click(function(event) {
        event.preventDefault();
        $("#content-app").load("usuarios.php");
    });

    $("a.inicio").click(function(event) {
        event.preventDefault();
        $("#content-app").load("dashboard.php");
    });
    
})

$("#content-app").load("dashboard.php");
