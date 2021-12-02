$(document).ready(function() {
    $("a.register").click(function(event) {
        event.preventDefault();
        $("#form-register").load("views/register.php");
    });
})
