<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <table border="1px">
        <?php
        echo "<td>X</td>";
        for ($i=1; $i <= 10; $i++) { 
            echo "<td>$i</td>";
        }
        for ($i=1; $i <= 10; $i++) {
            echo "<tr></tr>";
            echo "<td>".$i."</td>";
            for ($x=1; $x <= 10; $x++) { 
                echo "<td>".$i*$x."</td>";
            }
        }
        ?>
    </table>
</body>
</html>