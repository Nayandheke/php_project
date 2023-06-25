<?php
include 'connection.php';

if(isset($_GET['id'])) {
    $id = $_GET ['id'];
    
    $query = "DELETE  FROM employee_tbl WHERE Employee_ID = '$id'";
    $result = mysqli_query ($connection, $query);

    if($result) {
        echo "Student record deleted successfully";
    } else {
        echo "Error deleting student record:";
    }
} else {
    echo "Invalid student ID:";
    exit;
}

mysqli_close($connection);
?>