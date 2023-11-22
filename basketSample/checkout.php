<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace with your actual database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create a database connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve payment details from the form
    $stripeToken = $_POST['stripeToken'];

    // Retrieve user details from the form
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];

    // Insert payment information into the database
    $paymentInsertQuery = "INSERT INTO payment (stripe_token) VALUES ('$stripeToken')";
    if (mysqli_query($conn, $paymentInsertQuery)) {
        echo "Payment details inserted successfully. ";
    } else {
        echo "Error inserting payment details: " . mysqli_error($conn);
    }

    // Insert user information into the database
    $userInsertQuery = "INSERT INTO user (first_name, last_name, address) VALUES ('$firstName', '$lastName', '$address')";
    if (mysqli_query($conn, $userInsertQuery)) {
        echo "User details inserted successfully.";
    } else {
        echo "Error inserting user details: " . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>
