<?php 
    $title = "INDEX";
    include  'includes/header.php'
?>



    <!-- Basic HTML -->
    <h1>Hello HTMP!! - PHP Primer</h1>

    <?php

        // Printing to HTML using echo
        echo 'Hello PHP!!';
        echo '<br/>';
        echo 'second line';
        echo '<br/>';
    ?>

<?php 
    $name= 'Oshane Roberts';
    $age= "30";
    $address= "Old Harbour";
    echo $name;

    echo "<h1> My Name is: $name, I am $age years old and i live in 
    $address</h1>";

?>




<!-- <h1>Welcome to My Farm</h1>

    <?php
    // This is a PHP script embedded within the HTML
    $farmName = "Green Fields Farm";
    $location = "Rural Countryside";
    $description = "We grow a variety of crops and raise healthy livestock.";

    echo "<p>$farmName is located in the $location. $description</p>";
    ?>

    <h2>Our Crops</h2>
    <ul>
        <li>Wheat</li>
        <li>Corn</li>
        <li>Tomatoes</li>
        <li>Apples</li>
    </ul>

    <h2>Our Livestock</h2>
    <ul>
        <li>Cows</li>
        <li>Chickens</li>
        <li>Sheep</li>
        <li>Pigs</li>
    </ul> -->


<!-- </body>
</html> -->


<?php
    require 'includes/footer.php'
?>