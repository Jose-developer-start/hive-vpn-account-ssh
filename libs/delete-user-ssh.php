<?php
    include_once "../config/conn_db.php";
    include_once "./ssh2.php";

    $id = base64_decode($_GET['id']); 
    if(strlen($id) > 0 ){
        $ssh = new Websocket($id);
        $ssh->delete_ssh();
        
        $db= new DB();
        $result = $db->connect()->prepare('DELETE FROM account_ssh WHERE name=?');

        if($result->execute([$id])){
            header('Location: ../panel/index.php');
        }else{
            header('Location: ../panel/index.php');
        }
        
    }


?>