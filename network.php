<head>
    <title>Network Scanner</title>
</head>
<body>
    <h1>Network Scanner</h1>
    <!-- Display the server timestamp -->
    <p>Server Timestamp: <?php echo date("h:i:sa"); ?></p>

    <!-- Form to input IP address or range -->
   
<form method="post" action="">
    Enter IP address or range:
    <input type="text" name="ip_address" required>
    <input type="submit" value="Scan">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ipAddress = escapeshellarg($_POST['ip_address']);
    $timestamp = date('r');
    $filename = '/var/www/html/nmap.html';

    // Command to execute Nmap with user-provided IP address
    $command = "nmap -oN $filename $ipAddress";
    
    // Execute the command
    exec($command, $output, $return_var);
    
    // Display results
    echo "<h2>Scan Results:</h2>";
    echo "<pre>";
    foreach ($output as $line) {
        echo htmlspecialchars($line) . "\n";
}

    echo "</pre>";
echo "<p>Server Timestamp: " . htmlspecialchars($timestamp) . "</p>";
}
?>
