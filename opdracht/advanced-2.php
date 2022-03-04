<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
echo "<body style='background-color:".$_POST['achtergrondkleur']."'>";
?>

<?php
    function maakRij($kleur, $backcolor){
        echo "<tr>";
        echo "<td style='border: ".$_POST['border-dikte']."px solid; color:".$_POST['color']."; padding:".$_POST['padding']."px;'>$kleur</td>";
        echo "<td style='border: ".$_POST['border-dikte']."px solid; color:".$_POST['color']."; padding:".$_POST['padding']."px;'>$backcolor</td>";
        echo "</tr>";
    }

    $mezelf = [
    'naam'     => $_POST['naam'],
    'leeftijd' => $_POST['leeftijd'],
    'lengte'   => $_POST['lengte'],
    'hobbies'  => $_POST['hobbies'],
    'sport'    => $_POST['sport'],
    ]; 

    echo "<table style='border:  ".$_POST['border-dikte']."px solid' width='300' cellspacing='0'>";

    foreach($mezelf as $key =>$me){
         maakRij($key, $me);
    }
    echo "</table>"
?>
</body>
</html>