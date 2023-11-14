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

// Check if delete button is clicked
if (isset($_POST['delete'])) {
    $item_name = $_POST['item_name'];
    $sql = "DELETE FROM cart WHERE item_name='$item_name'";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

// Fetch data from cart table
$sql = "SELECT * FROM cart";
$result = mysqli_query($conn, $sql);

// Generate HTML table code
echo '<form method="post">';
echo '<table border="1">';
echo '<tr><th>Item Name</th><th>Quantity</th><th>Price</th><th>Delete</th></tr>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['item_name'] . '</td>';
    echo '<td>' . $row['quantity'] . '</td>';
    echo '<td>' . $row['price'] * $row['quantity'] . '</td>';
    echo '<td><button type="submit" name="delete" value="Delete">Delete</button></td>';
    echo '<input type="hidden" name="item_name" value="' . $row['item_name'] . '">';
    echo '</tr>';
}
echo '</table>';
echo '</form>';

// Close database connection
mysqli_close($conn);
?>
