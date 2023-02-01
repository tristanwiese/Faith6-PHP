



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    
        <?php
        #php -S localhost:4000
        #localhost:4000/faith6/test.php

        #variables and echo(print)
            $ratNum = 100;
            $location = "Langenhovenpark";

            echo "<h1>Pocket Puppy Rattery</h1>";
            echo "<hr>";
            echo "<p>Number one rat breeder in the Freestate area</p>";
            echo "Current rats available: $ratNum<br>";
            echo "Pickup Location: $location<br><br>";
        ?>

        

        <form action="test.php" method="get">
            
            Name:<input type="text" name="name">
            Age:<input type="number" name="age">
            <input type="submit">
        
        </form>
        <br>

        <?php   
            $name = $_GET['name'];
            $age = $_GET["age"];
        ?>


    </body>
</html