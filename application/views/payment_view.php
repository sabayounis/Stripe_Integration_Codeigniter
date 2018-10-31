<!doctype html>
<html>
    <head>
        <title>Stripe Payment Integration</title>
    </head>
    <body>
    <form action="stripe_payment/checkout" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_RFAIEyo8ZV5yPWjwu7i0VZIJ"
    data-amount="200"
    data-name="Demo Site"
    data-description="Widget"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto">
  </script>
</form>
    </body>
</html>