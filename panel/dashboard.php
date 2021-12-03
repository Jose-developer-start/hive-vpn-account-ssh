<?php
session_start();
require_once "../config/conn_db.php";

$db = new DB();
$result = $db->connect()->prepare('SELECT * FROM account_ssh WHERE user_id=?');

$result->execute([$_SESSION['user']->id]);
$dataUser = $result->fetchAll(PDO::FETCH_OBJ);
$cantidaAccount = count($dataUser);

?>
<div class="card card-stats mb-4 mb-xl-0 shadow-sm">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <h2 class="card-title text-uppercase text-muted mb-0 h5">Cuentas creadas : <?php echo $cantidaAccount; ?> </h2>
                <span class="small font-weight-bold mb-0">Servidores de Unite State Fazt
                </span>
            </div>
            <div class="col-auto">
                <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>