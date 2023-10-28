<?php  
    $title = "functions";
    include  'includes/header.php' 
?>
    <h1 style = 'color: yellow' > Functions </h1>

    <?php

        /*Defining a Function*/

        function writeMessage(){
            echo "You are really a nice person, Have a great time! <br/>";


        }

        //calling a function 

        // writeMessage();
        // writeMessage();
         writeMessage();
        
        echo "<hr/>";

        writeMessage();
        
        // Functions with parametres 


        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum <br/>";

        }

        function changeNum($num) {

            $num = $num + 10;
            // $num+= 10;
        }


        addFunction (10 , 30 );

        $num = 500;

        addFunction (10 , $num);

        addFunction ('10' , '50');

        changeNum ($num);
        echo $num . '<br/>';

        function returnProduct ($num1, $num2){
            $prod = $num1 * $num2;

            return $prod;
        }

        $num = 500;
        addFunction (10, 20);
        addFunction (10, $num);
        addFunction ('10', '50');

        changeNum ($num);
        echo $num . '<br/>';

        $return_value = returnProduct (10, 200);
        echo $return_value . '<br/>';




    ?>





<?php
    require 'includes/footer.php'
?>