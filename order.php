<?php
echo "<h1>Drug Order Form</h1>
<form method='post'>
  <label for='name'>Name:</label>
  <input type='text' id='name' name='name' required>
  <br>
  <label for='email'>Email:</label>
  <input type='email' id='email' name='email' required>
  <br>
  <label for='phone'>Phone:</label>
  <input type='tel' id='phone' name='phone' required>
  <br>
  <label for='drug'>Drug:</label>
  <input type='text' id='drug' name='drug' required> <!-- Add id and required attribute -->
  <br>
  <label for='quantity'>Quantity:</label>
  <input type='number' id='quantity' name='quantity' required>
  <br>
  <label for='deliveryAddress'>Delivery Address:</label>
  <input type='text' id='deliveryAddress' name='deliveryAddress' required>
  <br>
  <button type='submit'>Submit</button>
</form>
";

// Database connection parameters
$servername = "localhost"; // Change this to your database server name if different
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "drug_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind the INSERT statement
    $stmt = $conn->prepare("INSERT INTO drug_order (name, email, phone, drug, quantity, delivery_addr) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssis", $name, $email, $phone, $drug, $quantity, $deliveryAddress);

    // Set parameters and execute
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $drug = $_POST["drug"];
    $quantity = $_POST["quantity"];
    $deliveryAddress = $_POST["deliveryAddress"];

    if ($stmt->execute()) {
        echo "<script>alert('New order placed')</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Close connection
$conn->close();
?>


