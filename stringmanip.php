<?php  
    $title = "stringmanip";
    include  'includes/header.php' 
?>
<h1 style = 'color: grey' > String Manipulation </h1>

    <?php
        // Concatenation for strings
        $phrase1 = "students who came late ";
        $phrase2 = "in class, stand with rock";
        $name = "oshane roberts";


        echo $phrase1 . ", named Oshane, " . $phrase2;
        echo '<br/>';
        // string transformation
        echo 'uppercase first letter: '. ucfirst($name). '<br/>';
        echo 'uppercase first letter of each word: '. ucwords($name). '<br/>';
        echo 'Upper case: '. strtoupper ($name). '<br/>';
        echo 'lower case: '. strtolower ("THIS IS ALL UPPER CASE"). '<br/>';
        echo '<hr/>';
        echo ' Repeat String: ' . str_repeat($name, 10) . ' <br/>';
        echo ' Repeat String: ' . strtoupper(str_repeat($name, 10)) . ' <br/>';
        echo 'Get a Substring:' . substr($name, 5, 5) . '<br/>';

        echo 'Get position of string:' . strpos($name, 'r') . '<br/>';

        // Returns Null
        // echo 'get position of string: ' . strpos ($combine, 'z'). '<br/>';

        echo 'Find Character "n": ' . strchr ($name, 'n') . '<br/>';
        echo 'Find Character "r": ' . strchr ($name, 'r') . '<br/>';
        echo 'Find Character "s": ' . strchr ($name, 's') . '<br/>';
        echo 'Find Character "e": ' . strchr ($name, 'e') . '<br/>';

        echo 'Find Length of String:' . strlen($name) . '<br/>';

        echo 'Without Trim:' . "A" . "B C D " . "E" . '<BR/>';
        echo 'Trim spaces on both sides: ' . "A" . trim("B C D ") . "E" . "<BR/>";
        echo 'Trim spaces to the left: ' . "A" . ltrim(" B C D ") . "E" . "<BR/>";
        echo 'Trim spaces to the right: ' . "A" . rtrim(" B C D ") . "E" . "<BR/>";
  
        echo 'Replace string with another:' . str_replace ("stand" , "sit", $phrase2) . '<br/>';
  
  
    ?>



<?php
    require 'includes/footer.php'
?>