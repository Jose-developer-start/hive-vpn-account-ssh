<?php
    session_start();
    session_start();
    if(!isset($_SESSION['auth'])){
        header('Location: ../index.php');
    }
    $total = 3;
    $SID = session_id();

    if($_POST){
        $user = $_POST['user'];
        $passwd = $_POST['passwd'];
        $_SESSION['username'] = $user;
        $_SESSION['passwd'] = $passwd;
    }
?>
<!--------------------------------------------AGREGANDO CODIGO PARA PAYPAL------------------------------------------->
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<style>
    /* Media query for mobile viewport */
    @media screen and (max-width: 400px) {
        #paypal-button-container {
            width: 100%;
        }
    }

    /* Media query for desktop viewport */
    @media screen and (min-width: 400px) {
        #paypal-button-container {
            width: 250px;
            display: inline-block;
        }
    }
</style>
<!--------------------------------------------AGREGANDO CODIGO PARA PAYPAL------------------------------------------->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="my-5">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="jumbotron text-center">
                        <h1 class="display-4">Paso final</h1>
                        <hr class="my-4">
                        <p class="lead">Estas a punto de pagar con PayPal la cantidad de:</p>
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

<script>
    paypal.Button.render({
        env: 'production', // sandbox | production
        style: {
            label: 'checkout', // checkout | credit | pay | buynow | generic
            size: 'responsive', // small | medium | large | responsive
            shape: 'pill', // pill | rect
            color: 'gold' // gold | blue | silver | black
        },

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create

        client: {
            sandbox: 'ATYhHQHQmLSuWb91fq6uAIBQXW3vmnAPbKJvVkdz9o85qsoI4MB0sG9QOk6IWPBbSj3BkrWrp0hFdsZ4',
            production: 'EC3yb6dQAkQ-k-k4AsMPM6-HtMuvaxJc-a8WTbU5Jps2Xv9cxGZKGx3nBAIpEZ1d05s2LivHHNnPIBG3'
        },

        // Wait for the PayPal button to be clicked


        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [{
                        amount: {
                            total: '<?php echo  $total; ?>',
                            currency: 'USD'
                        },
                        description: "Compra de productos a Techmology box:$<?php echo number_format($total, 2); ?>",
                        custom: "<?php echo $SID; ?>#<?php echo $SID; ?>"
                    }]
                }
            });
        },

        // Wait for the payment to be authorized by the customer

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                console.log(data);
                window.location = "verificador.php?paymentToken=" + data.paymentToken + "&paymentID=" + data.paymentID;
            });
        }

    }, '#paypal-button-container');
</script>