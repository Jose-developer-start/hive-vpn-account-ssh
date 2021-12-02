<?php
     session_start();
     

     include_once "./template/header.php";
     
     
     //include_once "./views/websocket.php";

     //Menu de peticiones GET
     $ptc_get = $_GET['content'];
     switch ($ptc_get){
          case 'login':
               include_once "./views/login.php";
               break;
          default:{
               //Home
               include_once "./views/home.php";
          }
     }
     
     
     include_once "./template/footer.php"; 
     
     
     ?>
 