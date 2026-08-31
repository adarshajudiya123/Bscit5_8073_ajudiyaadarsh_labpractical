<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <h1>Associative Array for Month</h1>
</header>
<body>

    <?php
    include("header.php");
    $months = array( 
    "January"=>30,
    "February"=>28,
    "March"=>31,
    "April"=>30,
    "May"=>31,
    "June"=>30,
    "July"=>31,
    "August"=>31,
    "September"=>30,
    "October"=>31,
    "November"=>30,
    "December"=>31
    );    
    foreach ($months as $m=>$days) 
    {
        echo $m . "  =>  " . $days . "<br>";
    }
    include("footer.php"); 
    ?>
</body>

</html>