<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $month=date("n");
         if ($month==1) {
              echo "Current month is January";
         }
         if ($month==2) {
              echo "Current month is February";
         }
         if ($month==3) {
              echo "Current month is March";
         }
         if ($month==4) {
              echo "Current month is April";
         }
         if ($month==5) {
              echo "Current month is May";
         }
         if ($month==6) {
              echo "Current month is June";
         }
         if ($month==7) {
              echo "Current month is July";
         }
         if ($month==8) {
              echo "Current month is August";
         }if ($month==9) {
              echo "Current month is September";
         }if ($month==10) {
              echo "Current month is October";
         }if ($month==11) {
              echo "Current month is November";
         }if ($month==12) {
              echo "Current month is December";
         }
         else if ($month>12) {
              echo "Invalid Month Name";
         }
    
        ?>
</body>
</html>