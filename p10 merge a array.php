<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr = array(1, 2, 3, 4, 5);
    echo "Array 1:<br>";
    foreach ($arr as $value) {
        echo $value . "<br>";
    }
    $arr2 = array(6, 7, 8, 9, 10);
    echo "<br>Array 2:<br>";
    foreach ($arr2 as $value) {
        echo $value . "<br>";
    }
    $merged = array_merge($arr, $arr2);
    echo "<br>Merged Array:<br>";
    foreach ($merged as $value) {
        echo $value . "<br>";
    }
    ?>
</body>
</html>