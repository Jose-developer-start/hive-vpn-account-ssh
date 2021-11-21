<?php
     include_once "./libs/ssh2.php";
     if($_POST){
          date_default_timezone_set('America/El_Salvador');
          $year = date('Y');
          $month = date('n');
          $day = date('j') + 7;
          $date = strval($year."-".$month."-".$day);
          if(!empty($_POST['passwd']) && !empty($_POST['user'])){

               if(strlen($_POST['user']) > 4 && !empty($_POST['passwd'])){
                    if(strlen($_POST['passwd']) > 5){
                         $user = $_POST['user'];
                         $passwd = $_POST['passwd'];
                         $ssh = new Websocket($user,$passwd,$date);
                         $ssh->create();
                    }else{
                         $mensaje[] = "Por favor, ingresar una contraseña mas larga";
                    }
               }else{
                    $mensaje[] = "Por favor, ingrese un nombre mas largo";
               }
          }else{
               $mensaje[] = "Campos vacios, ingrese un usuario y contraseña";
          }
     }

     include_once "./template/header.php";

?>

<header >
     <div class="container d-flex h-100 flex-column justify-content-center align-items-around">
          <div class="row">
               

               <div class="col-sm-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <h1>SSH SSL + WEBSOCKET</h1>
                    <p>Cuentas gratis y premium</p>
               </div>
               <div class="col-sm-12 col-md-6 d-flex justify-content-center">
                    <div class="ticket shadow-lg">
                         <div class="ticket__header">
                              <h3>1</h3>
                         </div>
                         <div class="ticket__footer">
                              <p>Un pais</p>
                         </div>
                    </div>
               </div>
               
          </div>
     </div>
</header>

<h2 class="text-center title-server my-5">SERVER</h2>

<div class="container">
<?php if(isset($mensaje)): ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error</strong>
  <?php foreach($mensaje as $msg){
       echo $msg;
  } ?>
</div>
<?php $mensaje[] = ""; endif ?>
<div class="row">
          <div class="col-sm-12 col-md-4">
               <div class="card border-0 shadow-lg mb-3">
                    <div class="card-header">
                         <h2 class="text-center text-dark">New York</h2>
                         <h3 class="text-center">1</h3>
                         <?php if(isset($user) && isset($passwd) && isset($date)): ?>
                         <div class="alert alert-warning alert-dismissible fade show" role="alert">
                         <p>GET  internet-vip.cf HTTP/1.1[crlf]Host:internet-vip.cf[crlf]X-Forward-Host:internet-vip.cf[crlf]Connection:  upgrade[crlf]upgrade: websocket[crlf]GET  [host_port]  [protocol][crlf][crlf]</p>
                         <?php if(isset($user) && isset($passwd) && isset($date)){
                              echo "<p>Usuario: $user</p>";
                              echo "<p>Clave: $user</p>";
                              echo "<p>fecha de expiración: $date</p>";
                         } ?>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                         </button>
                         </div>
                         <?php endif ?>
                    </div>
                    <div class="card-body">
                         <form action="index.php" method="POST">
                              <div class="form-group">
                                   <input class="form-control border-0" name="user" type="text" placeholder="nombre de usuario">
                              </div>
                              <div class="form-group">
                                   <input class="form-control border-0" name="passwd" type="text" placeholder="contraseñas">
                              </div>
                              <input class="btn btn-outline-success btn-sm btn-block" type="submit" value="Crear cuenta">
                         </form>
                    </div>
                    <div class="card-footer">
                         <ul class="list-group">
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                              WS Domain : internet-vip.cf
                              <span class="badge badge-primary badge-pill"><i class="far fa-check-circle"></i></span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                              Port SSH: 22
                              <span class="badge badge-primary badge-pill"><i class="far fa-check-circle"></i></span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                              SSH Websocket: 443
                              <span class="badge badge-primary badge-pill"><i class="far fa-check-circle"></i></span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                              Port UDP: 7400
                              <span class="badge badge-primary badge-pill"><i class="far fa-check-circle"></i></span>
                              </li>
                         </ul>
                    </div>
               </div>
          </div>
     </div>
</div>


<?php include_once "./template/footer.php"; ?>
 