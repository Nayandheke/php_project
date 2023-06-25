<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        echo "Login successful!";

    } else {
        echo "Invalid username or password.";
    }
}


$connection->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>