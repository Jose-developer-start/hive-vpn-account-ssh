<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">

     <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/493/493678.png" type="image/jpg">
     <title>Cuentas Websocket premium</title>
     <meta name="description" content="Hive VPN ofrece cuentas premium para el protocolo websocket, las cuentas de 5 dias son gratis y las de 31 dias son pagadas, los métodos de pagos son Bitcoin (Satoshig)">
     <link rel="stylesheet" href="./public/css/main.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!--JQuery--->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
     <script src="./public/js/login.js"></script>
     <script src="./public/js/create-ssh.js"></script>
     <script src="./public/js/register.js"></script>
     <!---SWITH ALERT--->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <!---FONTAWESOME--->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="app">
     <nav class="navbar navbar-expand-lg bg-dark-blue navbar-light bg-light">
          <div class="container">
               <a class="navbar-brand" href="http://hive-vpn.tk/">HIVE VPN Websocket PREMIUM</a>
               <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                         <li class="nav-item active">
                              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                         </li>

                         <?php if (!isset($_SESSION['auth'])) : ?>
                              <li class="nav-item active">
                                   <a class="nav-link" href="?content=login">Login <span class="sr-only">(current)</span></a>
                              </li>
                         <?php else : ?>
                              <li class="nav-item active">
                                   <a class="nav-link" href="panel">Panel <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item active">
                                   <a class="nav-link" href="./moduls/logout.php">Salir <span class="sr-only">(current)</span></a>
                              </li>
                         <?php endif ?>

                    </ul>
               </div>
          </div>
     </nav>