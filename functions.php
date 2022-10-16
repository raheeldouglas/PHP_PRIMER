<?php 
   $title = "Functions";

include 'code snippets/header.php' 
?>

    <h1>How to write functions in PHP </h1> 

    <?php
    // Defining a function in php

    function writemessage(){
        echo "You are a really bad person, Hope you have a bad day! <br/>";
    }
    
    // calling a function
    writemessage();

    echo "<hr/>";
    writemessage();

    // Function with parameters

    function addFunction($num1, $num2){

        $sum = $num1 + $num2;
        $num2 = $num2 + 1;
        echo "The sum of $num1 and $num2 is: $sum <br/>";
    }
 // pass by reference - use ampersand in parameter
    function changeNum(&$num){
        $num = $num + 10;
    }

    function returnProduct($num1, $num2){
        $prod = $num1* $num2;
        return $prod;
    }
    
    $num = 200;
    addFunction(5, 7);
    addFunction(10, $num);
    echo $num;
    addFunction('10', "30");
    
    changeNum($num);
    echo $num . '<br/>';

    $return_value = returnProduct(10, 300);
    echo $return_value . '<br/>';

    ?>

<?php require 'code snippets/footer.php' ?>
