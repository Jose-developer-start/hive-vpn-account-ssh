/**
:::::MENSAJES DE ALERTAS PARA LOGIN Y CREACION DE USUARIOS

*/
<?php if(isset($_SESSION['new_user']) && isset($_SESSION['auth']) ): ?>
<script>
    swal({
    title: "Hola, <?= $_SESSION['user']->email ?>",
    text: "Bienvenido",
    icon: "success",
    button: "cerrar",
    });
</script>

<?php unset($_SESSION['new_user']); endif ?>




<?php if(isset($_SESSION['register_user'])): ?>
    <script>
    swal({
    title: "Success, E-mail registrado!!",
    text: "Ahora,inicia sesión!",
    icon: "success",
    button: "cerrar",
    });
</script>

<?php unset($_SESSION['register_user']); endif; ?>


<?php if(isset($_SESSION['account_exist'])): ?>
    <script>
        swal({
        title: "Upps, e-mail registrado!!",
        text: "Prueba con otrol E-mail",
        icon: "error",
        button: "cerrar",
        });
    </script>
<?php unset($_SESSION['account_exist']); endif ?>