<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/main.css">
    <title>Realizar pago de websocket</title>
</head>

<body>
    <div class="my-5">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="jumbotron text-center">
                            <h1 class="display-4">Paso final</h1>
                            <hr class="my-4">
                            <p class="lead">Estas a punto de pagar la cantidad de:</p>
                            <h4>$<?php echo $total ?></h4>
                            <div id="paypal-button-container"></div>
                            <p>No hay reembolso de dinero!</p><br>
                            <strong>@hive-vpn.tk</strong>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>