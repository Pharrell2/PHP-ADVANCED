<?php
   $dagen = ['Maandag','Dinsdag','Woensdag','Donderdag','Vrijdag','Zaterdad','Zondag'];

   $uList = "I am very interested to learn about: <br>";
   $ulist .= "<ul>";
   foreach($dagen as $dagen){
      $uList .= "<li>$dagen</li>";
   }
   $uList .= "</ul>";
   echo $ulist;
?>