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
    $name = $_POST['name'];
    $address = $_POST['address'];

    // Display user's order and total price
    $sql = "SELECT * FROM cart";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Order placed successfully</h2>";
        echo "<h2>Your Order:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Item Name</th><th>Quantity</th><th>Price</th></tr>";

        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row['item_name'] . "</td><td>" . $row['quantity'] . "</td><td>" . ($row['price'] * $row['quantity']) . "</td></tr>";
        }

        echo "</table>";
        $sql = "SELECT SUM(price * quantity) AS total_price FROM cart";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $total_price = $row['total_price'];
        echo "<h2>Total Price: $" . $total_price . "</h2>";
        echo "<h2>Name: " . $name . "</h2>";
        echo "<h2>Address: " . $address . "</h2>";
    } else {
        echo "Your cart is empty.";
    }
}

// Close database connection
mysqli_close($conn);
?>
