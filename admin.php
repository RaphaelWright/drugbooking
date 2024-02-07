<html>
<head>
  <title>Admin Panel</title>
  <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Include external CSS file -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
  <div class="topbar">
    <img src="download.png" />
    <div class="navbar">
      <ul>
        <li><a href="#">Orders</a></li>
        <li><a href="#">Add Drugs</a></li>
        <li><a href="#">Update Drugs</a></li>
      </ul>
    </div>
  </div>
  <section id="banner">
    <!-- <h1 class="banner">Hello, User</h1> -->
  </section>

  <?php
  echo "<link rel='stylesheet' href='order.css' />";
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

  // Fetch records from the database
  $sql = "SELECT * FROM drug_order";
  $result = $conn->query($sql);

  // Display records in <div> tags
  if ($result->num_rows > 0) {
    // Output data of each row
    echo "<div class='grid-container'>"; // Start the grid container
    while ($row = $result->fetch_assoc()) {
      echo "<div class='orders'>"; // Start each order item
      echo "<p>&nbsp&nbsp<i class='fas fa-user'></i>&nbsp&nbsp&nbsp" . $row["name"] . "</p>";
      echo "<p>&nbsp&nbsp<i class='fa fa-envelope'></i>&nbsp&nbsp&nbsp" . $row["email"] . "</p>";
      echo "<p>&nbsp&nbsp<i class='fa fa-phone'></i>&nbsp&nbsp&nbsp" . $row["phone"] . "</p>";
      echo "<p>&nbsp&nbsp<i class='fa fa-capsules'></i>&nbsp&nbsp&nbsp" . $row["drug"] . "</p>";
      echo "<p>&nbsp&nbsp<i class='fas fa-balance-scale'></i>&nbsp&nbsp&nbsp" . $row["quantity"] . "</p>";
      echo "<p>&nbsp&nbsp<i class='fas fa-map-marker-alt'></i>&nbsp&nbsp&nbsp" . $row["delivery_addr"] . "</p>";
      echo "</div>"; // End each order item
    }
    echo "</div>"; // End the grid container
  } else {
    echo "No records found";
  }
  // Close connection
  $conn->close();
  ?>

  <section id="add">
    <h2>Add Drugs</h2>
    <form method="post">
      <input type="text" name="drug_id" placeholder="Drug ID" required>
      <input type="text" name="drug_name" placeholder="Drug Name" required>
      <input type="text" name="drug_quantity" placeholder="Drug Quantity" required>
      <input type="submit" value="Add Drug">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Database connection parameters
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "drug";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Prepare and bind the INSERT statement
      $stmt = $conn->prepare("INSERT INTO drugs (drug_id, drug_name, drug_quantity) VALUES (?, ?, ?)");
      $stmt->bind_param("iss", $drug_id, $drug_name, $drug_quantity);

      // Set parameters and execute
      $drug_id = $_POST["drug_id"];
      $drug_name = $_POST["drug_name"];
      $drug_quantity = $_POST["drug_quantity"];

      // Close statement and connection
      $stmt->close();
      $conn->close();
    }
    ?>
  </section>


  <section>

  </section>




</body>

</html>