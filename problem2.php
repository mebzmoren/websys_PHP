<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem 2</title>
</head>
<body>
    <?php
        $watches = array(   array("fossil", "brown leather", 6000),
                            array("obaku", "mesh type", 5500),
                            array("guess", "stainless", 4500));
    ?>

    <table border="1">
        <tr>
            <th colspan="3">Watches Available</th>
        </tr>
        <tr>
            <td><b>Brand</b></td>
            <td><b>Strap Type</b></td>
            <td><b>Price</b></td>
        </tr>
        <?php
            for($i = 0; $i < count($watches); $i++){
                echo "<tr>";
                for($j = 0; $j < count($watches[0]); $j++){
                    echo "<td>" . $watches[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>