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
        //printing
        echo "Hello!";
        print("Hello!");        //another way to print
        echo "Hello" . "World<br>"; //to concatenate strings

        //varrialbles
        $var1 = "Hello";        //to declare a variable
        $var2 = 1234;
        $var3 = null;
        $var4 = 1.0;
        $var5 = 1;
        
        echo $var9 = 90;        //another way to print variable
        echo "<br>$var1<br>";   //to print variable
        $var1;                  //will not print and won't display as an error
        var_dump($var1);        //will print the structured information
        var_dump($var2);
        var_dump($var3);
        var_dump($var4);

        define("school", "<br>Silliman University");    //constant, can't be modified
        define("score", 100, true);
        echo school;
        echo score;
        echo "<br>$var1 $var2";
        echo "<br>Greeting: $var1<br>";
        echo $var1;

        //if else statements
        if($var4 == $var5)           
            echo "<br>Equal";
        else
            echo "<br>Not Equal";

        if($var4 === $var5)
            echo "<br>Same Type";
        else
            echo "<br>Different Type";

        echo "<br>";

        //switch
        switch($var1){
            case "Hello":
                echo $var1;
                break;
            case 1234:
                echo $var2;
                break;
            case null:
                echo $var3;
                break;
            case 1.0;
                echo $var4;
                break;
            case 1;
                echo $var5;
                break;
            default:
                echo "none";
                break;
        }

        echo "<br>";

        //loops
        while($var5 < 3){
            echo $var5 . "<br>";
            $var5++;
        }

        do{
            echo $var5 . "<br>";
            $var5++;
        }while($var5 < 8);

        for($var5; $var5 < 12; $var5++){
            echo $var5 . "<br>";
        }

        //function
        function thisone($var6){
            if ($var6 == 10)
                echo "Equal";
            else
                echo "Not Equal";
        }

        thisone(6);

        echo "<br>";

        //returning values
        function f1($var7=20){
            return ++$var7;
        }

        echo f1();

        $var8 = f1(3);
        echo "<br>" . $var8;

        f1(9);

        echo "<br>";

        //arrays
        $fruits = array("apple", "mango", "orange");

        echo count($fruits);
        $length = count($fruits);

        for($x = 0; $x < $length; $x++){
            echo "<br>" . $fruits[$x];
        }

        $age = array(   "Peter" => "35",
                        "Ben" => "37");
        
        foreach($age as $key => $value){
            echo "<br> $key => $value";
        }

        echo "<br>";

        $var10 = 5;
        $var11 = 10;
        echo $var12 = 1 + 1;

        echo "<br>";

        echo ($var10 + $var11)/5;

        echo "<br>";

        $var10 += $var11;
        echo $var10;

        echo "<br>";

        echo ++$var12;  //incrementing

        echo "<br>";

        //floats
        $flt1 = 23.005;

        echo "$flt1<br>";
        $flt2 = round($flt1, 2);    //rounds up to decimal places
        echo "$flt2<br>";
        $flt3 = ceil($flt2);        //rounds up
        echo "$flt3<br>";
        $flt4 = floor($flt2);       //rounds down
        echo "$flt4<br>";

        phpinfo();  //outputs how the version of php was configured
    ?>
</body>
</html>