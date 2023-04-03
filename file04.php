<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $expire = time() + 10;
        setcookie("user", "John", $expire);

        if(isset($_COOKIE["user"]) && !empty($_COOKIE["user"])){
            echo "Welcome " . $_COOKIE["user"];
        } else{
            echo "Welcome guest";
        }
            
    ?>
</body>
</html>