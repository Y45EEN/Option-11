<?php

require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "sk_test_51OGzN5Ko7dOOf9d4JFQvKqwWGSsOoTyHdny29HZlnXEH379lcVQKslIfoo0aZMKgXHI44NhPAk7AhXkWfnzJJwWO007HLxodc1";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$cardNumber = $_POST['cardNumber'];
$cardExpiry = $_POST['cardExpiry'];
$cardCvc = $_POST['cardCvc'];
$token = $_POST['stripeToken'];
// Create a token using the collected card details
$token = \Stripe\Token::create([
    'card' => [
        'number' => $cardNumber,
        'exp_month' => substr($cardExpiry, 0, 2),
        'exp_year' => substr($cardExpiry, -4),
        'cvc' => $cardCvc,
    ],
]);


$charge = \Stripe\Charge::create([
  'amount' => 999,
  'currency' => 'usd',
  'description' => 'Example charge',
  'source' => $token,
]);

// Perform actions with the token (e.g., store in a local database)
// Example: Insert into a hypothetical payments table
$mysqli = new mysqli('localhost', 'root', '', 'test');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$sql = "INSERT INTO details (cardnum,exp,cvc) VALUES ('$cardNumber', '$cardExpiry','$cardCvc')";
$result = $mysqli->query($sql);

if (!$result) {
    die('Error: ' . $mysqli->error);
}

// Optionally, you can return a response to the client
echo json_encode(['success' => true]);

$mysqli->close();



