<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Numeric Array for Monday to Saturday</h1>
    </header>
    <?php
    include("header.php");
    $days = array(1, 2, 3, 4, 5, 6);
    $days[0] = "Monday";
    $days[1] = "Tuesday";
    $days[2] = "Wednesday";
    $days[3] = "Thursday";
    $days[4] = "Friday";
    $days[5] = "Saturday";
    foreach ($days as $day) {
        echo $day . "<br>";
    }
    include("footer.php"); 
    
    ?>
</body>
</html>