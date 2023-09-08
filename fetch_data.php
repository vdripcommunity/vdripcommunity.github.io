<?php
// Database connection information (same as in process.php)
$db_host = "sql.freedb.tech";
$db_user = "freedb_freedb_id21235585_vdrip";
$db_password = "xzT3q$!Wct&UfyY";
$db_name = "freedb_id21235585_vdrip";
// Create a database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and display data from the database
$result = $conn->query("SELECT * FROM form_data");
if ($result->num_rows > 0) {
    echo "<h2>Submitted Data:</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Team</th><th>Wallet Address</th><th>Incentive</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['team'] . "</td><td>" . $row['wallet_address'] . "</td><td>" . $row['incentive'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();
?>