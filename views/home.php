
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

<h2 class="text-center title-server my-5">SOPORTE PARA JUEGOS Y LLAMADAS</h2>

<div class="container">
     <div class="content__soporte">
          <div class="row">
          <div class="col-sm-12 col-md-6 d-flex justify-content-center">
               
               <div class="freefire__logo">
                    
               </div>
          </div>
          <div class="col-sm-12 col-md-6 d-flex justify-content-center">
               
               <div class="whatsapp__logo">
                    
               </div>
          </div>
          </div>
     </div>

     <h2 class="text-center title-server my-5">SERVER</h2>
<?php if(isset($mensaje)): ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error</strong>
  <?php foreach($mensaje as $msg){
       echo $msg;
  } ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                         </button>
</div>
<?php $mensaje[] = ""; endif ?>

<?php if(isset($user) && isset($passwd) && isset($date)): ?>
                         <div class="alert alert-warning alert-dismissible fade show" role="alert">
                         <p>GET  internet-vip.cf HTTP/1.1[crlf]Host:internet-vip.cf[crlf]X-Forward-Host:internet-vip.cf[crlf]Connection:  upgrade[crlf]upgrade: websocket[crlf]GET  [host_port]  [protocol][crlf][crlf]</p>
                         <?php if(isset($user) && isset($passwd) && isset($date)){
                              echo "<p>Usuario: $user</p>";
                              echo "<p>Clave: $passwd</p>";
                              echo "<p>fecha de expiración: $date</p>";
                         } ?>
                         
                         </div>
                         <?php endif ?>
<?php require_once "./views/websocket.php" ?>

</div>