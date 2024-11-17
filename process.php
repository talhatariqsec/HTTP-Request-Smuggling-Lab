<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $payload = $_POST['payload'];

    // Check if the smuggled payload is present
    if (str_contains($payload, "EXTRA_PAYLOAD")) {
        echo "<h1>Congratulations! HTTP Request Smuggling Successful!</h1>";
    } else {
        echo "<h1>Failed! Try Again.</h1>";
    }
} else {
    echo "Invalid Request!";
}
?>
