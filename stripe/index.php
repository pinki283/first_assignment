<?php
require('config.php');
?>
<form action="submit.php" method="post" >
<script 
src="https://checkout.stripe.com/checkout.js" class="stripe-button"
data-key="<?php echo $Publishablekey?>"
data-amount="1000"
data-name="Demo product"
data-description="product desc"
data-currency="usd"

>
</script>

</form>