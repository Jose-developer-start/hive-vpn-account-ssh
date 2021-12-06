<?php 
session_start();
require_once "../config/conn_db.php"; 

$db = new DB();
$result = $db->connect()->prepare('SELECT * FROM account_ssh WHERE user_id=?');

$result->execute([$_SESSION['user']->id]);
$dataUser = $result->fetchAll(PDO::FETCH_OBJ);
$fechaActual = date('j');
$index = 1;
//echo count($dataUser);
?>
<table class="table table-responsive-sm">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>name</th>
            <th>Dias restantes</th>
            <th>clave</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dataUser as $user) : ?>
            <tr>
                <td><?php echo $index ++ ?></td>
                <td><?php echo $user->name ?></td>
                <td><?php
                    echo $user->date;
                    /*
                    $diasRestantes = date("j",strtotime($user->date)) - $fechaActual;  
                    if($diasRestantes > 0){
                        echo $diasRestantes. " días";
                    }else{
                        echo "Inactivo";
                    }*/
                    ?>
                </td>
                <td><?php echo $user->password ?></td>
                <td>
                    <a class="btn btn-danger btn-sm" href="../libs/delete-user-ssh.php?id=<?php echo base64_encode($user->name) ?>"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
