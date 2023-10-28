<?php  
    $title = "ifStatement";
    include  'includes/header.php' 
?>
    
<h1 style = 'color: red' > If-ELSE Statement </h1>
    <?php

        // An if statement that will carry out an action based on the value of the variable


        $grade= 80;

        if ($grade >= 50) {
            echo '<h3 style= "color: green"> You Have Passed </h3>';
        }
        else {
            echo '<h3 style= "color: red"> You Have Failed </h3>';
        }

        $grade= 'A';
        //If-Else if-else
         if($grade == 'A' || $grade == 'a') {
            echo "<h2 style= 'color: purple'> You Are a Superstar!! </h2>";
         }
         elseif($grade == 'B' || $grade == 'b') {
            echo "<h2> You are almost a superstar!! </h2>";
        }
        else {
            echo "<h2> You are not a superstar!! </h2>";
        }

    ?>
    


    <?php
    require 'includes/footer.php'
?>