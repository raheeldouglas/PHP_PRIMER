<?php 
   $title = "If Statement";

include 'code snippets/header.php' 
?>

<h1>If-Else Statements </h1>
    <?php
    
    echo '<h2> If Statement </h2>';


    $grade = 50;

    if($grade >= 50){
        echo '<h3 style="color: green"> You HAVE PASSED </h3>';

    }
    else {

        Echo '<h3 style="color: red"> YOU HAVE FAILED </h3>';
    }
    $grade = 'B';
    if($grade == 'A'){
        echo '<h2 style="color: green"> YOU ARE THE GENERAL</h2>';
    }

    elseif($grade == 'B'){
        echo '<h2 style="color: yellow"> YOU DID WELL!</h2>';

    }

    else {
        echo '<h2 style="color: red"> YOU HAVE FAILED!</h2>';

    }

    ?>

<?php require 'code snippets/footer.php' ?>
