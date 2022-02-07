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

   function schrijfkleur ($kleur){
   echo "<div style=\"color:".$kleur."; \">Deze tekst heeft de kleur $kleur</div>";
   }

   schrijfkleur( "blue");
   schrijfkleur( "red");
   schrijfkleur( "yellow");
   schrijfkleur( "brown");
   ?>

</body>
</html> 