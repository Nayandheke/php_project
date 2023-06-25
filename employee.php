<?php
include 'connection.php';

$sql = "SELECT * FROM employee_tbl";
$query = $connection->query($sql);

if ($query->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>"; 
    echo "<th>Department</th>";
    echo "<th>Location</th>";
    echo "<th>Project</th>";
    echo "<th colspan='2'>Action</th>";
    echo "</tr>";


    while ($row = $query->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Employee_ID'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Department'] . "</td>";
        echo "<td>" . $row['Location'] . "</td>";
        echo "<td>" . $row['Project'] . "</td>";
        echo "<td>
            <a href='edit.php?id=", $row['Employee_ID']."'>Edit</a>
            <a href='delete.php?id=", $row['Employee_ID']."'>Delete</a>
        </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No users found.";
}
mysqli_close($connection);
?>