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
        $v = 10;
        function f1($v){
            if($v == 10){
                echo "equal<br>";
            }
        }

        function f2(){
            global $v;
            $v = 15;
        }

        function f3($var1 = 20){
            echo "$var1<br>";
        }

        function f4(&$value, $amt = 1){
            $value += $amt;
        }

        function f5($var3 = 40){
            $var3 *= $var3;
            return $var3;
        }
        
        f1($v);
        f2();
        echo "$v<br>";
        f3();
        f3(15);
        $var2 = 30;
        f4($var2);
        $var3 = f5();
        echo "$var2<br>";
        echo "$var3<br>";


        if(isset($_GET['submit'])){
            $f = $_GET['fn'];
            $l = $_GET['ln'];
        }
        
        echo "<br>firstname: " . $f;
        echo "<br>lastname: " . $l;


        if(isset($_GET['color'])){
            echo "<br><br>Favorite color is " . $_GET['color'];
        }

        if(isset($_GET['des'])){
            $dess = $_GET['des'];
            foreach ($dess as $key => $value){
                if ($key == 0)
                    echo "<br><br>Favorite desserts: ";
                echo "$value ";
            }
        }

        if(isset($_GET['food'])){
            echo "<br><br>Favorite food is {$_GET['food']}";
        }
    ?>
    <form action="file3.php" method="GET">
        <br><br>First Name: <input type="text" name="fn"><br>
        Last Name: <input type="text" name="ln"><br>
        Password: <input type="password" name="pass"><br>
        
        <br>Favorite color: <br>
        <input type="radio" name="color" value="red" checked>red
        <input type="radio" name="color" value="blue">blue
        <input type="radio" name="color" value="green">green<br><br>

        Favorite dessert: <br>
        <input type="checkbox" name="des[]" value="cake">cake
        <input type="checkbox" name="des[]" value="icecream">icecream
        <input type="checkbox" name="des[]" value="donut">donut<br><br>

        Favorite food:<br>
        <select name="food">
            <option value="Asian">Asian</option>
            <option value="Asian">Japanese</option>
            <option value="Asian">Mexican</option>
            <option value="Asian">Thai</option>
        </select><br><br>

        <input type="submit" name="submit" value="NEXT"><br>
    </form>
</body>
</html>