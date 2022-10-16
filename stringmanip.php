<?php 
   $title = "String Manpulation";

include 'code snippets/header.php'
 ?>

    <h1>How to manipulate a string </h1> 

    <?php
    //Concatenation of strings
    $phrase1 = "student who came late";
    $phrase2 = "go to the back of the class";
    $name = "Raheel Douglas";
    echo $phrase1 . ", named Gin,  ". $phrase2;        
    echo '<br/>';
    echo '<hr/>';

   //String Transformation
   echo 'Uppercase first letter: ' . ucfirst($name). '<br/>';
   echo 'Uppercase first letter of each word: ' . ucwords($name). '<br/>';
   echo 'Upper case: ' . strtoupper($name). '<br/>';
   echo 'Lower case: ' . strtolower("THIS WAS LOWER CASE"). '<br/>';
   echo '<hr/>';
   echo 'Repeat String: ' .strtoupper(str_repeat('Douglas',5)). '<br/>';
   echo 'Repeat String: ' . str_repeat('Douglas',5). '<br/>';
   echo 'Get a Substring: ' . substr($name, 4, 9). '<br/>';

   echo 'Get positon of string: ' . strpos($name, 'w'). '<br/>';
   // Returns Null
   //echo 'Get position of string: ' . strpos($combine,'z'). '<br/>';

   echo 'Find Charchter "R": ' . strchr($name, 'R').'<br/>';
   echo 'Find Charchter "r": ' . strchr($name, 'r').'<br/>';
   echo 'Find Charchter "s": ' . strchr($name, 's').'<br/>';
   echo 'Find Charchter "e": ' . strchr($name, 'e').'<br/>';

   echo 'Find Length of String: ' . strlen($name). '<br/>';

   echo 'Without Trim: ' . "A" . "B C D " . "E" . '<br/>';
   echo 'Trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
   echo 'Trim spaces to the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
   echo 'Trim spaces to the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';

   echo ' Replace string with another: '. str_replace("stand", "sit", $phrase2 ) . '<br/>';
   ?>


<?php require 'code snippets/footer.php' ?>
