<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost:3306", "root", "", "test");
        if($conn->connect_error){
            die("Connection Failed : " . $conn->connect_error);
        }
    $queries =
        [   
        "SELECT DAYOFWEEK(CURDATE()) AS DAYOFWEEK",
        "SELECT WEEKDAY(CURDATE()) AS WEEKDAY",
        "SELECT DAYOFMONTH(CURDATE()) AS DAYOFMONTH",
        "SELECT DAYOFYEAR(CURDATE()) AS DAYOFYEAR",
        "SELECT DAYNAME(CURDATE()) AS DAYNAME",
        "SELECT MONTH(CURDATE()) AS MONTHNUMBER",
                "MONTHNAME (CURDATE()) AS MONTHNAME",
        "SELECT DAYNAME(CURDATE()) AS DayName",
        "SELECT MONTH(CURDATE()) AS MonthNumber,
                    MONTHNAME(CURDATE()) AS MonthName",
        "SELECT WEEK(CURDATE()) AS WeekNumber,
                    NOW() AS CurrentDateTime", 
        "SELECT SYSDATE() AS SystemDateTime,"
        ];

        foreach($queries as $sql){
        echo "<br>";
        $result =$conn->query($sql);
        if($result){
            while ($rows=$result->fetch_assoc()){
                foreach($rows as $key => $value){
                    echo "<b>$key :</b> $value <br>";
                }
            }
        }
    
    else {
        echo "Query error...";
    }
    }
  $conn->close();
    ?>


    ]
    ?>
</body>
</html>