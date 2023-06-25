<?php
$connection = mysqli_connect("localhost","root","","employee");

if(mysqli_connect_errno()) {
    echo "Failed to connect to MYSQL :" . mysqli_connect_errno();
    exit();
} else {
    echo "connection established";
}
?>