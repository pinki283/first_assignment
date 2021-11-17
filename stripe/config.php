<?php
require('stripe-php/init.php');

$Publishablekey="pk_test_51JwJo8SAOVwALm37H471XykLUOH3JdEcYBUeuuzCr9fz6eeh31pau0gQWBceODkmCp05b2cTIXDAHjFUAGYleItE00cAkkj4Vq";

$Secretkey="sk_test_51JwJo8SAOVwALm37RgSoUu3PTiNxx9xKryNsLlCNpQTpeYaYDjGq4E55mNAODcKDWY2daLGWcGarr87CInYuukfQ006Lucs09Q";

\stripe\stripe::setApiKey($Secretkey);
?>