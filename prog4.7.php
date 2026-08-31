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
        $sql="UPDATE student4
        SET name='suresh',
        email='suresh@gmail.com',
        city='sawarkundala'
        WHERE id=4";
        if($conn->query($sql)){
            echo "<br>Record Successfull";
        }
        else {
            echo "error";
        }
        $conn->close();
        ?>
</body>
</html>