<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $pais = array
            (
            "espana" => array
                (
                    "nombre" => "España",
                    "lengua" => "Español",
                    "moneda" => "Euro"
                )
            );
        echo $pais["espana"] ["moneda"];
    ?>
</body>
</html>