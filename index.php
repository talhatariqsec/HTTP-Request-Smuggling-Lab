<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple HTTP Smuggling Lab</title>
</head>
<body>
    <h1>HTTP Request Smuggling Lab</h1>
    <form method="POST" action="process.php">
        <label for="payload">Enter Your Payload:</label><br>
        <textarea id="payload" name="payload" rows="6" cols="50" placeholder="Enter your payload here"></textarea>
<br><br>
        <button type="submit">Test Payload</button>
    </form>
</body>
</html>
