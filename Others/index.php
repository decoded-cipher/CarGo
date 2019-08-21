<?php
include_once('config.php');
?>


<html>
    <head>
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <form action="result.php" method="POST">
            <script    
                src="https://checkout.razorpay.com/v1/checkout.js"    
                data-key="<?php echo $payment_key; ?>" // Enter the Key ID generated from the Dashboard    
                data-amount="5000" // Amount is in currency subunits. Default currency is INR. Hence, 29935 refers to 29935 paise or INR 299.35.    
                data-currency="INR"    
                data-order_id="order_CgmcjRh9ti2lP7"// To be passed when using Orders API.    
                data-buttontext="Pay with Razorpay"    
                data-name="CarGo Pooling Services"    
                data-description="Payment in return to the carpool enjoyed:"    
                data-image="https://example.com/your_logo.jpg"    
                data-prefill.name="Arjun Krishna"    
                data-prefill.email="hello@arjunkrishna.in"    
                data-theme.color="#F37254">
            </script>
            <input type="hidden" custom="Hidden Element" name="hidden">
        </form>
    </body>
</html>
        
                            