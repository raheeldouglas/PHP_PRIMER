<?php 
   $title = "While and Do While Loop";

include 'code snippets/header.php'
 ?>

<h1> While Loops </h1>
<?php
 $grade = 0;
while($grade <10){
    echo '<p> I am less than 10! </p>';
    $grade++;
}

echo 'Exit Loop';

// Infinate While Loop
 /*while($grade <10){
    echo '<p> I am less than 10! </p>';
 }
*/
?>


<h1>DO While Loops </h1>

<?php

// This is a post condition loop
$grade = 0;
 do{
    echo '<p> I am a Do While Loop! </p>';
    $grade++;
 }while ($grade <10);
 
 echo 'Exit Loop';
?>

<?php require 'code snippets/footer.php' ?>
