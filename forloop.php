<?php  
    $title = "forloop";
    include  'includes/header.php' 
?>
<h1 style = 'color: PINK' > For Loop </h1>

    <?php
        // For Loops
        for ($count = 0; $count < 10; $count ++) {

            echo '<h1>Hello World!!</h1>';
        }

        for ($count = 0; $count < 10; $count ++){

            echo "<h2>the count is: $count</h2>";
        }

    ?>


<?php
    require 'includes/footer.php'
?>