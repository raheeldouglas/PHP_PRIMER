<?php 
   $title = "Array and Printouts";

include 'code snippets/header.php'
 ?>

<h1><?php echo $title?> </h1>

<?php
// a variable
 $num = 3;

 //an array
 // only one datatype
 $numbers = array(1,2,3,4,5,6,7,8,9,10,90,60,81,23,4,67,99);
// you can access the value in a subscript of the array using the index
 echo $numbers[5];

 echo "<P>$numbers[9]</P>";

 $size = count($numbers);

 echo "<p>Array Numbers is size: $size </p>";

 for($count = 0; $count < $size; $count++){

 echo "<p>$numbers[$count]</p>";
 }

?>
<?php require 'code snippets/footer.php' ?>
