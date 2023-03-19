<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkpoint</title>
</head>
<body>
    <?php
        $count1 = 0;
        $count2 = 0;
        //Create an associative array
        $resto = array("coffeebean" => "coffee",
                        "sansrival" => "cakes",
                        "stateresa" => "filipinofood",
                        "2story" => "koreanfood",
                        "mooon" => "mexicanfood");

        //Create a foreach loop to access each element.
        foreach($resto as $key => $value){
            echo "$key has $value<br>";
        }

        //Pass every element to a function and display the value there.
        function display($key, $value, $count){
            echo "$count.$key has $value<br>";
        }

        foreach($resto as $key => $value){
            ++$count1;
            display($key, $value, $count1);
        }
        //Search for the string “koreanfood” using strcmp function. Prompt a message if a match is found.
        foreach($resto as $key => $value){
            ++$count2;
            if(strcmp($value, "koreanfood") == 0){
                display($key, $value, $count2);
            }
        }
    ?>
</body>
</html>