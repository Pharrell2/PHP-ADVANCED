<?php
echo "Jij komt uit klas: " . $_GET['school'];
?> 
  6  2-Loops/taak04/loops-foreach-deel2.php 
@@ -8,10 +8,11 @@
    <title>Document</title>
</head>
<body>
<form class= "Form">

<form class= "Form" method="GET" action="JEBEM.php">
    <label>Klassenformulier</label> <br>
    <label>Ik zit in klas:</label> 
<select>
<select id="school" name="school">
<?php
$Klas = "8B";
$klassen = ['8A' , '8B' , '8C' , '8D' , '8E' , '9A' , '9B' , '9C' , '9D' , '9E'];
</select> <br>
<button class= "btn">Verzend</button>
</form>

</body>
</html>