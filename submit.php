<?php
error_reporting(E_ERROR);
require('config.php');
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=>1000,
		"currency"=>"usd",
		"description"=>"Ordermania",
		"source"=>$token,
	));

	echo "<pre>";

    
    // print_r($data);
    if($data.id){

    	echo '<script>alert("Transaction Successfull")</script>'; 
  

    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="button.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

  <div class="image">
      <img src="2.png">
    </div>

	<div class="login-page">
    
  
    <div class="form">

      
      <button onclick="window.location.href='index.php'">Back to Home Page</button><br><br>
      <button onclick="window.location.href='games/index.html'">Play Games</button><br><br>
        </div>
    </div>
</body>

</html>

