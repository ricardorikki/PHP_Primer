<?PHP 
    $title = "For Loop";
    include'includes/header.php'
?>
<body>
<h4><?php echo $title ?></h4> 
<?php
//For Loops
//This will print Hello World 10 times
for($count = 0; $count < 10; $count++){

echo '<p>Hello World</p>';

}
//This will count and print each time the code ran
for($count = 0; $count < 10; $count++){

    echo "<p>The count is: $count</p>";
    
    }

?>
<?PHP require'includes/footer.php'?>