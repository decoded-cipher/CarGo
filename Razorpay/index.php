<?php 
require_once('config.php'); 
?>
<html>
  <head>
    <title> RazorPay Integration in PHP - phpexpertise.com </title>
    <meta name="viewport" content="width=device-width">
    <style>
      .razorpay-payment-button {
        color: #ffffff !important;
        background-color: #7266ba;
        border-color: #7266ba;
        font-size: 14px;
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <form action="charge.php" method="POST">
    <!-- Note that the amount is in paise = 50 INR -->
    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $razor_api_key; ?>"
        data-amount="10000"
        data-currency="INR"    
        data-buttontext="Pay with Razorpay"
        data-name="CarGo Carpool"
        data-description="For the Carpool enjoyed"
        data-image="logo.jpg"
        data-prefill.name="CarGo Pooling Services"
        data-prefill.email="info@cargo.in"
        data-theme.color="#FFD000"
    ></script>
    <input type="hidden" value="Hidden Element" name="hidden">
    </form>
  </body>
</html>