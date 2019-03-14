<?php
#assign variables var1, var2, and text
    $var1 = 100;
    $var2 = 99;
    $txt = "easy";
#print Math is with the txt variable then peasy.
    echo "Math is " .$txt. " peasy. ";
#print line break for new line
    echo "<br>";
#print value of var1 + value of var2 = the sum of var1 and var2 !
    echo $var1. "  +  " .$var2. " = " .($var1 + $var2). " ! ";
#print 3 line breaks
    echo "<br>";
    echo "<br>";
    echo "<br>";
#assign variable vartime the current hour
    $vartime = date("h");
    echo "The hour is " .$vartime. " that's " ;
#if then statement to check if vartime is even or odd then prints even or odd.  
        if ($vartime % 2 == 0 ) {
            # code...
            echo "even!";
        } else {
            # code...
            echo "odd!";
        }
          

?>
