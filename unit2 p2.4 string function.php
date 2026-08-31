<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$str="Welcome to php";
echo "<h2>1  strlen()</h2>";
echo "string:$str";
echo "Length= ".strlen($str);
echo "<hr>";

echo "<h2>2 strpos() //find some specific word,letter</h2>";
echo "Position of 'PHP' = " . strpos($str, "php");
echo "<hr>";

echo "<h2>3 strwordcount()</h2>";
echo "Word Count = " . str_word_count($str);
echo "<hr>";


echo "<h2>4 strrev()</h2>";
echo "reverse = " . strrev($str);
echo "<hr>";

echo "<h2>5 str_replace()</h2>"; 
echo "replace string= " . str_replace('php','python',$str);
echo "<hr>";


echo "<h2> 6 strtolower and upper </h2>";
echo strtolower($str);
echo strtoupper($str);
    ?>
</body>
</html>