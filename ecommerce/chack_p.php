<?php
require 'config.php';
?>
<form action=" res.php" method="POST">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
     data-key="<?php echo $Publishablekey ;?>"
     data-amount="50000"
     data-name="suraj"
     data-description="suraj"
     data-image=""
     data-currency="inr"

>

    </script>
</form>