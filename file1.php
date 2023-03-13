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
    echo $arr1[0];

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

    $len = count($arrexplode);  //counts the number of elements in the array
    $min = min($arrexplode);    //takes the smallest number
    $max = max($arrexplode);    //takes the biggest number
    echo $len . " " . $min . " " . $max;

    echo "<br><br>";

    $watches = array(   array("fossil", "brown leather", 6000),
                        array("obaku", "mesh type", 5500),
                        array("guess", "stainless", 4500));
?>

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