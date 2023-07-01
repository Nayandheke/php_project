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
            echo  "username".$username;
            echo $_SESSION["login"];
        } else {
            $username = "Guest";
            echo $username;
            echo $_SESSION["login"];
        }
    ?>

    <h1>Welcome, <?php echo $username; ?>!</h1>
    <p></p>
  </html>
