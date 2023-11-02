<?php
require 'stripe-php-master/init.php';
$Publishablekey=
"pk_test_51O7v5lB8vGtl9wnkXbJMtE8Ah6PE2UYa39feKMTUMRJm6bXqN0p9zTPIbd0Zogi6ZHw3NLTjwtMnZjBfr4aMlPHI00xyBFIsBK";
$Secretkey=
"sk_test_51O7v5lB8vGtl9wnkA3ihysGIVqLDeYMr6muNFbRQa9Z9M5c3CDYhMxYUMKegk3kYEN5msV3BQ2d6AuxObvmmi0bl00Kl1gYi1V";
\Stripe\Stripe::setApiKey($Secretkey);

?>