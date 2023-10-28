<?php  
    $title = "whiledowhileloop";
    include  'includes/header.php' 
?>
<h1 style = 'color: brown' > While / Do While </h1>
    <h1> While Loop</h1>
    <?PHP
        $grade = 5;
        //infinity loop
        // while($grade < 10 ) {
        //     echo "<p> I AM LESS THAN 10!</p>";
        //Pre-conditioned loop

         while($grade < 10 ) {
           echo '<p> I AM LESS THAN 10!</p>';
           $grade ++;

        }

            echo 'Exit Loop!';
    ?>

    <h1> Do-While Loop</h1>
        

    <?php
    //post conditioned loop
    $grade = 0;
        do {
                echo '<p> I am do while loop</p>';
                $grade ++;

        } while ($grade < 10);
    
    ?>






<?php
    require 'includes/footer.php'
?>