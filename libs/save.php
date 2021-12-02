<?php
session_start();
include_once "./ssh2.php";
include_once "../config/conn_db.php";
$db = new DB();
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
                   //Insertar en BD MYSQL
                   $data =[
                         $user,
                         $passwd,
                         $date,
                         $_SESSION['user']->id
                   ];
                    $query = "insert into account_ssh(name,password,date,user_id) VALUES (?,?,?,?)";
                    $result = $db->connect()->prepare($query);
                    //Execute save mysql
                    $result->execute($data);
                   $data = [
                        'user' => $user,
                        'password' => $passwd,
                         'date' => $date,
                         'success' => true
                    ];

                    echo json_encode($data);

              }else{
                   $response = [
                        'success' => false,
                        'message' => "Por favor, ingresar una contraseña mas segura"
                   ];
                   echo json_encode($response);
              }
         }else{
               $response = [
                    'success' => false,
                    'message' => "Por favor, ingrese un nombre con mas carácteres"
               ];
               echo json_encode($response);
         }
    }else{
          $response = [
               'success' => false,
               'message' => "Campos vacios, ingrese un usuario y contraseña"
          ];
          echo json_encode($response);
     
    }
}