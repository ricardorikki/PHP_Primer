<?PHP 
    $title = "Date & Time Manipulation";
    include'includes/header.php'
?>
<body>

<h4><?php echo $title ?></h4> 

    
    <?PHP
    $dateNow = getDate();
    echo "Today's Date: <br/>";
    echo $dateNow['mday'] .'<br/>';
    echo $dateNow['mon'] .'<br/>';
    echo $dateNow['year'] .'<br/>';
    echo '<br/>';
    echo "Today's Date: <br/>";
    echo $dateNow['mon'] .'/'.$dateNow['mday'] .'/'. $dateNow['year'] .'<br/>';
    
    echo time(). '<br/>';
    
    print date("m/d/y/ G.i:s <br/>", time());
    echo '<br/>';
    echo '<br/>';

    print "Today is: ";
    print date("F j,  Y, \a\\t g:i a", time());


    ?>


<?PHP require'includes/footer.php'?>