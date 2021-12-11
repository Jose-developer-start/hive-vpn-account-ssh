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

        if($dataUser->email == $email){
            $_SESSION['account_exist'] = true;
            echo "<script>window.location.href='../index.php?content=login'</script>";
        }else{

            $data = array(
                
                'user' => NULL,
                'email' => $email,
                'pass' => password_hash($pass,PASSWORD_DEFAULT)
            );
            $query = "INSERT INTO users(user,email,password) VALUES(:user,:email,:pass)";
            $result = $db->connect()->prepare($query);
    
            if($result->execute($data)){
                $_SESSION['new_user'] = true;
                $_SESSION['register_user'] = true;
                echo "<script>window.location.href='../index.php?content=login'</script>";
            }else{
                echo "<script>window.location.href='../index.php?content=login'</script>";
            }
        }
    }