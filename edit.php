<?php
include 'connection.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM employee_tbl WHERE Employee_ID = '$id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
}

if(!$connection){
    echo "No Connection with Database";
}else{
    if(isset($_POST['submit'])){
        $Name = $_POST ['Name'];
        $Department = $_POST ['Department'];
        $Location = $_POST ['Location'];
        $Project = $_POST ['Project'];

        $query = "UPDATE employee_tbl SET Name = '$Name' ,Department = '$Department' , Location = '$Location', Project = '$Project' WHERE Employee_ID = '$id'";
        echo "$query <br>";
        $res = mysqli_query($connection, $query);
        if($res){
            echo "Date Edited Succesfully !!";
            header("Location: employee.php");
            exit();
        }else {
            echo "Error in data Insert". mysqli_error($connection);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee Data</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Full Name</label>
        <input type="text" name="Name" value="<?php echo $row['Name'] ?>"><br>

        <label for="">Department</label>
        <input type="text" name="Department" value="<?php echo $row['Department'] ?>"><br>

        <label for="">Location</label>
        <input type="text" name="Location" value="<?php echo $row['Location'] ?>"><br>

        <label for="">Project</label>
        <input type="text" name="Project" value="<?php echo $row['Project'] ?>"><br>
        
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>