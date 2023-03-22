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
        echo "Start of main file<br>";
        require('file2.php');
        echo "<br>Succeeding lines here<br>";
        echo "End of main file<br><br>";
    ?>
</body>
</html>