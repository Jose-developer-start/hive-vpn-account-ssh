<?php 

    session_start();
    if(!isset($_SESSION['auth'])){
        header('Location: ../index.php');
    }else{
        header('Location: ../index.php');
    }