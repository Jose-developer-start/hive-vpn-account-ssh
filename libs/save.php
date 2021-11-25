<?php

if($_POST){
    date_default_timezone_set('America/El_Salvador');
    $year = date('Y');
    $month = date('n');
    $day = date('j');
    if($day < 25){
     $day = date('j') + 7;
    }else{
         $month++;
         $days = date('j') + 7;
         $day = $days - 31;
    }
    $date = strval($year."-".$month."-".$day);
    
    
    if(!empty($_POST['passwd']) && !empty($_POST['user'])){

         if(strlen($_POST['user']) > 4 && !empty($_POST['passwd'])){
              if(strlen($_POST['passwd']) > 5){
                   $user = $_POST['user'];
                   $passwd = $_POST['passwd'];
                   $ssh = new Websocket($user,$passwd,$date);
                   $result = $ssh->create();
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