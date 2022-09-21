<?PHP 
    $title = "Function";
    include'includes/header.php'
?>
<body>
<h4><?php echo $title ?></h4> 
    
<?PHP

//Definind a Function

function writeMessage(){
    echo "My Name is Ricardo Knight <br/>";
}


//Calling a Function

echo writeMessage();

//Functions with parameters

function addFunction($num1,$num2){

$sum = $num1 + $num2;
echo "The sum of $num1 and $num2 is: $sum <br/>";
}
//Calling the para Function

$num = 500;
addFunction(2,20);
addFunction($num,20);

//Pass by Reference - use ampersand "&" in para
function changeNum(&$num){
    $num = $num + 10;
}
changeNum($num);
echo $num . '<br/>';

function returnProduct($num1, $num2){
    $prod = $num1 * $num2;
    return $prod;
}

$return_value = returnProduct(10,5);
echo $return_value;
?>

<?PHP require'includes/footer.php'?>