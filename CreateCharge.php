<?php
  require 'vendor/autoload.php';

  \Stripe\Stripe::setApiKey("sk_test_aclxUQycIQuIcysuGjcNRvYl");

  $token = $_POST["stripeToken"];

  $charge = \Stripe\Charge::create([
    "amount" => 1500,
    "currency" => "usd",
    "description" => "Pago en mi tienda...",
    "source" => $token
  ]);

  echo "<pre>", print_r($charge), "</pre>";
?>