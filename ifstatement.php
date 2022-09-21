<?PHP 
    $title = "If Statement";
    include'includes/header.php'
?>

<body>
    <!--<h3 style="color: red"></h3>-->
    <h4><?php echo $title ?></h4> 
    <?php
    //If Statement
   

    $grade = 40;

    if($grade >=50)
    
        echo '<h3 style="color: green"> You Passed</h3>';
    
    else
        echo '<h3 style="color: Red"> You Failed</h3>';
   echo '</br>';
   $gradeLetter = "A";
   $grade  = 90;
   //If Else If Else 
   if($grade  >=50 && $grade <54) {
         $gradeLetter = "C-";
         echo '<h3 style="color: green"> You Passed</h3>';
         echo '<h3 style="color: green"> Your grade is: '.$grade.'</h3>';
         echo '<h3 style="color: green"> Your grade letter is: '.$gradeLetter.'</h3>';
    }
    else if($grade  >=55 && $grade <=60) {
        $gradeLetter = "C+";
        echo '<h3 style="color: green"> You Passed</h3>';
        echo '<h3 style="color: green"> Your grade is: '.$grade.'</h3>';
        echo '<h3 style="color: green"> Your grade letter is: '.$gradeLetter.'</h3>';
    }

   else if($grade  >=61 && $grade <=70) {
         $gradeLetter = "B-";
         echo '<h3 style="color: green"> You Passed</h3>';
         echo '<h3 style="color: green"> Your grade is: '.$grade.'</h3>';
         echo '<h3 style="color: green"> Your grade letter is: '.$gradeLetter.'</h3>';
    }
    else if($grade  >=71 && $grade <=80) {
        $gradeLetter = "B+";
        echo '<h3 style="color: green"> You Passed</h3>';
        echo '<h3 style="color: green"> Your grade is: '.$grade.'</h3>';
        echo '<h3 style="color: green"> Your grade letter is: '.$gradeLetter.'</h3>';
   }
   else if($grade  >=81 && $grade <=100) {
        // $gradeLetter = "B+";
         echo '<h3 style="color: green"> You Passed</h3>';
         echo '<h3 style="color: green"> Your grade is: '.$grade.'</h3>';
         echo '<h3 style="color: green"> Your grade letter is: '.$gradeLetter.'</h3>';
}
    else if( $grade <50){
         $gradeLetter = "F";
         echo '<h3 style="color: red"> Sorry but You failed</h3>'; 
         echo '<h3 style="color: green"> Your grade is: '.$grade.'</h3>';
         echo '<h3 style="color: red"> Your grade letter is: '.$gradeLetter.'</h3>';

    }
 
  

   ?> 
<?PHP require'includes/footer.php'?>