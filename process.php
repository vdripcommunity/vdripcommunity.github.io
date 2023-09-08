<?php

$db_host = "sql.freedb.tech";
$db_user = "freedb_freedb_id21235585_vdrip";
$db_password = "xzT3q$!Wct&UfyY";
$db_name = "freedb_id21235585_vdrip";


$conn = new mysqli($db_host, $db_user, $db_password, $db_name);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$team = $_POST['team'];
$wallet_address = $_POST['wallet_address'];
$incentive = $_POST['incentive'];


$sql = "INSERT INTO form_data (team, wallet_address, incentive) VALUES ('$team', '$wallet_address', $incentive)";

if ($conn->query($sql) === TRUE) {
    // Redirect to index.html after displaying the success message
    header("Location: index.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
