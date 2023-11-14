<?php
// Connect to database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "project2";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'] * $quantity; // Update the price value based on the quantity

    // Insert into cart table
    $sql = "INSERT INTO cart (item_name, quantity, price) VALUES ('$item_name', $quantity, $price)";
    if (mysqli_query($conn, $sql)) {
        echo "Item added to cart successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
