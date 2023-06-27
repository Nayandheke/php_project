<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
    <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "employee";

        $connection = new mysqli($servername, $username, $password, $dbname);

        if ($connection->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT Name FROM employee_tbl";
        $result = $connection->query($sql);

        session_start(); 
        if (isset($_SESSION["username"])) {
            $username = $_SESSION["username"];
        } else {
            $username = "Guest";
        }
    ?>

    <h1>Welcome, <?php echo $username; ?>!</h1>
    <p></p>
  </html>
