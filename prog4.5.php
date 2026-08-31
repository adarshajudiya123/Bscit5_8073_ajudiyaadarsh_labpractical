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
        $sql="SELECT * FROM student4";
        $result=$conn->query($sql);

        if($result->num_rows>0)
        {
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>City</th></tr>";
            while($row=$result->fetch_assoc())
            {
            echo "ID:".$row["id"]."<br>";
            echo "Name:".$row["name"]."<br>";
            echo "Email:".$row["email"]."<br>";
            echo "City:".$row["city"]."<br>";
            echo "<hr>";
            echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["city"]."</td></tr>";
        }
        }
        else
        {
            echo "No Record Found";
        }
        $conn->close();
    ?>
    <?php
    include("footer.php");  
    ?>
</body>
</html>