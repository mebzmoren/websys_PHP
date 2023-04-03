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
        //dates
        // echo date("Y/m/d") . "<br>";
        // echo date("F j, Y") . "<br>";
        // echo date("U") . "<br><br>";    //unix system, number of seconds since Jan 1, 1970

        // //timestamp
        // //$t = mktime(24 * 30, 0, 0);
        // $x = mktime(0, 0, 0, date("F"), date("j"), date("Y"));
        // echo "12 noon today: " . $x . "<br>";
        // echo date("g:i:s", $x) . "<br>";
        // echo date("F j, Y", $x) . "<br>";
    ?>
    <p>MONTHS:</p>
    <table border="1">
        <tr>
            <td>
                <?php
                    for($y = 0; $y < 12; $y++){
                        $time = mktime(0,0,0, 1 + $y);
                        echo date("F", $time) . "<br>";
                    }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>