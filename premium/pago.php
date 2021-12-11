<?php
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
<!--AGREGANDO CODIGO PARA PAYPAL------------------------------------------->
<?php
    include_once "./view_pago.php";
?>

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
            sandbox: 'AS8C2bl-A1NT_UcVZslKOPezeUTjzc2s-BNi10YjypRQmH5z_w1RWYlY8Xx-C0QyDNSzJ784nrNsK1_k',
            production: 'ATYhHQHQmLSuWb91fq6uAIBQXW3vmnAPbKJvVkdz9o85qsoI4MB0sG9QOk6IWPBbSj3BkrWrp0hFdsZ4'
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
                        description: "Compra de cuenta Websocket 31 días:$<?php echo number_format($total, 2); ?>",
                        custom: "<?php echo $SID; ?>#<?php echo $_SESSION['user']->id; ?>"
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