<html>
    <body>
        <?php
            $a=10;
            $b=13;
            echo "<h1>Arithmetic Operator</h1>";
            echo "Addition of a and b is      : ".$a+$b."<br>";
            echo "Subtraction of a and b is   : ".$a-$b."<br>";
            echo "multiplication of a and b is: ".$a*$b."<br>";
            echo "division of a and b is      : ".$a/$b."<br>";
            echo "Modulas of a and b is       : ".$a%$b."<br>";
            echo "<br><br>";
            echo "<h1>RELATIONAL Operator</h1>";
            if ($a>$b);
                echo $a ." is greater than " . $b."<br>";
            if ($a<$b);
                echo $b ." is greater than ". $a."<br>";
            if ($a>=$b);
                echo "Both are equal"."<br>";
            if ($a<=$b);
                echo $a ." is less than or equal to ". $b."<br>";
            if ($b<=$a);
                echo $b ." is less than or equal to ". $a."<br>";
            echo "<h1>ASSIGNMENT Operator</h1>";
            $a=$b;
            echo "a=".$a."<br>"."b=".$b;

        ?>

    </body>
</html>