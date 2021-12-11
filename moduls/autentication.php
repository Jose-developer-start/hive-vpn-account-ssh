<?php
    session_start();
    include_once "../config/conn_db.php";
    $db = new DB();
    
    if($_POST){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $result = $db->connect()->prepare('SELECT * FROM users WHERE email=?');
        $result->execute([$email]);
        $dataUser = $result->fetch(PDO::FETCH_OBJ);
        if($email == $dataUser->email){
            if(password_verify($pass,$dataUser->password)){
                $_SESSION['auth'] = true;
                $_SESSION['user'] = $dataUser;
                echo "success";
            }else{
                echo "error";
            }
        }else{
            echo "error";
        }
        
    }
