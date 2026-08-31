<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("header.php");
     $conn = new mysqli("localhost:3306","root","","studentdb");
        if($conn->connect_error)
        {
            die("Connection Failed");
        }  
    $sql ="DELETE FROM student4 WHERE id=2";
    if($conn->query($sql)){
        echo "Record deleted successfully";
    }
    else{
        echo "Error: " ;
        }
        $conn->close();
        ?>
</body>
</html>