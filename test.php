<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Seatwork</title>
</head>
<body>
    <?php
        $count1 = 1;
        $restaurants = array (  "coffeebean" => "coffee", 
                        "sansrival" => "cakes",
                        "stateresa" => "filipinofood",
                        "2story" => "koreanfood",
                        "mooon" => "mexicanfood");
        echo "Restaurants of Dumaguete and their specialties:<br>";

        foreach($restaurants as $place => $food){
            echo $count1. ". " . $place . " has " . $food . "<br>" ;
            $count1++;
        }

        echo "<br>";

        $count2 = 1;
        function display($key, $value){
            echo $key . "has a value of " . $value . "<br>";
        }

        foreach($restaurants as $place => $food){
            display($food, $count2);
            $count2++;
        }

        echo "<br>";

        foreach($restaurants as $place => $food){
            if(strcmp($food, "koreanfood") == 0){
                echo "The food " . $food . " exists.";
            }
        }
    ?>
</body>
</html>