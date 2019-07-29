
<html>
    <head>
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <form action="https://www.example.com/payment/success/" method="POST">
            <script
                src="https://checkout.razorpay.com/v1/checkout.js"
                data-key="rzp_test_Fc9HJMIcWHARNs" 
                data-amount="29935" 
                data-currency="INR"
                data-order_id="order_CgmcjRh9ti2lP7"
                data-buttontext="Pay with Razorpay"
                data-name="Acme Corp"
                data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
                data-image="https://example.com/your_logo.jpg"
                data-prefill.name="Gaurav Kumar"
                data-prefill.email="gaurav.kumar@example.com"
                data-theme.color="#ffd000"
            ></script>
            <input type="hidden" custom="Hidden Element" name="hidden">
        </form>
    </body>
</html>
        
                            