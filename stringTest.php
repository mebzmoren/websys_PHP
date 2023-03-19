<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 1</title>
</head>
<body>
<?php
    $str1 = "Juan Luna";
    echo "string is: $str1<br><br>";
    $exploded = explode(" ", $str1);
    $fname = $exploded[0];
    $lname = $exploded[1];
    echo "FirstName: $fname<br>Lastname: $lname"
?>
</body>
</html>