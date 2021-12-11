<header>
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
<?php include_once "./sweetAlert.php"; ?>

<h2 class="text-center title-server my-5">SOPORTE PARA JUEGOS Y LLAMADAS</h2>

<div class="container">
     <div class="row mb-4">
          <div class="col-lg-3 col-sm-6 mb-3">
               <div class="d-flex align-items-center">
                    <div class="">
                         <h5 class="h1 font-weight-bolder mb-0">15</h5>
                    </div>
                    <div class="pl-3">
                         <h6 class="mb-0">Velocidad hasta de 15 megas por segundo</h6>
                    </div>
               </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-3">
               <div class="d-flex align-items-center">
                    <div class="">
                         <h5 class="h1 font-weight-bolder mb-0">IP</h5>
                    </div>
                    <div class="pl-3">
                         <h6 class="mb-0">Navegación segura</h6>
                    </div>
               </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-3">
               <div class="d-flex align-items-center">
                    <div class=""><span class="h1 font-weight-bolder mb-0"><i class="fas fa-gamepad"></i></span></div>
                    <div class="pl-3">
                         <h6 class="mb-0">Funcionales para juegos</h6>
                    </div>
               </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-3">
               <div class="d-flex align-items-center">
                    <div class=""><span class="h1 font-weight-bolder mb-0"><i class="fab fa-whatsapp"></i></span></div>
                    <div class="pl-3">
                         <h6 class="mb-0">Funcional para llamadas</h6>
                    </div>
               </div>
          </div>
     </div>
     <div class="row text-center text-lg-left mt-15 mt-lg-20 align-items-center">
          <div class="col-12 col-lg-6 mb-15 mb-lg-0">
               <div class="col-sm-12 col-md-6 d-flex justify-content-center">
                    <div class="freefire__logo">
     
                    </div>
               </div>
          </div>
          <div class="col-12 col-lg-6 d-flex align-items-center">
               <div class="pl-0 pl-xl-7 pr-0 pr-xl-16">
                    <h1 class="mb-0">Testeado en Free fire y WhatSapp</h1>
                    <p class="mt-8 mb-0">Estos servidores que ofrecemos ofrecen estabilidad y sopote con ping bajo para Videojuegos y estan ubicados en Norte America, así, disponemos de mas paises. Disfruta de la navegación por VPN.</p>
               </div>
          </div>
     </div>


     <h2 class="text-center title-server my-5">SERVER</h2>
     <?php if (isset($mensaje)) : ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
               <strong>Error</strong>
               <?php foreach ($mensaje as $msg) {
                    echo $msg;
               } ?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
               </button>
          </div>
     <?php $mensaje[] = "";
     endif ?>

     <div id="create-ssh">

     </div>
     <?php var_dump(); ?>
     <?php require_once "./views/websocket.php" ?>

</div>