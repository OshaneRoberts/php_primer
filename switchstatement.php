<?php  
    $title = "switchstatement";
    include  'includes/header.php' 
?>
    <h1 style = 'color: blue' > Switch Statements </h1>

    <?php
        $grade = 'A';

        switch ($grade){
            case 'A'  :
                echo "<h2 style= 'color: purple'> You Are a Superstar!! </h2>";
                    break;
            case 'B' :
                echo "<h2 style= 'color: blue'> You Are almost a Superstar!! </h2>";
                    break;
            default :
                echo "<h2 style= 'color: red'> You Are not a Superstar!! </h2>";
                break; 
        }
    



    ?>


<?php
    require 'includes/footer.php'
?>