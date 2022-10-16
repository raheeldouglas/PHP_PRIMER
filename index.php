
<?php 
   $title = "Homepage";
   include 'code snippets/header.php' 
?>

    <h1>Hello HTML- PHP Primer</h1>

    <?php 
    echo 'Raheel Douglas PHP';
    echo '<br/>';
    echo 'Second Line in PHP';
    ?>

<?php 
   $name = 'Raheel Douglas';
   $age = '30';
   echo '<br/>';
   echo $name;
   echo '<h1> My Name Is: '.$name.' </h1>';
   
   echo '<h1> My Age Is: '.$age.' </h1>';

   echo "<h1> My Name is: $name </h1>";

?>
<button type="button" class="btn btn-info"> CLICK ME </button>

<a href= "https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com </a>

<?php require 'code snippets/footer.php' ?>
