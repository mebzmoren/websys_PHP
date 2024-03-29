<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seatwork</title>
</head>

<?php
    $arr1 = array(2, 5, 7, 10, 12);
    $arr3 = array(4, 6, 2, 22, 11);
    echo $arr1[0] . '<br>';
    echo $arr3[0];

    echo "<br><br>";

    for($i = 0; $i < count($arr1); $i++){
        echo $arr1[$i] . "<br>";
    }

    echo "<br>";

    foreach($arr1 as $v){
        echo $v. "<br>";
    }

    echo "<br>";

    $arrimplode = implode(" * ", $arr1);    //converts array into string
    echo "String: " . $arrimplode;

    echo "<br><br>";

    $arrexplode = explode(" * ", $arrimplode);    //converts string to array
    foreach($arr1 as $v){
        echo $v. "<br>";
    }

    echo "<br>";

    if(in_array(2, $arrexplode)){   //check if an element is in the array
        echo true;
    }

    echo "<br><br>";

    $arr2 = array(  "sans rival" => "silvanas",
                    "red ribbon" => "ensaymada",
                    "goldilocks" => "polvoron");

    echo $arr2['red ribbon'];

    echo "<br><br>";

    //sorting according to value
    asort($arr2);   //sorts into ascending order
    foreach($arr2 as $i){
        echo $i . "<br>";
    }

    echo "<br>";

    arsort($arr2);  //sorts into descending order
    foreach($arr2 as $i){
        echo $i . "<br>";
    }

    echo "<br>";

    //sorting acording to key
    ksort($arr2);   //sorts into ascending order
    foreach($arr2 as $i => $v){
        echo $i . "<br>";
    }

    echo "<br>";

    krsort($arr2);  //sorts into descending order
    foreach($arr2 as $i => $v){
        echo $i . "<br>";
    }

    echo "<br>";

    sort($arr3);    //sorts into ascending order
    for($i = 0; $i < count($arr3); $i++){
        echo $arr3[$i];
    }

    echo "<br>";

    rsort($arr3);    //sorts into descending order
    for($i = 0; $i < count($arr3); $i++){
        echo $arr3[$i];
    }

    echo "<br>";

    $arr4 = array("abc", 123);  //an array can contin different types
    for($i = 0; $i < count($arr4); $i++){
        echo $arr4[$i];
    }

    echo "<br><br>";

    $len = count($arrexplode);  //counts the number of elements in the array
    $min = min($arrexplode);    //takes the smallest number
    $max = max($arrexplode);    //takes the biggest number
    echo $len . " " . $min . " " . $max;

    echo "<br><br>";
    
    //seatwork
    $watches = array(   array("fossil", "brown leather", 6000),
                        array("obaku", "mesh type", 5500),
                        array("guess", "stainless", 4500));

    $var1 = 10;
    $var2 = "dog";
    echo isset($var1) . "<br>"; //checks if the variable has an assigned value
    echo isset($var3) . "<br>";
    echo isset($var2) . "<br>";
    unset($var1);               //destroys the variable
    echo isset($var1) . "<br>";
    echo empty($var3) . "<br>"; //checks if variable is empty

    echo "<br>";

    //strings
    echo 'cat<br>';                                     //another way to display a string
    echo "{$var2}!!<br>";
    $str1 = "HELLO";
    $str2 = "world";
    $str3 = "hello world";
    $str4 = " hi ";
    echo $str1 .= $str2 . '<br>';                       //another way to concatinate a string
    echo strtolower($str1) . '<br>';                    //converts the string into all lowecase
    echo strtoupper($str1);                             //converts the string into all uppercase
    echo ucfirst($str2) . '<br>';                       //converts 1st letter of the string into uppercase
    echo ucwords($str3) . '<br>';                       //converts 1st letter of all the words in the string into uppercase
    echo strlen($str1) . '<br>';                        //returns length of the string
    echo strlen($str4) . '<br>';
    $str5 = trim($str4);                                //removes the spaces in the string
    echo strlen($str5) . '<br>';
    echo strstr($str3, "hello") . '<br>';               //returns the string in the string if found
    echo str_replace("hello", "hi", $str3) . '<br>';    //replaces a word in a strin to another word    

    echo "<br>";
    
    $str = "Apple of my eye";
    echo str_replace("Apple", "banana", $str);

    echo "<br><br>";
    
    //seatwork
    $str1 = "Juan Luna<br><br>";
    echo "STRING IS: " . $str1;
    $eName = explode(" ",$str1);
    $fName = $eName[0];
    $lName = $eName[1];
    echo "FirstName: " . $fName . "<br>";
    echo "LastName: " . $lName . "<br>";
?>

<!--seatwork-->
<body>
    <table border = "1">
        <thead>
            <th colspan="3">Watches Available</th>
        </thead>
        <tr>
            <td><b>Brand</b></td>
            <td><b>Strap Type</b></td>
            <td><b>Price</b></td>
        </tr>
        <?php
            for($i = 0; $i < count($watches); $i++){
                echo "<tr>";
                for($j = 0; $j < 3; $j++){
                    echo "<td>" . $watches[$i][$j] . "</td>"; 
                }
                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>