<?php include_once "./sweetAlert.php"; ?>

<div class="container_login">
    <div class="container">
        <div class="text-center" id="loading"></div>
    <div class="container card-login">
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <h3>Ingresar</h3>
                <form action="#" id="auth-login" method="POST">
                    <div class="form-group">
                        <input name="email" type="text" class="input_login form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input name="pass" type="password" class="input_login form-control" placeholder="Clave">
                    </div>
                    <input type="submit" class="btn btn-success" value="Ingresar">
                    <div class="py-2">
                    <a href="#" aria-disabled="" class="text-dark register">Registrate aquí</a>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-6 text-center login__description" id="form-register">
                
                <img src="https://cdn-icons-png.flaticon.com/512/493/493678.png" width="120" alt="">
                <p>Administra tus cuentas de forma mas profesional al registrarte en nuestr plataforma</p>
            </div>
        </div>
    </div>
    </div>
</div>