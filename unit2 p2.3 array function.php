<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"1) array_change_key_case( CASE_LOWER/CASE_UPPER). ";
        $var = [
            "Name" => "Raj",
            "AGE" => 20,
            "City" => "Rajkot"
             ];
            echo "";
            echo "Lower Case";
            print_r(array_change_key_case($var, CASE_LOWER));
            echo "";
            echo "Upper Case";
            print_r(array_change_key_case($var, CASE_UPPER));

        echo"2) array_chunk //array of months ";
            $var = array(
            "January", "February", "March", "April",
            "May", "June", "July", "August",
            "September", "October", "November", "December");
        
        print_r(array_chunk($var, 3));

        echo"3) array_count_values()"; 
        $color = array("Red","Blue","Green");
            print_r( array_count_values($color));

        echo"4) array_combine())"; 
            $color2 = array("pink","cyan","purple");
            array_combine($color, $color2);
        echo"5) array_pop() ";
            $num=array(20,30,54,60);
            print $num;
            print_r(array_pop($num) );
            print $num;
        echo "6) array_push() ";
        print_r(array_push(40,$num) );
        print $num;
        echo "7) array_unshift() ";
        echo "8) array_shift(). ";
    ?>
</body>
</html>