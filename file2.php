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
        $v = 2;
        function f1($v){
            if($v == 10){
                echo "equal";
            }
        }

        function f2($a = 2){
            global $v;
            echo $v;
        }

        $v = 10;
        f2();
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
    ?>
    <form action="" method="GET">
        <br><br>First Name: <input type="text" name="fn"><br>
        Last Name: <input type="text" name="ln"><br>
        
        <br>Favorite color: <br>
        <input type="radio" name="color" value="red" checked>red
        <input type="radio" name="color" value="blue">blue
        <input type="radio" name="color" value="green">green<br><br>

        Favorite dessert: <br>
        <input type="checkbox" name="des[]" value="cake">cake
        <input type="checkbox" name="des[]" value="icecream">icecream
        <input type="checkbox" name="des[]" value="donut">donut<br><br>

        <input type="submit" name="submit" value="NEXT"><br>
    </form>
</body>
</html>