<?PHP 
    $title = "String Manipulation";
    include'includes/header.php'
?>

<body>
<h4><?php echo $title ?></h4> 
 <?PHP 
    //Concatenation of strings
    $phrase1 = "From Charlie George to the magic boots of Brady
                Ian Wright and the wonder of Henry. I've always been and I'll always been a Gooner.
                She wore She wore. She wore a yellow ribbon.";

    $phrase2 = "She said it's for the Arsenal and we're going to Wembley";
    $name = "ricardo knight";

    echo $phrase1." Wembley, Wembley. <br/>".$phrase2;
    echo '<hr/>';
    //String tansformation
    
    echo '<br/>';
    echo 'Uppercase first letter: '. ucfirst($name).'<br/>';
    echo 'Uppercase first letter of each word: '. ucwords($name).'<br/>';
    echo 'Uppercase: '. strtoupper($name).'<br/>';
    echo 'Lowercase: '. strtolower($name).'<br/>';
    echo '<hr/>';
    echo 'Repeat String: ' . str_repeat("F",10) .'<br/>';
    echo 'Repeat String: ' .strtolower(str_repeat("F",10)) .'<br/>';
    echo 'Get a Substring: ' .substr($name,4,10) .'<br/>';
 
    echo 'Get a position of string: ' .strpos($name,"k") .'<br/>';
    //Returns Null
    echo '<hr/>';
    echo 'Find Character "k": ' .strchr($name,'k') .'<br/>';
    echo 'Find Character "r": ' .strchr($name,'r') .'<br/>';
    echo 'Find Character "i": ' .strchr($name,'i') .'<br/>';
    echo 'Find Character "o": ' .strchr($name,'o') .'<br/>';
    echo 'Find Character "c": ' .strchr($name,'c') .'<br/>';
    echo '<hr/>';
    echo 'Find the Length of a string: ' .strlen($name,) .'<br/>';
    
    echo 'Without Trim: ' ."A"." B C D "."E" .'<br/>';
    echo 'Trim spaces to the left sides: ' ."A". ltrim(" B C D ")."E" .'<br/>';
    echo 'Trim spaces on both side: ' ."A". trim(" B C D ")."E" .'<br/>';
    echo 'Trim spaces to the right side: ' ."A". rtrim(" B C D ")."E" .'<br/>';
    
    
    echo 'Replace string with another: ' .str_replace("Wembley","Ricardo",$phrase2 ).'<br/>';
   


 ?>   
<?PHP require'includes/footer.php'?>