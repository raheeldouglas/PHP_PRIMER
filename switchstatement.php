<?php 
   $title = "Switch Statements";

include 'code snippets/header.php' 
?>

    <h1>Switch Statements </h1> 

    <?php
    
    $grade = 'A';

    switch($grade){

        case 'A':
            echo '<h2 style="color: green"> YOU ARE THE GENERAL!</h2>';
            break;
        case 'B';   
            echo '<h2 style="color: yellow"> YOU DID WELL!</h2>';
            break;
        default:
        echo '<h2 style="color: red"> YOU HAVE FAILED!</h2>';


    }
    
    ?>

<?php require 'code snippets/footer.php' ?>
