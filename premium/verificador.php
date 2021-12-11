<?php
session_start();
include_once "../config/conn_db.php";
include_once "./ssh2.php";

define("LINKAPI", "https://api.sandbox.paypal.com");
define('CLIENTID', 'AS8C2bl-A1NT_UcVZslKOPezeUTjzc2s-BNi10YjypRQmH5z_w1RWYlY8Xx-C0QyDNSzJ784nrNsK1_k');
define('SECRET', 'EPNjl6lFkbaLxPkK0LhZDOQoVpHMLIvKZ4m372G9yf8W0olYgitfrIcn4J6Si53xjxeCEqbBqlvHVJ99');

//define('CLIENTID','ATYhHQHQmLSuWb91fq6uAIBQXW3vmnAPbKJvVkdz9o85qsoI4MB0sG9QOk6IWPBbSj3BkrWrp0hFdsZ4');
//define('SECRET', 'EC3yb6dQAkQ-k-k4AsMPM6-HtMuvaxJc-a8WTbU5Jps2Xv9cxGZKGx3nBAIpEZ1d05s2LivHHNnPIBG3');
$Login = curl_init(LINKAPI . "/v1/oauth2/token");
curl_setopt($Login, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($Login, CURLOPT_USERPWD, CLIENTID . ":" . SECRET);

curl_setopt($Login, CURLOPT_POSTFIELDS, "grant_type=client_credentials");

$Respuesta = curl_exec($Login);

$objRespuesta = json_decode($Respuesta);

$AccessToken = $objRespuesta->access_token;

//print_r($AccessToken);

//DETALLE DE VENTA
$venta = curl_init(LINKAPI . "/v1/payments/payment/" . $_GET['paymentID']);

curl_setopt($venta, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Authorization: Bearer " . $AccessToken));

curl_setopt($venta, CURLOPT_RETURNTRANSFER, TRUE);

$RespuestaVenta = curl_exec($venta);

$objDatosTransaccion = json_decode($RespuestaVenta);

//print_r($objDatosTransaccion->transactions[0]->amount->currency);

$state = $objDatosTransaccion->state;

$email = $objDatosTransaccion->payer->payer_info->email;
$nombre = $objDatosTransaccion->payer->payer_info->shipping_address->recipient_name;
$total = $objDatosTransaccion->transactions[0]->amount->total;
$codigoMoney = $total = $objDatosTransaccion->transactions[0]->amount->currency;

curl_close($venta);
curl_close($Login);
if ($state == "approved") {
    $mensajePaypal = "<h3>Pago Aprobado</h3>";

    if (isset($_SESSION['username']) and isset($_SESSION['passwd'])) {
        $db = new DB();

        date_default_timezone_set('America/El_Salvador');
        $year = date('Y');
        $month = date('n');
        $day = date('j');
        if ($day < 2) {
            $day = date('j') + 31;
        } else {
            if ($month < 12) {
                $month++;
            } else {
                $year = $year + 1;
                $month = 1;
            }
            //7 DAYS
            $days = date('j') + 30;
            $day = $days - 31;
        }
        $date = strval($year . "-" . $month . "-" . $day);

        $user = $_SESSION['username'];
        $passwd = $_SESSION['passwd'];

        $ssh = new Websocket($user, $passwd, $date);
        $result = $ssh->create();
        //Insertar en BD MYSQL
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

} else {
    $mensajePaypal = "<h3>Hay un problema con el pago de Paypal</h3>";
}
?>
<!-------------------MUESTRAR AL USUARIO QUE SE HA COMPLETADO SU TRANSACCION---------->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago estado</title>
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="img-pago">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card my-5 shadow-lg">
                    <div class="card-body">
                        <div class="jumbotron">
                            <p class="lead"><?php echo $mensajePaypal ?></p>
                            <span>Redirecconando...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php if($state == "approved"): ?>  
    <script>
        swal("Listo", "Su pago se ha realizado con exito!!", "success");
        
        setTimeout(()=>{
            window.location.href = "../panel/index.php"
        },5000)
    </script>
    
<?php else: ?>
    <script>
        swal("Ufff", "Su pago no se ha compleado!!", "error");
        setTimeout(()=>{
            window.location.href = "../index.php"
        },5000)
    </script>
<?php endif ?>
<script>
</script>