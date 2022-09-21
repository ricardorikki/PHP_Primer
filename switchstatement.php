<?PHP 
    $title = "Switch Statement";
    include'includes/header.php'
?>

<body>
<h4><?php echo $title ?></h4> 
<?php
//Switch Statements 
$grade = "F";

switch($grade){
    //Cases within the switch statement 
    case 'A':
         echo '<h2>Your grade Letter is: A</h2>';
         break;
    case 'B':
        echo '<h2>Your grade Letter is: B</h2>';
        break;
    case 'C':
        echo '<h2>Your grade Letter is: C</h2>';
        break;
    case 'D':
        echo '<h2>Your grade Letter is: D</h2>';
        break;
    case 'E':
        echo '<h2>Your grade Letter is: E</h2>';
        break;
    default :
        echo '<h2 style="color: red">You have failed</h2>';
        break;
}










?>


<?PHP require'includes/footer.php'?>