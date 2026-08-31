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
        $multi = array(
            array("ASUS ","F15 "," 80000/-"),
            array("HP ","Zbook "," 55000/-"),
            array("HP ","Victus ","  65000/-"),
            array("Asus ","TUF F17 ","50000/-")
        );

        for($i=0;$i<4;$i++){
            for($j=0;$j<3;$j++){
                echo $multi[$i][$j]."     "; 
            }
            echo " <br> ";
        }
         include("footer.php"); 
    ?>

</body>
</html>