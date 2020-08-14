<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51HFJs5FFf62F3bjtJB2zwNeFyUCTQiIbAVduCGjgXxnuoYhFqKjUWpuf5X8k5DY10RHgoy3mWgjhjYPKdI3Mjmal007DmgPron";

$secretKey="sk_test_51HFJs5FFf62F3bjtxvxpNbp2r4FfObcbi6RF9LPpSgTZo2dKSSxzK0BFY4ovm0JYi4lOiDkceozbygufE3Qf0i7d00fuQZmDfl";

\Stripe\Stripe::setApiKey($secretKey);
?>