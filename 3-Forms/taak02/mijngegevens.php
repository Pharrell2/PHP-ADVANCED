<?php
echo var_dump($_POST);
foreach($_POST as $key => $value){
    echo " De value is: " . $value . "<br>"; 
}

echo "<body style='background-color:".$_POST['kleur']."'>";
?>
