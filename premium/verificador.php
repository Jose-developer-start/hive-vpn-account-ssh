<?php
    session_start();
    include_once "../config/conn_db.php";
    include_once "./ssh2.php";

    if(isset($_SESSION['username']) and isset($_SESSION['passwd'])){
        $db = new DB();

        date_default_timezone_set('America/El_Salvador');
        $year = date('Y');
        $month = date('n');
        $day = date('j');
        if($day < 2){
            $day = date('j') + 31;
        }else{
            if($month < 12){
                $month++;
            }else{
                $year = $year + 1;
                $month = 1;
            }
            //7 DAYS
            $days = date('j') + 30;
            $day = $days - 31;
        }
        $date = strval($year."-".$month."-".$day);

        $user = $_SESSION['username'];
        $passwd = $_SESSION['passwd'];

        $ssh = new Websocket($user,$passwd,$date);
        $result = $ssh->create();
        //Insertar en BD MYSQL
        echo $date;
        $query = "INSERT INTO account_ssh(name,password,date,user_id) VALUES (?,?,?,?)";
        $result = $db->connect()->prepare($query);
        //Execute save mysql
        $result->execute(array(
                $user,
                $passwd,
                $date,
                $_SESSION['user']->id
        ));
    }

   //unset($_SESSION['username']);
    //unset($_SESSION['passwd']);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="row">
    <div class="col-md-5 mx-auto my-5">
        <div class="jumbotron">
            <h3 class="display-4">Pago realizado!!</h3>
            <hr class="my-4">
            <p class="lead"><?php echo $mensajePaypal ?></p>
        </div>
    </div>
</div>
<script >

    setTimeout(()=>{
        window.location.href = "../panel/index.php"
    },1000)

</script>