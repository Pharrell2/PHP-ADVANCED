<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form name= "form" method="POST" action="advanced-2.php">
    <p>Tekstkleur:
        <select id="kleur" name="color"></p>
        <?php 
        $kleur = ['red' , 'blue' , 'green' , 'brown'];
        foreach($kleur as $kleur){
             echo "<option value= '$kleur' selected>$kleur</option>";
        }
        ?> 
        </select></p> 

        <p>Achtergrondkleur:
        <select id="achtergrondkleur" name="achtergrondkleur"></p>   
        <?php 
        $achtergrondkleur = ['red' , 'blue' , 'green' , 'black'  , 'brown'];
        foreach($achtergrondkleur as $achtergrondkleur){
             echo "<option value= '$achtergrondkleur' selected>$achtergrondkleur</option>";
        }
        ?> 
        </select></p>  
        <p>Naam: <input type name= "naam"></p>
        <p>Leeftijd:<input type name= "leeftijd"></p>
        <p>lengte:<input type name= "lengte"></p>
        <p>hobbies:<input type name= "hobbies"></p>
        <p>sport:<input type name= "sport"></p>
        <p>tabel-border dikte:<input type name= "border-dikte"></p>
        <p>padding:<input type name= "padding"></p>
        <input type="submit" name="submit"value="verstuur">
    </form>

</body>
</html>