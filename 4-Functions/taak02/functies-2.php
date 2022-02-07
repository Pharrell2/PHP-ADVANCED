<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

   function rekenUit ($num1, $num2, $num3){
   $antwoord = $num1 + $num2 + $num3;
   return $antwoord;
   }

   $antwoord1 = rekenUit(7, 17, 9);
   $antwoord2 = rekenUit(79, 44, 23);
   $antwoord3 = rekenUit(15, 90, 45);
   
   echo $antwoord1 . "<br>";
   echo $antwoord2 . "<br>";
   echo $antwoord3 . "<br>";
   ?>

</body>
</html> 