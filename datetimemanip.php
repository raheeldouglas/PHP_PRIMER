<?php 
   $title = "Time & Date";

include 'code snippets/header.php'
 ?>

    <h1>Example of Date and Time Manipulation </h1> 

    <?php
    $datenow = getdate();
    echo "Today's Date <br/>";
    echo $datenow['mday']. '<br/>';
    echo $datenow['mon']. "<br/>";
    echo $datenow['year']. "<br/>";

    echo "Today's Date is: " .$datenow['mon'] . '/' . $datenow['mday'] . '/' . $datenow['year']. "<br/>";

    echo time() . '<br/>';

    print date("m/d/y G.i:s<br>", time()) .  '<br/>';
    print "Today is " ;
    print date ("j of F Y, \a\\t g.i a", time());
    
    ?>

<?php require 'code snippets/footer.php' ?>
