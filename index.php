<?PHP 
    $title = "Home";
    include'includes/header.php'
?>
    <!--Basic HTML-->
    <h4><?php echo $title ?></h4> 
    <br/>

    <?php
    //printing to HTML using echo
    echo "Rikki is the name";
    //echo HTML Tags
    echo'<br/>';
    echo "Second line";
    echo'<br/>';
    echo'<br/>';
    ?>

    <?php
    //Variables need a '$' They are not strongly typed
    $name = "Ricardo Knight";
    $age = 35;
    //echo variables
    echo $name;
    echo '<h3>My name is: '.$name.' </h3>';
    echo '<h3>My age is: '.$age.' l</h3>';
   //Echo using double quotes and interpolation
    echo "<h3>My name is: $name </h3>";

    ?>
<?PHP require'includes/footer.php'?>
