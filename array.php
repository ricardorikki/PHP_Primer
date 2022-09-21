<?PHP 
    $title = "Array and Printouts";
    include'includes/header.php'
?>
<body>
<h4><?php echo $title ?></h4> 
<?php
//A normal varible
$num = 3;

//An array
$name = array("Ricardo","Nicky","Shelly","Patrick","Paul","Henry","Philip","Garfield","Kelly","Jane");

echo $name[3];
echo "<p>$name[5]</p>";

$size = count($name);
echo "<p>Array numbers is size: $size</p>";

//For Loop
for($count = 0; $count <10; $count++){
    echo "<p>$name[$count]</p>";
}


?>


<?PHP require'includes/footer.php'?>