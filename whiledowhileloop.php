<?PHP 
    $title = "While/Do While";
    include'includes/header.php'
?>

<body>
<h4><?php echo $title ?></h4> 

<?php
$grade = 0;
//Infinite Loop
//while($grade < 10){
//echo '<p>I am less than 10</p>';
//}
while($grade < 10){
    echo '<p>I am less than 10</p>';
    $grade++;

    }
echo 'Exit Loop';

?>

<h1>Do While Loop</h1>
<?php
//Post condition loop
$grade = 0;
do{
    echo '<p>I am while loop</p>'; 
    $grade++;
}
while($grade < 10);
echo 'Exit Loop';






?>

<?PHP require'includes/footer.php'?>