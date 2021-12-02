<?php


    if($_POST){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $myemail = "josedeodanes99@gmail.com";
        $mypass = "jose";

        if($email == $myemail){
            if($pass == $mypass){
                echo "success";
            }else{
                echo "error, datos no encontrados";
            }
        }else{
            echo "error, datos no econtrados";
        }
        
    }
