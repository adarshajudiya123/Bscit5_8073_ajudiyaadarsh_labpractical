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
    $conn =new PDO('mysql:host=localhost;dbname=studentdb','root','');
    $sql ="Delete FROM student4 WHERE id=3";
    $conn->exec($sql);
    echo "Record Deleted Successfully";

    ?>
</body>
</html>