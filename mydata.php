<html>
<head>
</head>
<body>

<?php
$servername = "localhost";
$username = "csc412";
$password = "csc412";
$dbname = "dwlguests";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
</body>
<html>
